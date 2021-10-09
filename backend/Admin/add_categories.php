<?php
include('../config/connect.php');
require_once('../vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
if(isset($_POST['submit']))
{
    $file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    if(isset($_FILES['datasheet']['name']) && in_array($_FILES['datasheet']['type'],$file_mimes)){
        $arr_file = explode('.', $_FILES['datasheet']['name']);
        $extension = end($arr_file);
        // Initializing our Reader
        if ('csv' == $extension) {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
        } else {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }
        $spreadsheet = $reader->load($_FILES['datasheet']['tmp_name']);
        $file = $spreadsheet->getActiveSheet()->toArray();
        $to_add_categories = [];
        for($i=1; $i<count($file); $i++)
        {
            $category = $file[$i][4];
            $sql = "SELECT id from categories where name='$category'";
            $res = mysqli_query($conn,$sql);
            if(mysqli_num_rows($res) == 0)
            {
                if(!in_array($category,$to_add_categories))
                {
                    array_push($to_add_categories,$category);
                }
            }
        }
        for($i=0; $i<count($to_add_categories); $i++)
        {
            $category = $to_add_categories[$i];
            $sql = "INSERT INTO categories(name) values('$category')";
            if(!mysqli_query($conn,$sql)){
                echo mysqli_error($conn);
            }
        }
        for($i=1; $i<count($file); $i++)
        {
            $item_name = $file[$i][0];
            $category_name = $file[$i][4];
            $sql = "SELECT id from categories where name='$category_name'";
            $res = mysqli_query($conn,$sql);
            $category_id = mysqli_fetch_array($res);
            $category_id = $category_id['id'];
            $calories = $file[$i][5];
            $serving = $file[$i][6];
            $weight = $file[$i][7];
            $sql = "INSERT INTO food_items(name,category_id,serving_type,weight,calories) values('$item_name',$category_id,'$serving','$weight',$calories)";
            if(!mysqli_query($conn,$sql)){
                echo mysqli_error($conn);
                echo "<br/>";
            }
        }
    }
}
?>