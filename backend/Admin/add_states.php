<?php
    include('../config/connect.php');
    require_once('../vendor/autoload.php');
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Reader\Csv;
    use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
if(isset($_POST['submit'])){
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
        for($i=1; $i<count($file); $i++){
            $name = $file[$i][0];
            $sql = "INSERT INTO states(name) VALUES('$name')";
            mysqli_query($conn,$sql);
            echo "$sql"."<br>";
        }
    }else{
        print_r($_FILES);
    }
}
?>