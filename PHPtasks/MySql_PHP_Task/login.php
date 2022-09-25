<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
crossorigin="anonymous"></script>
<link rel="stylesheet" href="./css/login.css">
<title>Login</title>

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
<!-- section login -->
<div class="row" >
<div class="col-12">
<h1 style="text-align: center ;">Log in</h1>
<br>

<form onsubmit="valid(); return false;" id="form" action="#" method="post" name="first">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="Email_1"aria-describedby="emailHelp" placeholder="username@domain.com">
    <div id="emailtext" class="form-text"></div>
</div>

<div class="mb-3 mt-3">
    <label for="exampleInputPassword1" class="form-label">Password </label>
    <input type="password" class="form-control" name="password" id="Password_1" placeholder="password ">
    <i class="bi bi-eye-slash" id="togglePassword"></i>
    <div id="passtext" class="form-text2"></div>
</div>

<br>

<div class="d-grid gap-2">
    <button type="submit"  style="background-color:blue;color: white; height: 55px; " class="btn btn-block">Log In</button>


<br>
<div>
        <p>Don't have an account? <a href="sign-up.php" style="text-decoration: none;">Sign up</a></p></div>
</div>
</form>

</div>
</div>
<!-- section footer -->
<footer class="site-footer">
©️ 2022 Copyright Group 5
</footer>

<script src="js/login.js">

</script>
</body>

</html>