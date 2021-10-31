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
    <link rel="stylesheet" href="./css/footer.css?t=<?php echo time();?>">
    <!-- <link rel="stylesheet" href="./css/daily_calorie.css"> -->
    <title>Calories Caretaker</title>
</head>
<body>
<?php include('./backend/login.php'); ?>
<?php include('./templates/navbar.php'); ?>
<!-- <form action="./login.php" method="POST">
    <label for="email">
        Email
    </label>
    <input type="email" name="email" id="email" value="<?php echo $email ?>"> <br>
    <p><?php echo $errors['email']; ?></p>
    <label for="password">
        Password
    </label>
    <input type="password" name="password" id="password" value="<?php echo $password_not_hashed ?>"> <br>
    <p><?php echo $errors['password']; ?></p>
    <input type="submit" name="login" value="Login">
</form> -->

<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-5">
        <img src="img/login.png" alt="" width="100%">
    </div>
    <div class="col-lg-6">

        <div class="login container">
            <h1>Login</h1>
            <form name="form1" action="./login.php" method="post" class="formmm ">
                <div class="form-group row">
                    <label for="email" class="col-md-2 col-sm-12 label">Email</label>
                    <input id="email" type="email" placeholder="johndoe@email.com" name="email" value="<?php echo $email ?>" class="form-control col-md-8" required>
                    <p class="eror"><?php echo $errors['email']; ?></p>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-md-2 col-sm-12 label">Password</label>
                    <input id="password" type="password" placeholder="Password" name="password" value="<?php echo $password_not_hashed ?>" required class="col-md-10 form-control"> <br>
                    <p class="eror"><?php echo $errors['password']; ?></p>
                </div>
                <a href=""><button id="submit" type="submit" name="login" onclick="ValidateEmail(document.form1.email); ValidatePass(document.form1.pass)" class="">Login</button></a>
            
            </form>
            <a href="index.php"> <button id="back" name="submit">Back</button> </a>
            <p>Not a Member? <a href="signup.php">Signup</a></p>
        </div>
    </div>
</div>
<!-- <?php include('./templates/footer.php'); ?> -->