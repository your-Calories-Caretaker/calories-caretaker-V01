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
<?php include './templates/navbar.php'; ?>
<div class="row">
    <div class="main_text col-lg-3">
        <h1>Want a Healthy Diet?<br>Your Calorie Caretake has got your back</h1><br>
        <?php if(!isset($_SESSION['id'])){ ?>
            <a href="login.php"><button class="butn">Join Now</button></a>
        <?php }?>
    </div>
    <div class="main_img col-lg-9">
        <img src="img/main.png" alt="" width = 100%>
    </div>
</div>
<?php include './templates/footer.php'; ?>