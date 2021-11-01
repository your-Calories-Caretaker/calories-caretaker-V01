<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Suggested Item Lists</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/popup-admin.css">

</head>
<?php include('../backend/Admin/set_incoming_item_details.php'); ?>
<?php include('../backend/Admin/isAdmin.php'); ?>
<?php include('../backend/Admin/get_suggested_items.php'); ?>
<body>
    <div class="container">
        <div class="text-center my-4">
            <p class="h3">Item List</p>
        </div>
        <?php if($item_suggestions_there){ ?>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Current Status</th>
                    <th scope="col">Message</th>
                    <th scope="col">Edit</th>
                </tr>
            </thead>
            <tbody>
                    <?php for ($i = 0; $i < count($item_suggestions); $i++) { ?>
                        <tr>
                            <th scope="row"><?php echo $i + 1 ?></th>
                            <td class="name"><?php echo $item_suggestions[$i]['item_name']; ?></td>
                            <td class="c_name"><?php echo $item_suggestions[$i]['from_category']; ?></td>
                            <td class="status"><?php echo $item_suggestions[$i]['current_status']; ?></td>
                            <td class="message"><?php echo $item_suggestions[$i]['message']; ?></td>
                            <td><button id="<?php echo $item_suggestions[$i]['id'];?>" class="item-edit fa fa-pencil btn btn-outline-dark"></button></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php } ?>
            </div>
    <?php include('../backend/Admin/get_category.php'); ?>
    <div class="popup-wrapper">
    <div class="popup">
      <div class="popup-close">
        X
      </div>
      <div class="popup-content">
        <div class="container my-3">
          <form action="./update_suggested_items.php" method="POST">
            <input type="hidden" class="item_to_update" name="item_to_update">
            <label for="status" class="lbl">Status</label>
            <select name="status" id="status" class="form-control">
                <option value="Pending">Pending</option>
                <option value="Accepted">Accepted</option>
                <option value="Rejected">Rejected</option>
            </select>
            <label for="message" class="lbl">Message</label>
            <input type="text" name="message" id="message" class="form-control" placeholder="Message">
            <label for="item_name" class="lbl">Item Name</label>
            <input type="text" name="item_name" id="item_name" class="form-control" placeholder="Item Name">
            <label for="category" class="lbl">Category</label>
            <select name="category" class="form-control" id="category">
                <?php for($i=0; $i<count($categories); $i++) { ?>
                    <option value="<?php echo $categories[$i]['id'] ?>"><?php echo $categories[$i]['name'];?></option>
                <?php } ?>
            </select>
            <label for="serving_type" class="lbl">Serving Type</label>
            <input type="text" name="serving_type" id="serving_type" class="form-control" placeholder="Serving type">
            <label for="weight" class="lbl">Weight</label>
            <input type="text" name="weight" id="weight" class="form-control" placeholder="weight">
            <label for="calories" class="lbl">Calories</label>
            <input type="text" name="calories" id="calories" class="form-control" placeholder="calories">
            <input type="submit" name="calculate" class="btn btn-outline-success" id="calculate" value="Calculate">
          </form>
        </div>
      </div>
    </div>
  </div>
    <script src="https://kit.fontawesome.com/56bbfc97eb.js" crossorigin="anonymous"></script>
    <script src="../assets/js/update_items_popup.js"></script>
</body>

</html>