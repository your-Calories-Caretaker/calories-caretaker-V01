<?php
include('./config/connect.php');
$sql = "SELECT * FROM states";
$res = mysqli_query($conn,$sql);
$states_from_db = mysqli_fetch_all($res,MYSQLI_ASSOC);
?>