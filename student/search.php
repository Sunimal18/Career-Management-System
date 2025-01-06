<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search Company - Internship Finder</title>

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
    <h1>Search for Companies</h1>
    <form action="search_out.php" method="GET" class="search-form">
      <input type="text" name="query" placeholder="Enter company name or skills..." required>
      <button type="submit">Search</button>
    </form>

    <!-- Example of a search result section -->
    <section class="search-results">
      <h2>Company List</h2>
      <?php
        include '../library/db_conn.php';
        $sql="SELECT * FROM companies ORDER BY date ASC";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc())
        {
      ?>
      <div class="company-card">
        <h3>ABC Tech Solutions</h3>
        <p><strong>Skills:</strong> Web Development, UI/UX Design</p>
        <p><strong>Location:</strong> Colombo, Sri Lanka</p>
        <a href="company-details.php?id=1" class="view-btn">View Details</a>
      </div>
      <?php } ?> 
    </section>
  </main>
</body>
</html>
