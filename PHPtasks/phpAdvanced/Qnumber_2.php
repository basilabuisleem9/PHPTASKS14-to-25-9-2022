<?php
if(isset($_POST['submit'])){
$link= $_POST['search'] ;
header("Location:"."https://www.".$link.".com/");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>search box </title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
<body>
    <h1>Search Box</h1>
    <form action="search.php" method="POST">
    <div class="box">
        <input type="text" name=" search">
        <div class="button">
        <input type="submit" name="submit" value="go" autocomplete="off" class="edit">
    </div>
    </div>
    </form>
</body>

</body>
</html>