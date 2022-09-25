<?php

$script = $_SERVER ["SCRIPT_NAME"];
$project =  Explode('/', $script);
$name = $project[count($project)-1];

echo "The Script Name is : " ,$script;
echo "<br>";
echo "The Project Name is : ", $name;

echo "<br>";
echo "<br>";


echo (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']);