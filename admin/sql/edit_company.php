<?php 

// database connection 
include '../../library/db_conn.php';

// data 
$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$location=$_REQUEST['location'];
$category=$_REQUEST['category'];
$description=$_REQUEST['description'];
$skills=$_REQUEST['skills'];


//insert to DB
$sql = "UPDATE companies 
        SET name = '$name', 
            email = '$email', 
            description = '$description', 
            skills = '$Skills', 
            location = '$location', 
            category = '$category'
        WHERE com_id = $id";


//Execution
if($conn->query($sql)===TRUE){
    echo"<script>";
    echo "alert ('Successful Edited!');";
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