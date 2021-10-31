<footer class="footer">
    <?php if(isset($_SESSION['id'])){ ?>
        <div class="row">
            <div class="col-md-6">
                <div class="h5 text-center">
                    Are we missing some category?
                </div>
                <div class="row m-2">
                    <div class="col-md-8">
                        <input placeholder="Send A suggestion" type="text" name="add_category" id="add_category" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <input type="submit" name="add_category_button" value="Send" class="btn btn-outline-danger">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="">
                    <div class="h5 text-center">
                        Are We missing an item?
                    </div>
                    <div class="row footer-add-meal">
                        <div class="col-md-8">
                            <input placeholder="Send A suggestion" type="text" name="add_item" id="add_item" class="form-control" required>
                        </div>
                        <div class="col-md-2">
                            <input type="submit" name="add_item_button" value="Send" class="btn btn-outline-danger">
                        </div>
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
                <a href="./signup.page" class="text-light"> Signup </a>
            </div>
        </div>
    <?php } ?>
    <div class="text-center h3">
        &copy Calories Caretaker 2021-2022
    </div>
</footer>
</body>
</html>