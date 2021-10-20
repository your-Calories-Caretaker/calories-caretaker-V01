<?php
include('./config/connect.php');
$user_id = $_SESSION['id'];
$sql = "SELECT item_id,quantity,added_at,meal_type FROM history where user_id = $user_id";
$res = mysqli_query($conn,$sql);
$details = mysqli_fetch_all($res,MYSQLI_ASSOC);
for($i=0; $i<count($details); $i++)
{
    $sql = "SELECT * from food_items where item_id={$details[$i]['item_id']}";
    $res = mysqli_query($conn,$sql);
    $item_name = mysqli_fetch_array($res);
    $item = $item_name['name'];
    $calories = $item_name['calories'];
    $category_id = $item_name['category_id'];
    array_push($details[$i],$item);
    array_push($details[$i],$calories);
    $sql = "SELECT * from categories where id=$category_id";
    $res = mysqli_query($conn,$sql);
    $category_name = mysqli_fetch_array($res);
    array_push($details[$i],$category_name['name']);
}
// print_r($details);
?>