<?php include './templates/navbar.php'; ?>
<div class="row">
    <div class="main_text col-lg-3">
        <h1>Want a Healthy Diet?<br>Your Calorie Caretake has got your back</h1><br>
        <?php if(!isset($_SESSION['id'])){ ?>
        <a href="login.php"><button class="butn">Join Now</button></a>
        <?php } ?>
    </div>
    <div class="main_img col-lg-9">
        <img src="img/main.png" alt="" width = 100%>
    </div>
</div>
<?php include './templates/footer.php'; ?>