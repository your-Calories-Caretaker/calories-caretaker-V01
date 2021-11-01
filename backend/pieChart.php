<?php
include('../config/connect.php');

$date = date('Y-m-d');



$sql = "SELECT quantity, calories, category_id FROM history as h INNER JOIN food_items as f ON h.item_id = f.item_id where added_at = '$date'";
// $sql = "SELECT name from categories GROUP BY name";
$res = mysqli_query($conn,$sql);
$data = mysqli_fetch_all($res,MYSQLI_ASSOC);




for ($i=0; $i<count($data); $i++){
    $sql = "SELECT name from categories where id={$data[$i]['category_id']}";
    $res = mysqli_query($conn,$sql);
    $cal = mysqli_fetch_array($res);
    $data[$i]['category'] = $cal['name'];
    $data[$i]['color'] = '#'.rand(100000,999999);
}

echo json_encode($data);
?>