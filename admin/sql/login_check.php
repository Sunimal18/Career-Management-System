<!-- fixed login error -->
<?php
if(!isset($_SESSION["id"])){
    echo"<script>";
    echo "alert ('Please Login!');";
    echo "window.location.replace('index.php');";
    echo"</script>";
}
?>
