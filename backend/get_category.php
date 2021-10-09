<?php
include('./config/connect.php');
$sql = "SELECT * FROM categories ORDER BY name";
$res = mysqli_query($conn,$sql);
$categories = mysqli_fetch_all($res,MYSQLI_ASSOC);
?>