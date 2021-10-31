<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/navbar.css?t=<?php echo time();?>">
    <!-- <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/daily_calorie.css"> -->
    <link rel="stylesheet" href="./css/category.css?t=<?php echo time();?>">
</head>

<body>
    <?php include('./templates/navbar.php'); ?>
    <?php include('./templates/footer.php'); ?>
    <?php include('./backend/get_category.php'); ?>
    <?php include("./backend/set_meal_type.php"); ?>
    <div class="row m-4">
        <h1 class="text-center m-0 p-0">Select Your Meal Category</h1>
        <?php for ($i = 0; $i < count($categories); $i++) { ?>
            <div class="col-sm-4 my-3">
                <div class="bg-img" id="<?php echo $categories[$i]['name'] ?>">
                    <a href="./items.php?id=<?php echo $categories[$i]['id'];?>" class="crd_link">
                        <div class="crd">
                            <h1><?php echo $categories[$i]['name'] ?></h1>
                        </div>
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>
</body>

</html>