<?php
// Include database connection
include '../../library/db_conn.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Validate input fields
    if (empty($email) || empty($password)) {
        echo "<script>alert('Both fields are required.');</script>";
        echo "<script>window.location.href='../login.php';</script>";
        exit();
    }

    // Validate university email domain
    $universityDomain = "@stu.cmb.ac.lk";
    if (strpos($email, $universityDomain) === false) {
        echo "<script>alert('Please use your university email.');</script>";
        echo "<script>window.location.href='../login.php';</script>";
        exit();
    }

    // Check if email exists and password matches
    $sql = "SELECT stu_id, full_name, password FROM student WHERE uni_email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 0) {
        echo "<script>alert('Invalid email or password.');</script>";
        echo "<script>window.location.href='../login.php';</script>";
        exit();
    }

    // Fetch user data
    $user = $result->fetch_assoc();

    if ($user['password'] !== $password) {
        echo "<script>alert('Invalid email or password.');</script>";
        echo "<script>window.location.href='../login.php';</script>";
        exit();
    }

    // Set session variables
    $_SESSION['student_id'] = $user['stu_id'];
    $_SESSION['student_name'] = $user['full_name'];

    // Redirect to the student dashboard
    echo "<script>alert('Login successful.');</script>";
    echo "<script>window.location.href='../home.php';</script>";
    exit();
}
?>
