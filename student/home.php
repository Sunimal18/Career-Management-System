<?php
// Include database connection
include '../library/db_conn.php';

// Start the session
session_start();

// Check if the student is logged in
if (!isset($_SESSION['student_id'])) {
    echo "<script>alert('Please log in to access your dashboard.');</script>";
    echo "<script>window.location.href='login.php';</script>";
    exit();
}

// Fetch logged-in student details
$student_id = $_SESSION['student_id'];
$sql = "SELECT full_name, uni_email, degree, cv, created_at FROM student WHERE stu_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $student_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $student = $result->fetch_assoc();
} else {
    echo "<script>alert('Unable to fetch student data. Please try again.');</script>";
    echo "<script>window.location.href='../login.php';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Internship Finder</title>

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

  <main class="dashboard-content">
    <section class="welcome-section">
      <h1>Welcome,  <?php echo htmlspecialchars($student['full_name']); ?></h1>
      <p>Explore companies, apply for internships, and start your career journey!</p>
    </section>

    <section class="quick-actions">
      <div class="action-card">
        <h3>My Profile</h3>
        <p>View and edit your profile</p>
        <a href="Stu_profile.php?id=<?php echo $student_id; ?>" class="action-btn">Go to Profile</a>
      </div>
      <div class="action-card">
        <h3>Company List</h3>
        <p>Browse all available companies</p>
        <a href="company_list.php" class="action-btn">View Companies</a>
      </div>
      <div class="action-card">
        <h3>Search Company</h3>
        <p>Find companies by name or skills</p>
        <a href="search.php" class="action-btn">Search Now</a>
      </div>
    </section>
  </main>
</body>
</html>
