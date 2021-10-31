<footer class="footer">
    <?php if(isset($_SESSION['id'])){ ?>
        <div class="row">
            <div class="col-md-6">
                <div class="h5 mx-4">
                    Are we missing some category?
                </div>
                <div class="row m-2">
                    <div class="col-md-8" id="<?php echo $_SESSION['id']; ?>">
                        <input placeholder="Send A suggestion" type="text" name="add_category" id="add_category" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <input type="submit" name="add_category_button" id="add_category_button" value="Send" class="btn btn-outline-success">
                    </div>
                </div>
                <div class="category_response mx-4"></div>
            </div>
            <div class="col-md-6">
                <div class="">
                    <div class="h5 mx-5">
                        Are We missing an item?
                    </div>
                    <div class="row footer-add-meal" id="<?php echo $_SESSION['id']; ?>">
                        <div class="col-md-5">
                            <input placeholder="Send A suggestion" type="text" name="add_item" id="add_item" class="form-control" required>
                        </div>
                        <div class="col-md-3">
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="select">Select</option>
                                <?php include('./backend/get_category.php'); ?>
                                <?php for($i=0; $i<count($categories); $i++){ ?>
                                    <option value="<?php echo $categories[$i]['id']; ?>"><?php echo $categories[$i]['name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <input type="submit" name="add_item_button" value="Send" class="btn btn-outline-success" id="add_item_button">
                        </div>
                        <div class="insert_response"></div>
                    </div>
                </div>
            </div>
        </div>
    <?php }else { ?>
        <div class="row">
            <div class="text-center h2 col-6">
                <a href="./login.php"class="text-light"> Login </a>
            </div>
            <div class="text-center h2 col-6">
                <a href="./signup.php" class="text-light"> Signup </a>
            </div>
        </div>
    <?php } ?>
    <div class="text-center h3">
        &copy Calories Caretaker 2021-2022
    </div>
</footer>
<script src="./assets/js/request_for_category_item.js"></script>
</body>
</html>