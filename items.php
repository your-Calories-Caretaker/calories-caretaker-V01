<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/daily_calorie.css">
</head>

<body>
    <?php
    include('./templates/navbar.php');
    ?>
    <?php
    include('./templates/footer.php');
    ?>
    <?php include('./backend/get_items.php') ?>
    <?php if ($can_show_items) { ?>
        <div class="row m-5">
            <?php for ($i = 0; $i < count($items); $i++) { ?>
                <div class="col-md-6 my-3">
                    <div class="card text-center">
                        <div class="card-header">
                            <?php echo $items[$i]['name']; ?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Serving Type: <?php echo $items[$i]['serving_type']; ?></h5>
                            <p class="card-text">Calories: <?php echo $items[$i]['calories']; ?></p>
                        </div>
                        <div class="card-footer text-muted">
                            <button>Add</button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } ?>
</body>

</html>