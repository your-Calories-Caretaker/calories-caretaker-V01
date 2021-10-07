<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/daily_calorie.css">
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
 <p>Name: <?php echo $user_details['first_name']." ".$user_details['last_name'];?></p>
 <p>Email: <?php echo $user_details['email'];?></p>
 <p>City: <?php echo $city_name['city_name'];?></p>
 <?php include('./templates/footer.php'); ?>
 <div id="bmi">
    <form action="./profile.php" method="POST">
        <label for="height">Height</label>
        <select name="height_unit" id="height_unit">
            <option value="centimeter" selected>centimeters</option>
            <option value="inch">inches</option>
            <option value="feet">feets</option>
        </select>
        <input type="text" name="height" id="height">
        <br>
        <label for="weight">Weight</label>
        <select name="weight_unit" id="weight_unit">
            <option value="pound" selected>pounds</option>
            <option value="kilogram">kilograms</option>
        </select>
        <input type="text" name="weight" id="weight">
        <br>
        <input type="submit" name="calculate" id="calculate" value="Calculate">
    </form>
    <?php if(!$is_bmi){ ?>
        <p>Update your BMI! </p>
        <a href="./bmi.php">Calculate BMI Here</a>
    <?php }?>
 </div>