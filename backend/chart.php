<?php
include('../config/connect.php');
$sql = "SELECT quantity,item_id, added_at FROM history ORDER BY added_at";
$res = mysqli_query($conn,$sql);
$data = mysqli_fetch_all($res,MYSQLI_ASSOC);
for ($i=0; $i<count($data); $i++){
    $sql = "SELECT calories from food_items where item_id={$data[$i]['item_id']}";
    $res = mysqli_query($conn,$sql);
    $cal = mysqli_fetch_array($res);
    $data[$i]['calorie'] = $cal['calories'];
    $data[$i]['color'] = '#'.rand(100000,999999);
}
echo json_encode($data);
?>