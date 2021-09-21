<?php include('./backend/login.php'); ?>
<?php include('./templates/navbar.php'); ?>
<form action="./login.php" method="POST">
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
</form>
<?php include('./templates/footer.php'); ?>