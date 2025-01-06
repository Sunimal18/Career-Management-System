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
  <title>View Student - Internship Finder</title>

  <?php include 'style_Sheets/view_stu_style.php';?>

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

  <!-- View Student Content -->

  <?php
        include '../library/db_conn.php';
        $id=$_REQUEST['id'];
        $sql="SELECT * FROM student WHERE stu_id=$id";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc())
        {
    ?>
  <main class="view-student">
    <h1>Student Profile</h1>
    <div class="student-details">
      <p><strong>Name:</strong> <?php echo $row['full_name']; ?></p>
      <p><strong>Email:</strong> <?php echo $row['uni_email']; ?></p>
      <p><strong>Degree:</strong> <?php echo $row['degree']; ?></p>
      <p><strong>Create Date:</strong> <?php echo $row['created_at']; ?></p>
      <p><strong>CV:</strong> <a href="../student/cv/<?php echo $row['cv']; ?>" target="_blank">Download CV</a></p>
      <a href="admin_student.php" class="edit-btn">Back</a>
    </div>
  </main>
  <?php } ?>
</body>
</html>
