<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form>
<input type="hidden" id = "id" name= "id" value = "<?php if(isset($_GET['id'])) { echo $_GET['id'];} ?>">
     <div class="form-group">
    <label for="firstName">firstName</label>
    <input type="text" class="form-control" name="firstName" id="inputfirstName" placeholder="enter first Name">
  </div> 
     <div class="form-group">
    <label for="firstName">lastName</label>
    <input type="text" class="form-control" name="lastName" id="inputlastName" placeholder="enter last Name">
  </div> 
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
    </div>
  </div>
  <br>
<a href="table.php"><button type="submit" class="btn btn-primary">Update</button></a>
</form>
<br>
<a href="table.php"><button type="button" class="btn btn-warning" >back</button></a>
</body>
</html>

<?php


if(!isset($_GET['id'])||
(!isset($_GET['firstName'])) ||
(!isset($_GET['lastName'])) ||
(!isset($_GET['email'])) )
{
    
 return;
}


$userId= $_GET['id']; 
$user_name= $_GET['firstName'];
$userLastName= $_GET['lastName'];
$useremail= $_GET['email'];


$dsn ='mysql:host=localhost;dbname=task_21sep';  // data source name
    $user = 'root';  // the user to connect
    $pass = ''; //password of this user



    try {
echo"YOU have updated!";
        $db = new PDO ( $dsn , $user , $pass );  ///start a new connection with pdo  class

        $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

     
        $q = "UPDATE users SET name='$user_name', lastName='$userLastName', email ='$useremail'  WHERE id=$userId";
        // die ($q );
        $db->exec($q);





        
    } catch (PDOException $e) {
        die ('Failed' . $e->getMessage()) ;
    }
