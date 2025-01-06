<?php
// Include database connection
include '../library/db_conn.php';

// Start the session
session_start();

// Check if the student is logged in
if (!isset($_SESSION['student_id'])) {
    echo "<script>alert('Please log in to access company details.');</script>";
    echo "<script>window.location.href='login.php';</script>";
    exit();
}

// Check if the company ID is provided
if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "<script>alert('Invalid company ID.');</script>";
    echo "<script>window.location.href='company_list.php';</script>";
    exit();
}

// Sanitize the company ID
$company_id = intval($_GET['id']);

// Fetch company details from the database
$sql = "SELECT * FROM companies WHERE com_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $company_id);
$stmt->execute();
$result = $stmt->get_result();

// Check if the company exists
if ($result->num_rows === 0) {
    echo "<script>alert('Company not found.');</script>";
    echo "<script>window.location.href='company_list.php';</script>";
    exit();
}

// Fetch company data
$company = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Company Details - Internship Finder</title>
  <?php include '../style_Sheets/com_details_style.php';?>
  <?php include '../style_Sheets/studenthome_style.php';?>

</head>
<body>
  <!-- Navigation Bar -->
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

  <!-- Main Content -->
  <main class="company-details">
    <section class="company-info">
      <h1><?php echo htmlspecialchars($company['name']); ?></h1>
      <p><strong>Location:</strong> <?php echo htmlspecialchars($company['location']); ?></p>
      <p><strong>Looking for:</strong> <?php echo htmlspecialchars($company['category']); ?></p>
      <p><strong>Description:</strong> <?php echo htmlspecialchars($company['description']); ?></p>
    </section>

    <section class="action-section">
      <h2>Skills Required:</h2>
      <ul>
        <?php
        $skills = explode(',', $company['skills']); // Assuming skills are stored as comma-separated values
        foreach ($skills as $skill) {
            echo "<li>" . htmlspecialchars(trim($skill)) . "</li>";
        }
        ?>
      </ul>

<a href="sql/send_mail.php?id=<?php echo htmlspecialchars($company['com_id']); ?>" class="apply-btn">
    Apply Now
</a>

    </section>
  </main>
</body>
</html>
