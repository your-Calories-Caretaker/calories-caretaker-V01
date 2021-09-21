<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db = 'calories-caretaker';
$conn = mysqli_connect($host,$username,$password,$db);
if(!$conn){
    echo 'cant connect';
}
?>