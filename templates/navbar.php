    <?php
    if (session_status() === PHP_SESSION_NONE) session_start();
    // print_r($_SESSION);
    if(isset($_SESSION['id'])){
        include('./backend/get_bmi_status.php');
    }
    ?>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php"><img src="./img/logo.png" class="logo_img"></a>
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
                        <a class="nav-link" href="./meal.php">Add Meal</a>
                    </li> 
                    <li class="nav-item">
                      <a class="nav-link" href="profile.php">
                     
                        Welcome, <?php echo $user_details['first_name'] ?> 
                      
                      </a>
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