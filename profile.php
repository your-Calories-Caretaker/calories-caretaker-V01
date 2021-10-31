<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/navbar.css?t=<?php echo time();?>">
    <!-- <link rel="stylesheet" href="./css/home.css"> -->
    <!-- <link rel="stylesheet" href="./css/login.css?t=<?php echo time();?>"> -->
    <link rel="stylesheet" href="./css/daily_calorie.css?t=<?php echo time();?>">
    <link rel="stylesheet" href="./css/profile.css?t=<?php echo time();?>">
    <title>Calories Caretaker</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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




<!-- New --------------------------------------------------------------- -->
<div class="row">
        <div class="col-md-3">
            <img class="profile_img" src="Aryan.jpg" alt=""><br>
            <h2 class="name"><?php echo $user_details['first_name']." ".$user_details['last_name'];?></h2>
            <h4><?php echo $user_details['email'];?></h3>
           
            <div class="details">
                <span class="labl">City: <?php echo $city_name['city_name'];?></span><br><br>
                <span class="labl">Age: </span><br><br>
                <span class="labl">Height: </span><br><br>
                <span class="labl">Weight: </span><br><br>
                <span class="labl">BMI: <?php
                      if(!$is_bmi){
                      ?>
                      <?php echo "No Data" ?>
                      <?php }else { ?>
                        <?php echo $bmi_count ?> 
                      <?php } ?></span>
            </div>
            <button class="buton"><?php
                      if(!$is_bmi){
                      ?>
                      <?php echo "Calculate BMI" ?>
                      <?php }else { ?>
                        <?php echo "Update BMI" ?> 
                      <?php } ?></button>
        </div>
        <div class="col-md-9 row">
            <div class="tab col-md-12 row">
                <button class="tablinks col-md-6 active" onclick="openCity(event, 'London')" id="defaultOpen">London</button>
                <button class="tablinks col-md-6" onclick="openCity(event, 'Paris')">Paris</button>
              </div>
              
              <div id="London" class="tabcontent col-md-12">
                <canvas id="graph_1"></canvas>
              </div>
              
              <div id="Paris" class="tabcontent col-md-12">
                <h3>Paris</h3>
                <img src="barchart_2.jpg" alt="">
              </div>
        </div>
    </div>
<!-- New End------------------------------------------------------------ -->
<!-- <div class="row">
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
        </form> -->
        <!-- <?php if(!$is_bmi){ ?>
            <p>Update your BMI! </p>
            <a href="./bmi.php">Calculate BMI Here</a>
        <?php }?> -->
    </div>
</div>
<script>
        function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          console.log(tabcontent);
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }
        document.getElementById("defaultOpen").click();



        $(document).ready(function(){
            $.ajax({
                url : "./backend/chart.php",
                method : "GET",
                success: function(data){
                    console.log(data);
                    var bmi = [];
                    var date = [];

                    // for(var i in data){
                       
                    // }
                },
                error: function(data){
                    console.log(data);
                }
            })
        });

        </script>
<?php include('./templates/footer.php'); ?>