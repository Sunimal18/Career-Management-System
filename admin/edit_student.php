<?php
    session_start();
    include 'sql/login_check.php';
    $admin_id=$_SESSION["id"];
    include '../library/db_conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Student - Internship Finder</title>

  <?php include 'style_Sheets/edit_stu_style.php';?>

</head>
<body>
  <!-- Navbar -->
  <nav class="navbar">
    <div class="logo">
      <img src="../library/logo.png" alt="Logo">
      <!-- <span>Internship Finder</span> -->
    </div>
    <ul class="nav-links">
      <li><a href="dashboard.php">Dashboard</a></li>
      <li><a href="admin_student.php">Students</a></li>
      <li><a href="admin_companies.php">Companies</a></li>
      <!-- <li><a href="admin_messages.php">Messages</a></li> -->
      <li><a href="sql/logout.php" class="logout-btn">Logout</a></li>
    </ul>
  </nav>

  <!-- Edit Student Content -->
  <main class="edit-student">
    <h1>Edit Student Profile</h1>
    <form method="POST">
      <label for="name">Full Name:</label>
      <input type="text" name="name" value="<?php //echo $student['name']; ?>" required>

      <label for="email">Email:</label>
      <input type="email" name="email" value="<?php // echo $student['email']; ?>" required>

      <label for="degree">Degree:</label>
      <input type="text" name="degree" value="<?php //echo $student['degree']; ?>" required>

      <label for="status">Profile Status:</label>
      <select name="status" required>
        <option value="1" <?php //echo ($student['status'] == 1) ? 'selected' : ''; ?>>Active</option>
        <option value="0" <?php //echo ($student['status'] == 0) ? 'selected' : ''; ?>>Inactive</option>
      </select>

      <button type="submit" class="submit-btn">Save Changes</button>
    </form>
  </main>

</body>
</html>
