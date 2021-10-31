<?php
if(isset($_GET['category_name']))
{
    $category_name = ucwords(strtolower($_GET['category_name']));
    $user_id = $_GET['user_id'];
    include('../config/connect.php');
    $sql = "SELECT * FROM category_suggestions where category_name='$category_name';";
    $res = mysqli_query($conn,$sql);
    if(mysqli_num_rows($res) >= 1){
        echo json_encode(['Category already in suggestion list']);
    }else{
        $sql = "SELECT * FROM categories WHERE name='$category_name';";
        $res = mysqli_query($conn,$sql);
        if(mysqli_num_rows($res) >= 1){
            echo json_encode(['Category already exists']);
        }else{
            $sql = "INSERT INTO category_suggestions(category_name,user_id) values('$category_name',$user_id);";
            if(!mysqli_query($conn,$sql)){
                echo json_encode(['There was some error.. Please Try again']);
            }else{
                echo json_encode(["$category_name added to Category suggestions. Thankyou!"]);
            }
        }
    }
}
?>