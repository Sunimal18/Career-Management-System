<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - Internship Finder</title>

  <?php include '../style_Sheets/contact_style.php';?>
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
      <li><a href="contact.php" class="active">Contact Us</a></li>
      <li><a href="sql/logout.php" class="logout-btn">Logout</a></li>
    </ul>
  </nav>

  <!-- Main Content -->
  <main class="contact-us">
    <h1>Contact Us</h1>
    <!-- Contact Information Section -->
    <section class="contact-info">
      <h2>Our Office</h2>
      <p><strong>Address:</strong> 123 Main St, Colombo, Sri Lanka</p>
      <p><strong>Email:</strong> support@internshipfinder.com</p>
      <p><strong>Phone:</strong> +94 123 456 789</p>
    </section>
  </main>
</body>
</html>
