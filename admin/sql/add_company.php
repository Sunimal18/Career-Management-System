<?php
// database connection 
include '../../library/db_conn.php';

// get data from form
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$location=$_REQUEST['location'];
$category=$_REQUEST['category'];
$description=$_REQUEST['description'];
$skills=$_REQUEST['skills'];
$date=date('Y-m-d');

//insert to DB
$sql="INSERT INTO companies(name, email, description, skills, location, category, date) 
VALUES('$name','$email','$description','$skills','$location','$category','$date')";

//Execution
if($conn->query($sql)===TRUE){
    echo"<script>";
    echo "alert ('Company Adding Successful!');";
    echo"</script>";
    header('location: ../admin_companies.php');
}
else{
    echo"<script>";
    echo "alert ('Error, Try  Again Later!');";
    echo"</script>";
    header('location: ../admin_companies.php');
}


?>