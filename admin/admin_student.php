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
  <title>Admin - Students - Internship Finder</title>

  <?php include 'style_Sheets/admin_stu_style.php';?>

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
      <li><a href="admin_student.php" class="active">Students</a></li>
      <li><a href="admin_companies.php">Companies</a></li>
      <!-- <li><a href="admin_messages.php">Messages</a></li> -->
      <li><a href="sql/logout.php" class="logout-btn">Logout</a></li>
    </ul>
  </nav>

  <!-- Admin Student Management -->
  <main class="student-management">
    <h1>Manage Students</h1>
    <section class="student-table">
      <table>
        <thead>
          <tr>
            <th>Student Name</th>
            <th>Email</th>
            <th>Degree</th>
            <th>Create Date</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <!-- Example student entry, dynamically populated via PHP -->

          <?php
            include '../library/db_conn.php';
            $sql="SELECT * FROM student ORDER BY created_at ASC";
            $result=$conn->query($sql);
            while($row=$result->fetch_assoc())
            {
          ?>
          <tr>
            <td><?php echo $row["full_name"];?></td>
            <td><?php echo $row["uni_email"];?></td>
            <td><?php echo $row["degree"];?></td>
            <td><?php echo $row["created_at"];?></td>
            <td>
              <a href="view_student.php?id=<?php echo $row["stu_id"]; ?>" class="view-btn">View</a>
              <a href='sql/delete_student.php?id=<?php echo $row["stu_id"]; ?>' class='btn delete-btn' 
                role="button" 
                onclick="return confirm('Are you sure you want to delete this Student?');">
                Delete
              </a>

            </td>
          </tr>
          <?php } ?>

          <!-- Additional student entries go here -->
        </tbody>
      </table>
    </section>
  </main>
</body>
</html>
