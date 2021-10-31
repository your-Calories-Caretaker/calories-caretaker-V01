<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/navbar.css?t=<?php echo time();?>">
    <!-- <link rel="stylesheet" href="./css/home.css"> -->
    <link rel="stylesheet" href="./css/login.css?t=<?php echo time();?>">
    <link rel="stylesheet" href="./css/daily_calorie.css?t=<?php echo time();?>">
    <link rel="stylesheet" href="./css/profile.css?t=<?php echo time();?>">
    <title>Calories Caretaker</title>
</head>
<body>
<?php
session_start();
if(!isset($_SESSION['id'])){
    header('Location: ./login.php');
}
include('./backend/get_user_details.php');
?>
 <?php include('./templates/navbar.php'); 
 include('./backend/add_update_bmi.php');
 ?>

<div class="row">
    <div class="details">
        <p class="lbl">Name: </p><p><?php echo $user_details['first_name']." ".$user_details['last_name'];?></p><br>
        <p class="lbl">Email: </p><p><?php echo $user_details['email'];?></p><br>
        <p class="lbl">City: </p><p><?php echo $city_name['city_name'];?></p><br>
        <p class="lbl">BMI: </p>
        <p><?php
                      if(!$is_bmi){
                      ?>
                      <?php echo "Calculate BMI" ?>
                      <?php }else { ?>
                        <?php echo $bmi_count ?> 
                      <?php } ?></p>
    </div>
    <div id="bmi">
        <form action="./profile.php" method="POST">
            <label for="height" class="lbl">Height</label>
            <select name="height_unit" id="height_unit">
                <option value="centimeter" selected>centimeters</option>
                <option value="inch">inches</option>
                <option value="feet">feets</option>
            </select><br>
            <input type="text" name="height" id="height" placeholder="Enter Height">
            <br>
            <label for="weight" class="lbl">Weight</label>
            <select name="weight_unit" id="weight_unit">
                <option value="pound" selected>pounds</option>
                <option value="kilogram">kilograms</option>
            </select><br>
            <input type="text" name="weight" id="weight" placeholder="Enter Weight">
            <br>
            <input type="submit" name="calculate" id="calculate" value="Calculate" >
        </form>
        <!-- <?php if(!$is_bmi){ ?>
            <p>Update your BMI! </p>
            <a href="./bmi.php">Calculate BMI Here</a>
        <?php }?> -->
    </div>
</div>
<?php include('./templates/footer.php'); ?>