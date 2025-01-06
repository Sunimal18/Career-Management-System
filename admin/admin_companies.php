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
  <title>Admin - Companies</title>

  <?php include 'style_Sheets/admin_com_style.php';?>

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
      <li><a href="admin_companies.php" class="active">Companies</a></li>
      <!-- <li><a href="admin_messages.php">Messages</a></li> -->
      <li><a href="sql/logout.php" class="logout-btn">Logout</a></li>
    </ul>
  </nav>

  <!-- Companies List -->
  <main class="admin-companies">
    <h1>Companies List</h1> 
    <a href='add_company.php' class='btn add-btn' style="margin-left:20px">+ Add New Company</a>
    <div class="table-container">
      <table>
        <thead>
          <tr>
            <th>#</th>
            <th>Company Name</th>
            <th>Email</th>
            <th>Location</th>
            <th>Skills</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          <?php
            $sql="SELECT * FROM companies ORDER BY date ASC";
            $result=$conn->query($sql);
            while($row=$result->fetch_assoc())
            {
          ?>
            <td><?php echo $row["com_id"];?></td>
            <td><?php echo $row["name"];?></td>
            <td><?php echo $row["email"];?></td>
            <td><?php echo $row["location"];?></td>
            <td><?php echo $row["skills"];?></td>

            <td>
              <a href='view_company.php?id=<?php echo $row["com_id"]; ?>' class='btn view-btn'>View</a>
              <a href='edit_company.php?id=<?php echo $row["com_id"]; ?>' class='btn edit-btn'>Edit</a>
              <a href='sql/delete_company.php?id=<?php echo $row["com_id"]; ?>' class='btn delete-btn' 
                role="button" 
                onclick="return confirm('Are you sure you want to delete this company?');">
                Delete
              </a>
            </td>
           </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </main>
</body>
</html>
