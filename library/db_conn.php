
<?php
    // database connection 
    $conn = new mysqli("localhost", "root", "", "internship_finder");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>
