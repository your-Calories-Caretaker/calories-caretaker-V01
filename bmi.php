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
 <!-- <p>Name: <?php echo $user_details['first_name']." ".$user_details['last_name'];?></p>
 <p>Email: <?php echo $user_details['email'];?></p>
 <p>City: <?php echo $city_name['city_name'];?></p> -->
 <?php include('./templates/footer.php'); ?>
 <div id="bmi">
    <form action="./bmi.php" method="POST">
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
    <?php if(!isset($_SESSION['id'])){ ?>
        <!-- <p>Login signup first</p> -->
    <?php }else if(!$is_bmi){ ?>
        <!-- <p>Calculate bmi ! </p> -->
        <!-- <a href="./profile.php#bmi">calculate bmi</a> -->
    <?php }else{ ?>
        <p> Your bmi count is <?php echo $bmi_count ?> </p>
    <?php } ?>
     
 </div>