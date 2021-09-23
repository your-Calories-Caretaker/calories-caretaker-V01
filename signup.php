<?php include('./backend/signup.php'); ?>
<?php include('./backend/get_states.php'); ?>
<?php include('./templates/navbar.php'); ?>
<form action="./signup.php" method="POST">
    <label for="first_name">First Name</label>
    <input type="text" name="first_name" id="first_name" value="<?php echo $first_name ?>"><br>
    <?php if($errors['first_name']){ ?>
        <p><?php echo $errors['first_name'];?></p>
    <?php } ?>
    <label for="last_name">Last Name</label>
    <input type="text" name="last_name" id="last_name" value="<?php echo $last_name ?>"><br>
    <?php if($errors['last_name']){ ?>
        <p><?php echo $errors['last_name'];?></p>
    <?php } ?>
    <label for="email">email</label>
    <input type="email" name="email" id="email" value="<?php echo $email ?>"><br>
    <?php if($errors['email']){ ?>
        <p><?php echo $errors['email'];?></p>
    <?php } ?>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" value="<?php echo $password ?>"><br>
    <?php if($errors['password']){ ?>
        <p><?php echo $errors['password'];?></p>
    <?php } ?>
    <label for="confirm_password">Confirm Password</label>
    <input type="password" name="confirm_password" id="confirm_password" value="<?php echo $confirm_password ?>"><br>
    <?php if($errors['confirm_password']){ ?>
        <p><?php echo $errors['confirm_password'];?></p>
    <?php } ?>
    <label for="state">Select State</label>
    <select name="state" id="state" class="state">
        <option value="0">SELECT</option>
        <?php for($i=0; $i<count($states_from_db); $i++) { ?>
            <option value="<?php echo $states_from_db[$i]['id']?>"><?php echo $states_from_db[$i]['name'];?></option>
        <?php } ?>
    </select><br>
    <label for="city">Select City</label>
    <select name="city" id="city" class="city">
        <!-- <option value="0">SELECT</option> -->
    </select><br>
    <input type="submit" name="sign_up" id="sign_up" value="Sign Up">
</form>
<?php include('./templates/footer.php'); ?>
<script src="./assets/js/getCitiesFromStates.js"></script>