<?php
session_start();
include 'sql/login_check.php';
$admin_id=$_SESSION["id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Company</title>

  <?php include 'style_Sheets/add_com_style.php';?>

</head>
<body>

  <!-- Add Company Form -->
  <main class="edit-company">
    <h1>Add New Company</h1>
    <form action="sql/add_company.php" method="POST">
      <label for="name">Company Name:</label>
      <input type="text" id="name" name="name" placeholder="Enter company name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter company email" required>

      <label>Location:</label>
      <input type="text" id="location" name="location" placeholder="Enter company Location" required>

      <label>Category:</label>
      <input type="text" id="category" name="category" placeholder="Enter Job Category" required>

      <label for="description">Description:</label>
      <textarea id="description" name="description" rows="5" placeholder="Enter company description" required></textarea>

      <label for="skills">Skills Required:</label>
      <textarea id="skills" name="skills" rows="3" placeholder="Enter required skills, separated by commas" required></textarea>

      <button type="submit" class="btn">Add Company</button>
      <a href="admin_companies.php" class="btn cancel-btn">Cancel</a>
    </form>
  </main>
</body>
</html>
