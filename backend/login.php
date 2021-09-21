<?php
session_start();
include('./config/connect.php');
$email = $password = '';
$password_not_hash = '';
$user_password = '';
$errors = array('email'=>'','password'=>'');
if(isset($_POST['login'])){
    $password_not_hashed = htmlspecialchars($_POST['password']);
    print_r($_POST);
    $email = htmlspecialchars(strtolower(trim($_POST['email'])));
    $password = htmlspecialchars($_POST['password']);
    $sql = "SELECT * FROM users where email='$email'";
    $res = mysqli_query($conn,$sql);
    if(mysqli_num_rows($res) != 1 ){
        $errors['email'] = 'Signup first Or Check your email';
    }else{
        $sql = "SELECT password,id from users where email='$email'";
        $res = mysqli_query($conn,$sql);
        $user_password = mysqli_fetch_array($res);
        if(md5($password) != $user_password['password']){
            $errors['password'] = 'Incorrect password';
        }
    }
    if(!array_filter($errors)){
        $_SESSION['id'] = $user_password['id'];
        echo "<script> location.href = './index.php'; </script>";
    }
}
?>