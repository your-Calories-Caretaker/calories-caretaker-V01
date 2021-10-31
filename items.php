<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/navbar.css?t=<?php echo time();?>">
    <!-- <link rel="stylesheet" href="./css/home.css"> -->
    <!-- <link rel="stylesheet" href="./css/login.css"> -->
    <link rel="stylesheet" href="./css/items.css?t=<?php echo time();?>">
</head>

<body>
    <?php
    include('./templates/navbar.php');
    ?>
    <?php include('./backend/get_items.php') ?>
    <div class="container mt-5" id="select_meal_type">
        <label for="meal_type">Selected Meal Type is</label>
        <select name="meal_type form-control" id="meal_type">
            <option value="breakfast" <?php if($_SESSION['type'] == 'breakfast') echo "SELECTED";?>>
                Breakfast
            </option>        
            <option value="lunch" <?php if($_SESSION['type'] == 'lunch') echo "SELECTED";?>>
                Lunch
            </option>
            <option value="snacks" <?php if($_SESSION['type'] == 'snacks') echo "SELECTED";?>>
                Snacks
            </option>
            <option value="dinner" <?php if($_SESSION['type'] == 'dinner') echo "SELECTED";?>>
                Dinner
            </option>
        </select>
    </div>  
    <?php if ($can_show_items) { ?>
        <div class="row m-5" count="<?php echo $_SESSION['id']?>" type="<?php echo $_SESSION['type']?>">
            <?php for ($i = 0; $i < count($items); $i++) { ?>
                <div class="col-md-4 my-3">
                    <div class="card text-center">
                        <div class="card-header">
                            <h2><?php echo $items[$i]['name']; ?></h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-borderless">
                                    <tr>
                                        <th>Serving Type</th>
                                        <th> Calories</th>
                                    </tr>
                                <tr>
                                    <td><?php echo $items[$i]['serving_type']; ?></td>
                                    <td><?php echo $items[$i]['calories']; ?></td>
                                </tr>
                            </table>

                        </div>
                        <div class="card-footer text-muted" item_id="<?php echo $items[$i]['item_id'] ?>">
                            <div class="quantity buttons_added">
                                <input type="button" value="-" class="minus">
                                <input type="number" step="1" min="0" max="" name="quantity" value="0" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
                                <input type="button" value="+" class="plus">
                            </div>
                            <button class="add_item">Add</button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } ?>
</body>
<script src="./assets/js/items_plus_minus.js"></script>
<script src="./assets/js/add_items_to_db.js?t=<?php echo time(); ?>"></script>
<?php
include('./templates/footer.php');
?>