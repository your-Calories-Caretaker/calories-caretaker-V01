<?php
    include('./config/connect.php');
    $user_id = $_SESSION['id'];
    $sql = "SELECT * FROM users where id=$user_id";
    $res = mysqli_query($conn,$sql);
    $user_details = mysqli_fetch_array($res);
    $sql = "SELECT city_name from cities where id={$user_details['city_id']}";
    $res = mysqli_query($conn,$sql);
    $city_name = mysqli_fetch_array($res);
?>