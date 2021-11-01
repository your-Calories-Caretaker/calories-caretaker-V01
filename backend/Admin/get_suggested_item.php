<?php
include('../../config/connect.php');
$sql = "SELECT * FROM item_suggestions where id={$_GET['id']};";
$res = mysqli_query($conn,$sql);
$response = mysqli_fetch_array($res);
echo json_encode($response);
?>