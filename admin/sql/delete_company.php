<?php
// DB CONN
include '../../library/db_conn.php';

// data
$id=$_REQUEST['id'];

$sql="DELETE FROM companies WHERE com_id='$id';";


//Execution
if($conn->query($sql)===TRUE){
    header('location: ../admin_companies.php');
}

else{
    echo "error";
}

// test comment



?>