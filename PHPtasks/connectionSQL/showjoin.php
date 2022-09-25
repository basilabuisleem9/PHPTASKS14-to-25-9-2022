<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr>  <th>national_Number</th>    <th>national_Number</th>   <th>MiddleName</th>  <th>familyName</th>   </tr>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
  parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare("SELECT national_Number , national_Number ,MiddleName ,familyName FROM (
SELECT nationalnumber.national_Number ,  student.firstName ,student.MiddleName , student.familyName ,student.Degree
FROM nationalnumber
INNER JOIN student
ON nationalnumber.studentID = student.studentID;)


");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>