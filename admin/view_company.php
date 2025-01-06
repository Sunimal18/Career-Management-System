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
    <title>View Company</title>

    <?php include 'style_Sheets/view_com_style.php';?>
    <?php include 'style_Sheets/dashboard_style.php';?>

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
            <li><a href="sql/logout.php" class="logout-btn">Logout</a></li>
        </ul>
    </nav>

    <!-- Company Details -->

    <?php
        $id=$_REQUEST['id'];
        $sql="SELECT * FROM companies WHERE com_id=$id";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc())
        {
    ?>
    <main class="view-company">
        <h1><?php echo $row['name']; ?></h1>
        <p><strong>Email:</strong> <?php echo $row['email']; ?></p>
        <p><strong>Description:</strong><?php echo $row['description']; ?></p>
        <p><strong>Skills Required:</strong> <?php echo $row['skills']; ?></p>
        <p><strong>Location:</strong> <?php echo $row['location']; ?></p>
        <p><strong>Category:</strong> <?php echo $row['category']; ?></p>

        <a href="admin_companies.php" class="btn">Back to Companies</a>
    </main>
    <?php } ?>
</body>
</html>
