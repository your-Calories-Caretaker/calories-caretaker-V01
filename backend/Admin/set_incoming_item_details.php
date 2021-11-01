<?php 
include('../config/connect.php');
if(isset($_POST['item_to_update'])){
    if(strtolower($_POST['status']) == 'rejected'){
        $sql = "UPDATE item_suggestions SET current_status='Rejected', message='{$_POST['message']}' WHERE id={$_POST['item_to_update']};";
        if(mysqli_query($conn,$sql)){
            echo "<script>location.href = './update_suggested_items.php';</script>";
        }else{
            echo mysqli_error($conn);
        }
    }else if(strtolower($_POST['status']) == 'accepted'){
        $sql = "UPDATE item_suggestions SET current_status='Accepted', message='Thankyou For Contributing' WHERE id={$_POST['item_to_update']};";
        if(mysqli_query($conn,$sql)){
            $sql = "INSERT INTO food_items(name,category_id,serving_type,weight,calories) Values('{$_POST['item_name']}',{$_POST['category']},'{$_POST['serving_type']}','{$_POST['weight']}','{$_POST['calories']}');";
            if(mysqli_query($conn,$sql)){
                echo "<script>location.href = './update_suggested_items.php';</script>";
            }
        }else{
            echo mysqli_error($conn);
        }
    }
} ?>