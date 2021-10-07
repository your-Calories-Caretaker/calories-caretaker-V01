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
<?php include('./backend/signup.php'); ?>
<?php include('./backend/get_states.php'); ?>
<?php include('./templates/navbar.php'); ?>
<div class=" signup_body">
<div class="signup" >
<h1>Sign Up</h1>
<form action="./signup.php" method="POST" class="form">
    <label for="first_name">First Name</label>
    <input type="text" name="first_name" id="first_name" value="<?php echo $first_name ?>" placeholder="First Name"><br>
    <?php if($errors['first_name']){ ?>
        <p><?php echo $errors['first_name'];?></p>
    <?php } ?>
    <label for="last_name">Last Name</label>
    <input type="text" name="last_name" id="last_name" value="<?php echo $last_name ?>" placeholder="Last Name"><br>
    <?php if($errors['last_name']){ ?>
        <p><?php echo $errors['last_name'];?></p>
    <?php } ?>
    <label for="email">Email Address</label>
    <input type="email" name="email" id="email" value="<?php echo $email ?>" placeholder="Email"><br>
    <?php if($errors['email']){ ?>
        <p><?php echo $errors['email'];?></p>
    <?php } ?>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" value="<?php echo $password ?>" placeholder="Password"><br>
    <?php if($errors['password']){ ?>
        <p><?php echo $errors['password'];?></p>
    <?php } ?>
    <label for="confirm_password">Confirm Password</label>
    <input type="password" name="confirm_password" id="confirm_password" value="<?php echo $confirm_password ?>" placeholder="Confirm Password"><br>
    <?php if($errors['confirm_password']){ ?>
        <p><?php echo $errors['confirm_password'];?></p>
    <?php } ?>
    <label for="state">State</label>
    <select name="state" id="state" class="state">
        <option value="0">Select State</option>
        <?php for($i=0; $i<count($states_from_db); $i++) { ?>
            <option value="<?php echo $states_from_db[$i]['id']?>"><?php echo $states_from_db[$i]['name'];?></option>
        <?php } ?>
    </select><br>
    <label for="city">City</label>
    <select name="city" id="city" class="city">
        <option value="0">Select City</option>
    </select><br>
    <button type="submit" name="sign_up" id="sign_up" value="Sign Up">Sign Up</button>
    <!-- <input type="submit" name="sign_up" id="sign_up" value="Sign Up"> -->
</form>
</div>
</div>
<?php include('./templates/footer.php'); ?>
<script src="./assets/js/getCitiesFromStates.js"></script>