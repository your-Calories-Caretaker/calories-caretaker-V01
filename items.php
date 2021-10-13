<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/navbar.css">
    <!-- <link rel="stylesheet" href="./css/home.css"> -->
    <!-- <link rel="stylesheet" href="./css/login.css"> -->
    <link rel="stylesheet" href="./css/items.css">
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
                        <div class="card-footer text-muted">
                            <div class="quantity buttons_added">
                                <input type="button" value="-" class="minus"><input type="number" step="1" min="0" max="" name="quantity" value="0" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
                            </div>
                            <button>Add</button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } ?>
</body>
<script>
    function wcqib_refresh_quantity_increments() {
    jQuery("div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)").each(function(a, b) {
        var c = jQuery(b);
        c.addClass("buttons_added"), c.children().first().before('<input type="button" value="-" class="minus" />'), c.children().last().after('<input type="button" value="+" class="plus" />')
    })
}
String.prototype.getDecimals || (String.prototype.getDecimals = function() {
    var a = this,
        b = ("" + a).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
    return b ? Math.max(0, (b[1] ? b[1].length : 0) - (b[2] ? +b[2] : 0)) : 0
}), jQuery(document).ready(function() {
    wcqib_refresh_quantity_increments()
}), jQuery(document).on("updated_wc_div", function() {
    wcqib_refresh_quantity_increments()
}), jQuery(document).on("click", ".plus, .minus", function() {
    var a = jQuery(this).closest(".quantity").find(".qty"),
        b = parseFloat(a.val()),
        c = parseFloat(a.attr("max")),
        d = parseFloat(a.attr("min")),
        e = a.attr("step");
    b && "" !== b && "NaN" !== b || (b = 0), "" !== c && "NaN" !== c || (c = ""), "" !== d && "NaN" !== d || (d = 0), "any" !== e && "" !== e && void 0 !== e && "NaN" !== parseFloat(e) || (e = 1), jQuery(this).is(".plus") ? c && b >= c ? a.val(c) : a.val((b + parseFloat(e)).toFixed(e.getDecimals())) : d && b <= d ? a.val(d) : b > 0 && a.val((b - parseFloat(e)).toFixed(e.getDecimals())), a.trigger("change")
});
</script>


</html>