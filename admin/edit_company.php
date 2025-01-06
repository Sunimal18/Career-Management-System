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
    <title>Edit Company</title>
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

    <!-- Edit Company Form -->

    <?php
        $id=$_REQUEST['id'];
        $sql="SELECT * FROM companies WHERE com_id=$id";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc())
        {
    ?>
    <main class="edit-company">
        <h1>Edit Company</h1>
        <form action="sql/edit_company.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['com_id'] ?>">

            <label for="name">Company Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required>

            <label for="">Location:</label>
            <input type="text" id="location" name="location" value="<?php echo $row['location']; ?>" required>

            <label for="email">Category:</label>
            <input type="text" id="category" name="category" value="<?php echo $row['category']; ?>" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="5" required><?php echo $row['description']; ?></textarea>

            <label for="skills">Skills Required:</label>
            <textarea id="skills" name="skills" rows="3" required><?php echo $row['skills']; ?></textarea>

            <button type="submit" class="btn">Save Changes</button>
            <a href="admin_companies.php?id=<?php echo $row["com_id"]; ?>" class="btn cancel-btn">Cancel</a>
        </form>
    </main>
    <?php } ?>
</body>
</html>
