<?php
include('./config/connect.php');
if(isset($_POST['calculate'])){
    $height_unit = $_POST['height_unit'];
    $height = $_POST['height'];
    $weight_unit = $_POST['weight_unit'];
    $weight = $_POST['weight'];
    $weight_in_kg = $height_in_meters = 0;
    if($weight_unit == 'pound'){
        $weight_in_kg = number_format($weight*0.4536,2);
        // echo $weight_in_kg;
    }else{
        $weight_in_kg = number_format($weight,2);
    }

    if($height_unit == 'centimeter'){
        $height_in_meters = $height*0.01;
    }else if($height_unit == 'inch'){
        $height_in_meters = number_format($height*0.0254,2);
    }else{
        $height_in_meters = number_format($height*0.3048,2);
    }
    // echo $weight_in_kg." ".$height_in_meters;
    $bmi = number_format($weight_in_kg/($height_in_meters*$height_in_meters),2);
    $user_id = $_SESSION['id'];
    $date = $today = date("Y-m-d");
    echo $date;
    if(!$is_bmi){
        $sql = "INSERT into bmi(user_id,weight,height,BMI) VALUES($user_id,$weight_in_kg,$height_in_meters,$bmi)";
        mysqli_query($conn,$sql);
    }else{
        $sql = "UPDATE bmi set weight=$weight_in_kg, height=$height_in_meters, BMI=$bmi, modified_at=current_timestamp() where user_id=$user_id";
        if(!mysqli_query($conn,$sql)){
            echo mysqli_error($conn);
        }
    }
    header('Location: ./index.php');
}
?>