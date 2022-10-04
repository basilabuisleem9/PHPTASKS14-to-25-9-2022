<?php
session_start();
require 'dbcon.php';
// ===========================max===========================


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="widtd=<a href=" index.php" class="btn btn-danger float-end">BACK</a>, initial-scale=1.0"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .col {
            width: 300px;
            margin: 40px;
            font-size: x-large;
            background-color: rgb(175, 238, 238);
        }

        .con {
            text-align: center;
            width: 100%;
            height: 200px;
            border: 2px, black, solid;
            background-color: rgb(175, 238, 238);

            /* background-image: "img/photos/pexels-mariusz-łukasik-1740986.jpg"; */
        }

        body {
            background-image: "img/photos/pexels-mariusz-łukasik-1740986.jpg";
        }
        a{
          margin-left: 5%;
          margin-top: 5px;
        }
    </style>
</head>

<body>

    <div class="con">
        <div class="row row-cols-2">
            <div class="col"><?PHP $query = "SELECT max(salary) as `maxsalary` FROM students";
                                $res = mysqli_query($con, $query);
                                $data = mysqli_fetch_array($res);

                                echo "max salary:" . $data['maxsalary'] . "<br>"; ?></div>


            <div class="col"><?PHP $query = "SELECT min(salary) as `minsalary` FROM students";
                                $res = mysqli_query($con, $query);
                                $data = mysqli_fetch_array($res);

                                echo "mim salary:" . $data['minsalary'] . "<br>"; ?></div>


            <div class="col"><?php $query = "SELECT AVG(salary) as `AVGsalary` FROM students";
                                $res = mysqli_query($con, $query);
                                $data = mysqli_fetch_array($res);

                                echo "AVG salary:" . $data['AVGsalary'] . "<br>";
                                ?></div>
            <div class="col"><?php $query = "SELECT count(*) as total from Students";
                                $res = mysqli_query($con, $query);
                                $data = mysqli_fetch_array($res);

                                echo "number of students :" . $data['total'] . "<br>"; ?></div>
        </div>
    </div>
    <a href="index.php" class="btn btn-danger ">BACK</a>
</body>

</html>