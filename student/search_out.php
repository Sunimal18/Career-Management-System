<?php
// Include database connection
include '../library/db_conn.php';

// Start the session
session_start();

// Check if the student is logged in
if (!isset($_SESSION['student_id'])) {
    echo "<script>alert('Please log in to perform a search.');</script>";
    echo "<script>window.location.href='login.php';</script>";
    exit();
}

// Check if the search query is provided
if (!isset($_GET['query']) || empty($_GET['query'])) {
    echo "<script>alert('Please enter a search term.');</script>";
    echo "<script>window.location.href='search.php';</script>";
    exit();
}

// Sanitize the search query
$search_query = htmlspecialchars($_GET['query']);

// Search query to find companies based on name or skills
$sql = "SELECT com_id, name, location, skills FROM companies 
        WHERE name LIKE ? OR skills LIKE ?";
$search_term = "%" . $search_query . "%";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $search_term, $search_term);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search Results - Internship Finder</title>

  <?php include '../style_Sheets/search_style.php';?>
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
      <li><a href="search.php" class="active">Search Company</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      <li><a href="sql/logout.php" class="logout-btn">Logout</a></li>
    </ul>
  </nav>

  <!-- Main Content -->
  <main class="search-page">
    <h1>Search Results for "<?php echo htmlspecialchars($search_query); ?>"</h1>
    <section class="search-results">
      <?php if ($result->num_rows > 0): ?>
        <?php while ($company = $result->fetch_assoc()): ?>
          <div class="company-card">
            <h3><?php echo htmlspecialchars($company['name']); ?></h3>
            <p><strong>Skills:</strong> <?php echo htmlspecialchars($company['skills']); ?></p>
            <p><strong>Location:</strong> <?php echo htmlspecialchars($company['location']); ?></p>
            <a href="company_details.php?id=<?php echo $company['com_id']; ?>" class="view-btn">View Details</a>
            <a href="Search.php" class="back-link">Cancel and Return to Search</a>
          </div>
        <?php endwhile; ?>
      <?php else: ?>
        <p>No companies found matching your search criteria.</p>
      <?php endif; ?>
    </section>
  </main>
</body>
</html>
