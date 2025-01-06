<?php
// Include database connection
include '../../library/db_conn.php';

// Start the session
session_start();

// Check if the student is logged in
if (!isset($_SESSION['student_id'])) {
    echo "<script>alert('Please log in to update your profile.');</script>";
    echo "<script>window.location.href='login.php';</script>";
    exit();
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = $_SESSION['student_id'];

    // Sanitize input
    $name = trim($_POST['name']);
    $degree = trim($_POST['degree']);
    $cv_name = null;

    // Handle CV upload if a new file is uploaded
    if (isset($_FILES['cv']) && $_FILES['cv']['error'] == 0) {
        $temp = $_FILES['cv']['tmp_name'];
        $original_name = $_FILES['cv']['name'];
        $cv_name = date('YmdHis') . "_" . rand(1000, 9999) . "_" . $original_name;

        // Define upload destination
        $destination = "../cv/" . $cv_name;

        // Move the uploaded file
        if (!move_uploaded_file($temp, $destination)) {
            echo "<script>alert('Failed to upload CV. Please try again.');</script>";
            echo "<script>window.location.href='edit_stuprofile.php';</script>";
            exit();
        }
    }

    // Update student information in the database
    if ($cv_name) {
        $sql = "UPDATE student SET full_name = ?, degree = ?, cv = ? WHERE stu_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $name, $degree, $cv_name, $student_id);
    } else {
        $sql = "UPDATE student SET full_name = ?, degree = ? WHERE stu_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $name, $degree, $student_id);
    }

    if ($stmt->execute()) {
        echo "<script>alert('Profile updated successfully!');</script>";
        echo "<script>window.location.href='../stu_profile.php';</script>";
    } else {
        echo "<script>alert('Failed to update profile. Please try again later.');</script>";
        echo "<script>window.location.href='edit_stuprofile.php';</script>";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "<script>alert('Invalid request.');</script>";
    echo "<script>window.location.href='stu_profile.php';</script>";
}
?>
