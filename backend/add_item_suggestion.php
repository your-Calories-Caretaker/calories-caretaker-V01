<?php
if(isset($_GET['item_name']))
{
    $user_id = $_GET['user_id'];
    $category_id = $_GET['category_id'];
    $item_name = ucwords(strtolower($_GET['item_name']));
    
    include('../config/connect.php');
    $sql = "SELECT * FROM item_suggestions where item_name='$item_name';";
    $res = mysqli_query($conn,$sql);
    if(mysqli_num_rows($res) >= 1){
        echo json_encode(['Item already in Suggestion List.']);
    }else{
        $sql = "INSERT INTO item_suggestions(item_name, user_id, category_id) values('$item_name',$user_id,$category_id);";
        if(!mysqli_query($conn,$sql)){
            echo json_encode(['There was some error please try again.']);
        }else{
            echo json_encode(["$item_name Added to Suggestions. Thankyou!"]);
        }
    }
}
?>