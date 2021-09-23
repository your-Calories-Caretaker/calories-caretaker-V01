<?php
include('./config/connect.php');
$is_bmi = false;
$bmi_count = 0;
$sql = "SELECT BMI from bmi where user_id={$_SESSION['id']}";
$res = mysqli_query($conn,$sql);
$res2 = mysqli_query($conn,$sql);
if(mysqli_num_rows($res) == 1){ 
    $is_bmi = true;
    $bmi_count = mysqli_fetch_array($res2)['BMI'];
} 
?>