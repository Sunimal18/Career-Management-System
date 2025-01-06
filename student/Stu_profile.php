<?php
// Include database connection
include '../library/db_conn.php';

// Start the session
session_start();

// Check if the student is logged in
if (!isset($_SESSION['student_id'])) {
    echo "<script>alert('Please log in to access your profile.');</script>";
    echo "<script>window.location.href='login.php';</script>";
    exit();
}

// Fetch logged-in student details
$student_id = $_SESSION['student_id'];
$sql = "SELECT full_name, uni_email, degree FROM student WHERE stu_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $student_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $student = $result->fetch_assoc();
} else {
    echo "<script>alert('Unable to fetch student data. Please try again.');</script>";
    echo "<script>window.location.href='home.php';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Profile</title>

  <?php include '../style_Sheets/stu_profile_style.php';?>
  <?php include '../style_Sheets/studenthome_style.php';?>

</head>
<body>
    <!-- navigation bar -->
    <nav class="navbar">
        <div class="logo">
        <img src="../library/logo.png" alt="Logo">
        <!-- <span>Internship Finder</span> -->
        </div>
        <ul class="nav-links">
        <li><a href="home.php">Home</a></li>
        <li><a href="stu_profile.php">My Profile</a></li>
        <li><a href="company_list.php">Company List</a></li>
        <li><a href="search.php">Search Company</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="sql/logout.php" class="logout-btn">Logout</a></li>
        </ul>
    </nav>

  <div class="profile-container">
    <header class="profile-header">
      <h1>Your Profile</h1>
    </header>
    <div class="profile-card">
      <img src="../image/avatar.webp" alt="Avatar" class="profile-avatar">
      <h2><?php echo htmlspecialchars($student['full_name']); ?></h2>
      <p><strong>Email:</strong> <?php echo htmlspecialchars($student['uni_email']); ?></p>
      <p><strong>Degree:</strong> <?php echo htmlspecialchars($student['degree']); ?></p>
      <a href="edit_stuprofile.php?id=<?php echo $student_id; ?>" class="profile-edit-button">Edit Profile</a>
    </div>
  </div>
</body>
</html>
