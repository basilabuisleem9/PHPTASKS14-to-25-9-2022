
<?php
if(!isset($_GET['id'])) ||
(!isset($_GET['name'])) ||
(!isset($_GET['lastname'])) ||
(!isset($_GET['email']))

{
 die("id is required");
}

$userId= $_GET['id'];
$user_name= $_GET['id'];
$userLastName= $_GET['id'];
$useremail= $_GET['id'];


$dsn ='mysql:host=localhost;dbname=task_21sep';  // data source name
    $user = 'root';  // the user to connect
    $pass = ''; //password of this user



    try {

        $db = new PDO ( $dsn , $user , $pass );  ///start a new connection with pdo  class

        $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

     
        $q = "UPDATE users SET name='$user_name', lastName='$userLastName', email ='$useremail'  WHERE id=$userId ";
        
        $db->exec($q);

        // echo  'you are connect';



        
    } catch (PDOException $e) {
        echo 'Failed' . $e->getMessage();
    }
