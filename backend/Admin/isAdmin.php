<?php
session_start();
include('../config/connect.php');
if(!isset($_SESSION['id'])){
    header('Location: ../login.php');
}
$id = $_SESSION['id'];
$sql = "SELECT * FROM admin WHERE user_id=$id";
$res = mysqli_query($conn,$sql);
if(mysqli_num_rows($res) == 0){
    header('Location: ../index.php');
}
?>