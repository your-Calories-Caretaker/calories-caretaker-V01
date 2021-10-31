<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/navbar.css?t=<?php echo time();?>">
    <!-- <link rel="stylesheet" href="./css/home.css"> -->
    <link rel="stylesheet" href="./css/login.css?<?php echo time();?>">
    <link rel="stylesheet" href="./css/daily_calorie.css?t=<?php echo time();?>">
    <title>Calories Caretaker</title>
</head>

<body>
    <?php include('./backend/signup.php'); ?>
    <?php include('./backend/get_states.php'); ?>
    <?php include('./templates/navbar.php'); ?>
    <div class=" signup_body">
        <div class="signup container">
            <h1 class="text-center">Sign Up</h1>
            <form action="./signup.php" method="POST"-+>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="first_name">First Name</label>
                        <input class="form-control" type="text" name="first_name" id="first_name" value="<?php echo $first_name ?>" placeholder="First Name">
                        <?php if ($errors['first_name']) { ?>
                            <p><?php echo $errors['first_name']; ?></p>
                        <?php } ?>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="last_name">Last Name</label>
                        <input class="form-control" type="text" name="last_name" id="last_name" value="<?php echo $last_name ?>" placeholder="Last Name">
                        <?php if ($errors['last_name']) { ?>
                            <p><?php echo $errors['last_name']; ?></p>
                        <?php } ?>
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="email">Email Address</label>
                        <input class="form-control" type="email" name="email" id="email" value="<?php echo $email ?>" placeholder="Email">
                        <?php if ($errors['email']) { ?>
                            <p><?php echo $errors['email']; ?></p>
                        <?php } ?>
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password" id="password" value="<?php echo $password ?>" placeholder="Password">
                        <?php if ($errors['password']) { ?>
                            <p><?php echo $errors['password']; ?></p>
                        <?php } ?>
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="confirm_password">Confirm Password</label>
                        <input class="form-control" type="password" name="confirm_password" id="confirm_password" value="<?php echo $confirm_password ?>" placeholder="Confirm Password">
                        <?php if ($errors['confirm_password']) { ?>
                            <p><?php echo $errors['confirm_password']; ?></p>
                        <?php } ?>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="state">State</label>
                        <select class="form-control state" name="state" id="state">
                            <option value="0">Select State</option>
                            <?php for ($i = 0; $i < count($states_from_db); $i++) { ?>
                                <option value="<?php echo $states_from_db[$i]['id'] ?>"><?php echo $states_from_db[$i]['name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="city">City</label>
                        <select class="city form-control" name="city" id="city">
                            <option value="0">Select City</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-12 text-center">
                        <button type="submit" name="sign_up" id="sign_up" value="Sign Up">Sign Up</button>
                    </div>
                </div>
                <!-- <input type="submit" name="sign_up" id="sign_up" value="Sign Up"> -->
            </form>
        </div>
    </div>
    <?php include('./templates/footer.php'); ?>
    <script src="./assets/js/getCitiesFromStates.js"></script>