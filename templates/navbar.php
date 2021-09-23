<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calories Caretaker</title>
</head>
<body>
    <?php
    if (session_status() === PHP_SESSION_NONE) session_start();
    include('./backend/get_bmi_status.php');
    ?>
    <?php if(!isset($_SESSION['id'])){ ?>
        <p>Login signup first</p>
    <?php }else if(!$is_bmi){ ?>
        <p>Calculate bmi ! </p>
        <a href="./profile.php#bmi">calculate bmi</a>
    <?php }else{ ?>
        <p> Your bmi count is <?php echo $bmi_count ?> </p>
    <?php } ?>