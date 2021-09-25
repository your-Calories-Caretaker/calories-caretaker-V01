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

        <div class="login">
            <h1>Login</h1>
            <form name="form1" action="./login.php" method="post" class="formmm ">
                <input id="email" type="email" placeholder="Email" name="email" value="<?php echo $email ?>" required> <br>
                <p class="eror"><?php echo $errors['email']; ?></p>
                <input id="password" type="password" placeholder="Password" name="password" value="<?php echo $password_not_hashed ?>" required> <br>
                <p class="eror"><?php echo $errors['password']; ?></p>
                <a href=""> <button id="submit" type="submit" name="login" onclick="ValidateEmail(document.form1.email); ValidatePass(document.form1.pass)">Login</button> </a>
            
            </form>
            <a href="index.php"> <button id="back" name="submit">Back</button> </a>
            <p>Not a Member? <a href="signup.php">Signup</a></p>
        </div>
    </div>
</div>







<?php include('./templates/footer.php'); ?>