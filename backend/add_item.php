<?php
if($_GET['user_id'])
{
    $to_send = [];
    $user_id = $_GET['user_id'];
    $quantity = $_GET['quantity'];
    $item_id = $_GET['item_id'];
    $type = $_GET['type'];
    include('../config/connect.php');
    $date = date('Y-m-d');
    $sql = "SELECT * FROM history WHERE user_id=$user_id AND item_id=$item_id AND added_at='$date' AND meal_type='$type'";
    $res = mysqli_query($conn,$sql);
    if($res){
        $there = mysqli_num_rows($res);
        if($there != 0){
            $sql = "UPDATE history SET quantity = quantity+$quantity WHERE user_id=$user_id AND item_id=$item_id AND added_at='$date' AND meal_type='$type'";
            if(mysqli_query($conn,$sql)){
                array_push($to_send,"ITEM UPDATED SUCCESSFULLY");
            }
        }else{
            $sql = "INSERT INTO history(user_id,item_id,quantity,meal_type) VALUES($user_id,$item_id,$quantity,'$type')";
            if(mysqli_query($conn,$sql)){
                array_push($to_send,"ITEM ADDED SUCCESSFULLY");
            }
        }
        echo json_encode($to_send);
    }
}
?>