<?php

if(!isset($_GET['id'])) {
 die("id is required");
}

$userId= $_GET['id'];

$dsn ='mysql:host=localhost;dbname=task_21sep';  // data source name
    $user = 'root';  // the user to connect
    $pass = ''; //password of this user



    try {

        $db = new PDO ( $dsn , $user , $pass );  ///start a new connection with pdo  class

        $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

     
        $q ="DELETE FROM users WHERE id=$userId";
        
        $db->exec($q);
        header("Location: table.php");
        
    } catch (PDOException $e) {
        echo 'Failed' . $e->getMessage();
    }
