<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="./css/sign-up.css">
<title> Sign up</title>
<style>
  
</style>
</head>

<body>
 <!-- coding navbar -->
 <nav class="navbar navbar-expand-sm navbar-dark bg-dark " style="padding-left: 50px ; background-color: #fff; ">
    <div style="padding-left:20px ; padding-right:50px ;">
        <img src="./images/hr.png" alt="" height="50px" width="100%">
    </div>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav">
            <li class="nav-item" style="padding-right:30px ;">
                <a href="land.html" class="nav-link">Home</a>
            </li>
            
            <li class="nav-item">
                <a href="login.html" class="nav-link" style="padding-right:30px ;">Login </a>
            </li>
            <li class="nav-item">
                <a href="sign-up.html" class="nav-link">Sign up </a>
            </li>
            <!-- <li class="nav-item" style="padding-right:30px ;">
                <a href="eva.html" class="nav-link">Evaluation</a>
            </li> -->
            <!-- <li class="nav-item" style="padding-right:30px ;">
                <a href="report_new.html" class="nav-link">Report</a>
            </li> -->
        </ul>
    </div>

</nav>
<!-- section sign up -->

<div class="row">
    <div class="col-12">
        <h1 style="text-align:center;font-family: 'Mochiy Pop One', sans-serif;">Create An Account</h1><br>

        <form id="form" action="#" method="get" name="first">
            <div class="mb-3">
                <label for="firstName" class="form-label">First Name </label>
                <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name">
                <div id="text1" class="text" style="color:red ; font-size:small"></div>

            </div>
            <div class="mb-3">
                <label for="lastName" class="form-label">Last Name </label>
                <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name">
                <div id="text2" class="text" style="color:red ; font-size:small"></div>
            </div>

            <div class="mb-3">
                <label for="the_email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="the_email"
                    placeholder="username@domain.com" aria-describedby="emailHelp">
                <div id="email_text" class="form-text" style="color:red ; font-size:small"></div>
            </div>


            <div class="mb-3">
                    <label for="exampleInputphone" class="form-label">Mobile</label>
                    <input type="number" class="form-control" maxlength="10" name="number"
                    id="exampleInputphone1">

                    <div id="mobiletext" class="form-text">
                <div id="number" class="number" style="color:red ; font-size:small"></div>
                                </div>
            <div class="mb-3 mt-3">
                <label for="the_password" class="form-label">Create Password </label>
                <input type="password" class="form-control" name="password" id="the_password"
                    placeholder="password ">
                <div id="password_text" class="form-text2" style="color:red ; font-size:small">
                </div>

            </div>


        <div class="mb-3 mt-3">
                <label for="confirm_password" class="form-label">confirm Password </label>
                <input type="password" class="form-control" name="confirm_password" id="confirm_password"
                    placeholder="password ">

            <br>

            <div class="d-grid gap-2">
                <button type="submit" onclick="valid()" style="background-color:red;color: white; height: 55px; " class="btn btn-block">Sign up</button><br>
                <a href="login.php" class=" w-100 fw-bold btn2" style="border: 1px solid black;"> Already have an account? Login</a>
            </div>
    </div>
    </form>
</div>
<!-- section footer -->
<footer class="site-footer">
    ©️ 2022 Copyright Group 5
</footer>


<script src="js/sign-up.js">
    
</script>
</body>

</html>




<?php

require_once('db.php');
require_once ('common.php');

if(
    !isset($_GET['firstName'] ) || 
    !isset($_GET['lastName'] )||
     !isset($_GET['password'] ) ||
    !isset($_GET['email'] )   
)
{
   
 return;
}

$fName= $_GET['firstName'];
$lName= $_GET['lastName'];
$password= $_GET['password'];
$email= $_GET['email'];
// $fName= $_GET['firstName'];

$dsn ='mysql:host=localhost;dbname=task_21sep';  // data source name
    $user = 'root';  // the user to connect
    $pass = ''; //password of this user

    try {

        $db = new PDO ( $dsn , $user , $pass );  ///start a new connection with pdo  class

        $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

     
        //$q ="DELETE FROM users WHERE id=$userId";

        $sq = "INSERT INTO `users` (`name`,`lastName`,  `email`, `password`, `created_at`, `loging_at`) VALUES ('$fName', '$lName', '$email', '$password', '2022-09-20', '2022-09-12');";
        
        $db->exec($sq);

        
        // header("Location: table.php");
        
    } catch (PDOException $e) {

        echo 'Failed' . $e->getMessage();
    }
