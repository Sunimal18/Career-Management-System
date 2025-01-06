<?php
session_start();
// Include database connection
include '../../library/db_conn.php';

$student_id = $_SESSION['student_id'];
$com_id = $_SESSION['com_id'];

// Create date
$date = date('Y-m-d');

// Insert new application into the database
$sql_insert = "INSERT INTO application (com_id, student_id, date) VALUES (?, ?, ?)";
$stmt_insert = $conn->prepare($sql_insert);
$stmt_insert->bind_param("iis", $com_id, $student_id, $date);

if ($stmt_insert->execute()) {
    echo "<script>alert('Application sent successfully!');</script>";
    echo "<script>window.location.href='../company_list.php';</script>";
} else {
    echo "<script>alert('Error: Unable to update Application Table. Please try again later.');</script>";
    echo "<script>window.location.href='../company_list.php';</script>";
}

// Close the statement and connection
$stmt_insert->close();
$conn->close();
?>
