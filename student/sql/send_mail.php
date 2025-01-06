<?php
// Include PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

session_start();

// Check if the student is logged in
if (!isset($_SESSION['student_id'])) {
    echo "<script>alert('Please log in to access the company list.');</script>";
    echo "<script>window.location.href='login.php';</script>";
    exit();
}

$student_id = $_SESSION['student_id'];
include '../../library/db_conn.php';

// Fetch student details
$sql = "SELECT * FROM student WHERE stu_id = $student_id";
$result = $conn->query($sql);
if ($row = $result->fetch_assoc()) {
    $st_name = $row['full_name'];
    $uni_mail = $row['uni_email'];
    $degree = $row['degree'];
    $cv = $row['cv'];
} else {
    echo "Student not found.";
    exit();
}

// Fetch company email
$id = $_REQUEST['id'];
$sql = "SELECT email FROM companies WHERE com_id = $id";
$result = $conn->query($sql);
if ($row = $result->fetch_assoc()) {
    $com_email = $row['email'];
} else {
    echo "Company not found.";
    exit();
}

try {
    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    // Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'careermanagement1231@gmail.com'; // SMTP username
    $mail->Password = 'zkdo fbhp kyfc nlfd';            // SMTP app password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Recipients
    $mail->setFrom('careermanagement1231@gmail.com', 'Career Management System'); // Sender email and name
    $mail->addAddress($com_email, 'HR Department'); // Recipient email and name

    // Attach the CV
    $cv_path = "../cv/" . $cv;
    if (file_exists($cv_path)) {
        $mail->addAttachment($cv_path); // Attach the CV
    } else {
        echo "CV file not found.";
        exit();
    }

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Apply for Internship';
    $mail->Body = "
        <h1>Application for Internship</h1>
        <p><strong>Name:</strong> $st_name</p>
        <p><strong>Email:</strong> $uni_mail</p>
        <p><strong>Degree:</strong> $degree</p>
        <p>Please find my CV attached for your review.</p>";
    $mail->AltBody = "Application for Internship\n\nName: $st_name\nEmail: $uni_mail\nDegree: $degree\nPlease find my CV attached for your review.";

    $_SESSION['com_id'] = $id;

    // Send the email
    $mail->send();
    echo "<script>window.location.href='update_application.php';</script>";
} catch (Exception $e) {
    echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
    echo "<script>alert('Email could not be sent. Please Try again');</script>";
    echo "<script>window.location.href='../company_list.php';</script>";
}
?>
