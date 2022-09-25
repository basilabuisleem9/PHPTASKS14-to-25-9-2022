<?php
require_once('db.php');
require_once ('common.php');

if(!isset($_POST['email']) || !isset($_POST['password'])) {
 die("email & password are required.");
}

$email = $_POST['email'];
$password = $_POST['password'];


$sql_statement = "select id from admin WHERE email = '$email' and password = '$password' LIMIT 1"; // TODO: Handle SQL Injection admin
$result = $conn->query($sql_statement);

//var_dump($result);

 $response = new stdClass();

if($result->num_rows > 0) {
    //echo 'user found';
    $response->status = true;
    $response->message = 'success';
    json_response($response);
    // TODO: Create Cookie
    /// TODO: Rediredct the user to the dashboard page
} else {
    $response->status = false;
    $response->message = 'username or password is wrong';
    json_response($response, 403);
}


// if ($result = mysql_result($db, $sql)) {
// echo 'Ok';
// } else {
//     echo 'failed';
// }