<?php
include('./config/connect.php');
$errors = array('first_name'=>'', 'last_name'=>'', 'email'=>'', 'password'=>'', 'confirm_password'=>'');
$first_name = $last_name = $email = $password = $confirm_password = '';
if(isset($_POST['sign_up'])){
    // print_r($_POST);
    $first_name = htmlspecialchars(trim($_POST['first_name']));
    $last_name = htmlspecialchars(trim($_POST['last_name']));
    $email = htmlspecialchars(strtolower(trim($_POST['email'])));
    $password = htmlspecialchars(trim($_POST['password']));
    $confirm_password = htmlspecialchars(trim($_POST['confirm_password']));
    $state = htmlspecialchars($_POST['state']);
    $city = htmlspecialchars($_POST['city']);
    if(empty($first_name)){
        $errors['first_name'] = 'First name cannot be empty';
    }else if(!preg_match('/^[a-zA-Z]{1,255}$/',$first_name)){
        $errors['first_name'] = 'First Name is not valid';
    }

    if(empty($email)){
        $errors['email'] = 'Email cannot be empty';
    }else if(!preg_match("/^([a-zA-Z\d\.-]+)@([a-zA-Z\d-]+)\.([a-zA-Z]{2,8})(\.[a-zA-Z]{2,8})?$/",$email)){
        $errors['email'] = 'Email is nt valid';
    }else{
        $sql = "SELECT * FROM users where email='$email'";
        $res = mysqli_query($conn,$sql);
        if(mysqli_num_rows($res) > 0){
            $errors['email'] = 'Email already taken';
        }
    }
    if(empty($password)){
        $errors['password'] = 'Password cannot be empty';
    }else if(strlen($password) < 8){
        $errors['password'] = 'Password should be atleast 8 characters long';
    }

    if($password != $confirm_password){
        $errors['confirm_password'] = 'Password and Confirm password did not match';
    }
    if(!array_filter($errors)){
        $password = md5($password);
        $sql = "INSERT INTO users(first_name,last_name,email,password,city_id) VALUES('$first_name','$last_name','$email','$password',$city)";
        if(mysqli_query($conn,$sql)){
            echo "<script> location.href = './login.php';</script>";
        }else{
            echo mysqli_error($conn,$sql);
        }
    }else{
        echo "cannot add it to database";
    }
}
?>