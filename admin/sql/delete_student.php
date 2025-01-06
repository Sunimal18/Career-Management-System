<?php
// DB CONN
include '../../library/db_conn.php';

// data
$id=$_REQUEST['id'];

$sql="DELETE FROM student WHERE stu_id='$id';";


//Execution
if($conn->query($sql)===TRUE){
    header('location: ../admin_student.php');
}

else{
    echo "error";
}





?>