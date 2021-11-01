<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/navbar.css?t=<?php echo time(); ?>">
  <!-- <link rel="stylesheet" href="./css/home.css"> -->
  <!-- <link rel="stylesheet" href="./css/login.css?t=<?php echo time(); ?>"> -->
  <link rel="stylesheet" href="./css/daily_calorie.css?t=<?php echo time(); ?>">
  <link rel="stylesheet" href="./css/profile.css?t=<?php echo time(); ?>">
  <link rel="stylesheet" href="./css/footer.css?t=<?php echo time(); ?>">
  <link rel="stylesheet" href="./css/popup.css?t=<?php echo time(); ?>">
  <title>Calories Caretaker</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
  <?php
  session_start();
  if (!isset($_SESSION['id'])) {
    header('Location: ./login.php');
  }
  include('./backend/get_user_details.php');
  ?>
  <?php include('./templates/navbar.php');
  include('./backend/add_update_bmi.php');
  ?>
  <!-- New --------------------------------------------------------------- -->
  <div class="row mb-3">
    <div class="col-md-3">
      <img class="profile_img" src="./img/loader.jpg" alt=""><br>
      <h2 class="name"><?php echo $user_details['first_name'] . " " . $user_details['last_name']; ?></h2>
      <h4><?php echo $user_details['email']; ?></h3>

        <div class="details">
          <span class="labl">City: <?php echo $city_name['city_name']; ?></span><br>
          <?php if ($is_bmi) { ?>
            <span class="labl">Height: <?php echo $user_bmi['height']; ?> meters</span><br>
            <span class="labl">Weight: <?php echo $user_bmi['weight']; ?> kgs </span><br>
            <span class="labl">BMI: <?php echo $bmi_count ?></span>
          <?php } ?>
        </div>
        <button class="w-50 mx-auto my-2 bmi-button btn btn-outline-dark"><?php if (!$is_bmi) { ?>
            <?php echo "Calculate BMI"?>
          <?php } else { ?>
            <?php echo "Update BMI" ?>
          <?php } ?></button>
    </div>
    <div class="col-md-9 row">
      <div class="tab col-md-12 row">
        <button class="tablinks col-md-6 active" onclick="openCity(event, 'London')" id="defaultOpen">Calories per day</button>
        <button class="tablinks col-md-6" onclick="openCity(event, 'Paris')">Today's Count</button>
      </div>

      <div id="London" class="tabcontent col-12">
        <canvas id="graph_1"></canvas>
      </div>
      <div id="Paris" class="tabcontent col-md-12">
        <canvas id="graph_2"></canvas>
      </div>
    </div>
  </div>
  <div class="popup-wrapper">
        <div class="popup">
            <div class="popup-close">
                X
            </div>
            <div class="popup-content">
              <div class="container my-3">
                <form action="./profile.php" method="POST">
                  <label for="height" class="lbl">Height</label>
                  <select name="height_unit" class="form-control" id="height_unit">
                      <option value="centimeter" selected>centimeters</option>
                      <option value="inch">inches</option>
                      <option value="feet">feets</option>
                  </select> 
                  <input type="text" name="height" id="height" class="form-control" placeholder="Enter Height">
                  <label for="weight" class="lbl">Weight</label>
                  <select name="weight_unit" class="form-control" id="weight_unit">
                      <option value="pound" selected>pounds</option>
                      <option value="kilogram">kilograms</option>
                  </select>
                  <input type="text" class="form-control" name="weight" id="weight" placeholder="Enter Weight">
                  <input type="submit" name="calculate" class="btn btn-outline-success" id="calculate" value="Calculate" >
               </form>
              </div>
            </div>
        </div>
    </div>
  <!-- New End------------------------------------------------------------ -->
  <?php include('./templates/footer.php'); ?>
  <script src="./assets/js/get_chart.js"></script>
  <script src="./assets/js/popup.js"></script>