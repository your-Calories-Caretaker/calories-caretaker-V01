<!-- <!DOCTYPE html>
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
<body> -->
    <?php
    if (session_status() === PHP_SESSION_NONE) session_start();
    if(isset($_SESSION['id'])){
        include('./backend/get_bmi_status.php');
    }
    ?>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php">Calorie Caretaker</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                  </li>
                  <?php if(!isset($_SESSION['id'])){ ?>
                    <li class="nav-item">
                      <a class="nav-link" href="login.php">Login/Signup</a>
                    </li> 
                    <?php }else{ include('./backend/get_user_details.php');?>
                    <li class="nav-item">
                        <a class="nav-link" href="./profile.php#bmi">Welcome&nbsp;<?php echo $user_details['first_name'] ?></a>
                    </li> 
                    <li class="nav-item">
                      <a class="nav-link" href="daily-calorie.php">Calculate Calories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li> 
                <?php } ?>
                </ul>
              </div>
            </div>
        </nav>
    </header>


    <?php if(!isset($_SESSION['id'])){ ?>
        <!-- <p>Login signup first</p> -->
    <?php }else if(!$is_bmi){ ?>
        <!-- <p>Calculate bmi ! </p> -->
        <!-- <a href="./profile.php#bmi">calculate bmi</a> -->
    <?php }else{ ?>
        <!-- <p> Your bmi count is <?php echo $bmi_count ?> </p> -->
    <?php } ?>