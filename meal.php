<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/navbar.css"> 
    <link rel="stylesheet" href="./css/meal.css">
</head>
<body>
<?php include('./templates/navbar.php'); ?>
    <?php include('./templates/footer.php'); ?>

    <div class="row m-4">
        <div class="col-sm-3 my-3">
            <div class="bg-img">
                <a href="./category.php?type=b" class="crd_link">
                    <div class="crd">
                        <h1>BREAKFAST</h1>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3 my-3">
            <div class="bg-img">
                <a href="./category.php?type=l" class="crd_link">
                    <div class="crd">
                        <h1>LUNCH</h1>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3 my-3">
            <div class="bg-img">
                <a href="./category.php?type=s" class="crd_link">
                    <div class="crd">
                        <h1>SNACKS</h1>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3 my-3">
            <div class="bg-img">
                <a href="./category.php?type=d" class="crd_link">
                    <div class="crd">
                        <h1>DINNER</h1>
                    </div>
                </a>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Food</th>
                    <th>Food Type</th>
                    <th>Calories</th>
                    <th>Meal Time</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Cheeze Pizza</td>
                    <td>Pizza</td>
                    <td>280</td>
                    <td>Snacks</td>

                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>