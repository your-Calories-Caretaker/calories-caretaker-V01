<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/navbar.css">

    <link rel="stylesheet" href="./css/daily_calorie.css">
    <title>Daily Calorie Count | Calories Caretaker</title>
</head>
<body>
<?php include './templates/navbar.php'; ?>

    <form action="" method="" id="frm">
        <fieldset id="bf">
            <legend><h2>Breakfast</h2></legend>
            <input type="button" value="Add Food Item" onclick="addItem(bf)" class="add_btn"><br>
            <label for="fitem">Select Food Item: </label>
            <!-- Add Option from Database -->
            <select name="" id="">
                <option value="1">Opt 1</option>
                <option value="2">Opt 1</option>
                <option value="3">Opt 1</option>
            </select>
            <label for="quant">Quantity: </label>
            <input type="text" id="lname" name="quant"><br>
        </fieldset>
        <fieldset id= "lunch">
            <legend><h2>Lunch</h2></legend>
            <input type="button" value="Add Food Item" onclick="addItem(lunch)" class="add_btn"><br>
            <label for="fitem">Select Food Item: </label>
            <!-- Add Option from Database -->
            <select name="" id="">
                <option value="1">Opt 1</option>
                <option value="2">Opt 1</option>
                <option value="3">Opt 1</option>
            </select>
            <label for="quant">Quantity: </label>
            <input type="text" id="lname" name="quant"><br>
        </fieldset>
        <fieldset id = "snacks">
            <legend><h2>Snacks</h2></legend>
            <input type="button" value="Add Food Item" onclick="addItem(snacks)" class="add_btn"><br>
            <label for="fitem">Select Food Item: </label>
            <!-- Add Option from Database -->
            <select name="" id="">
                <option value="1">Opt 1</option>
                <option value="2">Opt 1</option>
                <option value="3">Opt 1</option>
            </select>
            <label for="quant">Quantity: </label>
            <input type="text" id="lname" name="quant"><br>
        </fieldset>
        <fieldset id = "dinner">
            <legend><h2>Dinner</h2></legend>
            <input type="button" value="Add Food Item" onclick="addItem(dinner)" class="add_btn"><br>
            <label for="fitem">Select Food Item: </label>
            <!-- Add Option from Database -->
            <select name="" id="">
                <option value="1">Opt 1</option>
                <option value="2">Opt 1</option>
                <option value="3">Opt 1</option>
            </select>
            <label for="quant">Quantity: </label>
            <input type="text" id="lname" name="quant"><br>
        </fieldset>
        <input type="button" value="Calculate Calories" onclick="" class="calc"><br><br>
    </form>
</body>

<script>
    function addItem(id){
        var item = document.createElement('label');
        var itemLabel = document.createTextNode('Select Food Item: ')
        item.appendChild(itemLabel);
        var brk = document.createElement('br');
        var itemInput = document.createElement('select');
        // Add Options from Database
        var itemOpt1 = document.createElement('option');
        var itemOpt2 = document.createElement('option');
        var itemOpt3 = document.createElement('option');
        
        var opt1 = document.createTextNode('Opt 1');
        var opt2 = document.createTextNode('Opt 2');
        var opt3 = document.createTextNode('Opt 3');
        
        itemInput.appendChild(itemOpt1)
        itemOpt1.appendChild(opt1);
        itemInput.appendChild(itemOpt2)
        itemOpt2.appendChild(opt2);
        itemInput.appendChild(itemOpt3)
        itemOpt3.appendChild(opt3);

        
        var quantity = document.createElement('label');
        var quantLabel = document.createTextNode(' Quantity: ')
        quantity.appendChild(quantLabel)
        var quantInput = document.createElement('input');
        // alert("Item Added")
        var element = document.getElementById(id);
        id.appendChild(item);
        id.appendChild(itemInput);
        id.appendChild(quantity);
        id.appendChild(quantInput);
        id.appendChild(brk);
    }
    
    
</script>
<!-- <script>
    function addSnacks(){
        var tg = document.createElement('fieldset')
        tg.id = 'snack'
        // alert(tg.id)
        // addItem(tg.id)
        var ibutton = document.createElement('input');
        tg.appendChild(ibutton)
        ibutton.type = 'button'
        ibutton.value = 'Add Food Item'
        
        var e = document.getElementById('frm')
        e.appendChild(tg)
        // e.appendChild(ibutton)
        // alert("Hi")
    }
</script> -->
</html>