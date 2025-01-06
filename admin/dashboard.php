<?php
session_start();
include 'sql/login_check.php';
$admin_id=$_SESSION["id"];
// database connection 
include '../library/db_conn.php';

// Include the database connection
include '../library/db_conn.php';

// Fetch data from the database
// 1. Total Students
$student_count_query = "SELECT COUNT(*) AS total_students FROM student";
$student_count_result = mysqli_query($conn, $student_count_query);
$total_students = mysqli_fetch_assoc($student_count_result)['total_students'];

// 2. Total Companies
$company_count_query = "SELECT COUNT(*) AS total_companies FROM companies";
$company_count_result = mysqli_query($conn, $company_count_query);
$total_companies = mysqli_fetch_assoc($company_count_result)['total_companies'];

// 3. Total Applications
$application_count_query = "SELECT COUNT(*) AS total_applications FROM application";
$application_count_result = mysqli_query($conn, $application_count_query);
$total_applications = mysqli_fetch_assoc($application_count_result)['total_applications'];

// 4. Latest Activity
$latest_companies_query = "SELECT name, skills FROM companies ORDER BY date DESC LIMIT 1";
$latest_companies_result = mysqli_query($conn, $latest_companies_query);
$latest_company = mysqli_fetch_assoc($latest_companies_result);

$latest_students_query = "SELECT full_name, degree FROM student ORDER BY created_at DESC LIMIT 1";
$latest_students_result = mysqli_query($conn, $latest_students_query);
$latest_student = mysqli_fetch_assoc($latest_students_result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard - Internship Finder</title>

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
      <li><a href="dashboard.php" class="active">Dashboard</a></li>
      <li><a href="admin_student.php">Students</a></li>
      <li><a href="admin_companies.php">Companies</a></li>
      <!-- <li><a href="admin_messages.php">Messages</a></li> -->
      <li><a href="sql/logout.php" class="logout-btn">Logout</a></li>
    </ul>
  </nav>

  <!-- Admin Dashboard Content -->
  <main class="dashboard">
    <h1>Welcome, Admin</h1>

    <!-- Dashboard Stats -->
    <section class="stats">
      <div class="stat-card">
        <h2>Total Students</h2>
        <p><?php echo $total_students; ?></p>
      </div>
      <div class="stat-card">
        <h2>Total Companies</h2>
        <p><?php echo $total_companies; ?></p>
      </div>
      <div class="stat-card">
        <h2>Total Applications</h2>
        <p><?php echo $total_applications; ?></p>
      </div>
    </section>

    <!-- Latest Activity Section -->
    <section class="latest-activity">
      <h2>Latest Activity</h2>
      <div class="activity-card">
        <h3>New Company Added: <?php echo $latest_company['name']; ?></h3>
        <p>Skills: <?php echo $latest_company['skills']; ?></p>
      </div>
      <div class="activity-card">
        <h3>New Student Registered: <?php echo $latest_student['full_name']; ?></h3>
        <p>Degree: <?php echo $latest_student['degree']; ?></p>
      </div>
    </section>
  </main>
</body>
</html>
