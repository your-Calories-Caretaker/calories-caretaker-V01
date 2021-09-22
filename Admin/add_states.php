<!-- <?php
    // include('../backend/Admin/isAdmin.php');
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form enctype="multipart/form-data" action="./add_states.php" method="POST">
        <input type="file" name="datasheet">
        <input type="submit" name="submit" value="ADD">
    </form>
</body>
</html>
<?php
    include('../backend/Admin/add_states.php');
?>