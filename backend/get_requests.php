<?php
include('./config/connect.php');
$user_id = $_SESSION['id'];
$item_suggestions_there = false;
$category_suggestions_there = false;
$sql = "SELECT * from item_suggestions where user_id=$user_id;";
$res = mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
    $item_suggestions_there = true;
    $res = mysqli_query($conn,$sql);
    $item_suggestions = mysqli_fetch_all($res,MYSQLI_ASSOC);
    for($i=0; $i<count($item_suggestions); $i++)
    {
        $sql = "SELECT name FROM categories WHERE id={$item_suggestions[$i]['category_id']};";
        $res = mysqli_query($conn,$sql);
        $category_name = mysqli_fetch_array($res);
        $item_suggestions[$i]['from_category'] = $category_name['name'];
    }
}
$sql = "SELECT * from category_suggestions where user_id=$user_id;";
$res = mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
    $category_suggestions_there = true;
    $res = mysqli_query($conn,$sql);
    $category_suggestions = mysqli_fetch_all($res,MYSQLI_ASSOC);
}
?>