<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Email: <input type="email" name="email" id="email"><br>
    password: <input type="password" name="password" id="password"><br>
    <input type="submit">

    <?php 
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $password = $_POST ['password'];

    if(empty($email)){
        echo "Name is empty";
    }
    else {
        echo $email;
    }
  }  
  
  ?>
</form>
</body>
</html>




