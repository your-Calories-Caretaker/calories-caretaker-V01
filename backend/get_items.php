<?php
include('./config/connect.php');
$can_show_items = false;
if(isset($_GET['id']))
{
    $category_id = $_GET['id'];
    $sql = "SELECT * FROM food_items WHERE category_id=$category_id";
    $res = mysqli_query($conn,$sql);
    if(mysqli_num_rows($res) != 0)
    {
        $can_show_items = true;
        $res = mysqli_query($conn,$sql);
        $items = mysqli_fetch_all($res,MYSQLI_ASSOC); 
    }
}
?>