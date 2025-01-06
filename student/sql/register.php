<?php
// Include database connection
include '../../library/db_conn.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $degree = trim($_POST['degree']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);
    
    // Validate university email
    $universityDomain = "@stu.cmb.ac.lk";
    if (strpos($email, $universityDomain) === false) {
        echo "<script>alert('Please use a valid university email.');</script>";
        echo "<script>window.location.href='../register.php';</script>";
        exit();
    }

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match.');</script>";
        echo "<script>window.location.href='../register.php';</script>";
        exit();
    }

    // Check if email already exists
    $sql_check = "SELECT * FROM student WHERE uni_email = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param("s", $email);
    $stmt_check->execute();
    $result_check = $stmt_check->get_result();

    if ($result_check->num_rows > 0) {
        echo "<script>alert('This email is already registered.');</script>";
        echo "<script>window.location.href='../register.php';</script>";
        exit();
    }

//CV
$temp=$_FILES["cv"]["tmp_name"];
$cv_x=$_FILES["cv"]["name"];
$cv_name=date('YmdHis')."_".rand(10,99999).'.pdf';

//Destination
$destination="../cv/".$cv_name;

//move the files
move_uploaded_file($temp,$destination);

//create date
$date=date('Y-m-d');

// Insert new student into the database
$sql_insert = "INSERT INTO student (full_name, uni_email, password, degree, cv, created_at) VALUES (?, ?, ?, ?, ?, ?)";
$stmt_insert = $conn->prepare($sql_insert);
$stmt_insert->bind_param("ssssss", $name, $email, $password, $degree, $cv_name, $date);

    if ($stmt_insert->execute()) {
        echo "<script>alert('Registration successful! You can now login.');</script>";
        echo "<script>window.location.href='../login.php';</script>";
    } else {
        echo "<script>alert('Error: Unable to register. Please try again later.');</script>";
        echo "<script>window.location.href='../register.php';</script>";
    }
}
?>
