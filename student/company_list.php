<?php
// Include database connection
include '../library/db_conn.php';

// Start the session
session_start();

// Check if the student is logged in
if (!isset($_SESSION['student_id'])) {
    echo "<script>alert('Please log in to access the company list.');</script>";
    echo "<script>window.location.href='login.php';</script>";
    exit();
}

// Fetch all companies from the database
$sql = "SELECT * FROM companies";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Company List - Internship Finder</title>
  <link rel="stylesheet" href="styles.css">

  <?php include '../style_Sheets/studenthome_style.php';?>
  <?php include '../style_Sheets/companylist_style.php';?>
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
      <li><a href="company_list.php" class="active">Company List</a></li>
      <li><a href="search.php">Search Company</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      <li><a href="sql/logout.php" class="logout-btn">Logout</a></li>
    </ul>
  </nav>

  <!-- Main Content -->
  <main class="company-list">
    <h1>Available Companies</h1>
    <div class="company-grid">
      <?php
      // Check if there are companies
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              ?>
              <div class="company-card">
                <h3><?php echo htmlspecialchars($row['name']); ?></h3>
                <p>Looking for: <?php echo htmlspecialchars($row['category']); ?></p>
                <p><strong>Location:</strong> <?php echo htmlspecialchars($row['location']); ?></p>
                <a href="company_details.php?id=<?php echo $row['com_id']; ?>" class="view-btn">View Details</a>
              </div>
              <?php
          }
      } else {
          echo "<p>No companies available at the moment.</p>";
      }
      ?>
    </div>
  </main>
</body>
</html>
