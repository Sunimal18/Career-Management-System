<?php session_start();
?>
<?php
// database connection 
include '../../library/db_conn.php';

$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$check=0;

$sql=" SELECT * FROM admin WHERE user_name='$username' AND password='$password' ";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    $check=1;
    $admin_id=$row["id"];
}
if($check==1){
    session_start();
    $_SESSION["id"]=$admin_id;

    header("location: ../dashboard.php");
}
else{
    echo '<script type="text/javascript">alert("Invalid login! try again!");</script>';
    echo '<script type="text/javascript">window.location.href = "../";</script>';
}


?>