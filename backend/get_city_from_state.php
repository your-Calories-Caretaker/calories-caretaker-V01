<?php
$ans = array('a'=>2);
include('../config/connect.php');
$sql = 'SELECT * FROM cities';
$res = mysqli_query($conn,$sql);
$cities = mysqli_fetch_all($res,MYSQLI_ASSOC);
echo json_encode($cities);
?>