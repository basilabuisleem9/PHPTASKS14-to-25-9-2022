<?php 

// A helper to return a JSON response to the client. param 1 is the data, param 2 is the response status code
function json_response($data=null, $httpStatus=200)
{
    header_remove();

    header("Content-Type: application/json");

    http_response_code($httpStatus);

    echo json_encode($data);

    exit();
}

