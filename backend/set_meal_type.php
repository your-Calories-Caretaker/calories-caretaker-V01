<?php
if(isset($_GET['type']))
{
    if($_GET['type'] == 'l' || $_GET['type'] == 's' || $_GET['type'] == 'b' || $_GET['type'] == 'd' )
    {
        // continue;
        if($_GET['type'] == 'l' ) $_SESSION['type'] = 'lunch';
        else if($_GET['type'] == 'b' ) $_SESSION['type'] = 'breakfast';
        else if($_GET['type'] == 's' ) $_SESSION['type'] = 'snacks';
        else if($_GET['type'] == 'd' ) $_SESSION['type'] = 'dinner';
        header("location: ./category.php");
    }else{
        if(!isset($_SESSION['type'])) header("location: ./meal.php");
    }
}else{
    if(!isset($_SESSION['type'])) header("location: ./meal.php");
}
?>