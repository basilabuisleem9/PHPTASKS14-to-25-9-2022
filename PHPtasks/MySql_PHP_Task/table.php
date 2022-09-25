<?php

require_once("backend/db.php");

$sql = "SELECT id, name,lastName , email , password , created_at , loging_at  FROM users";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  echo "<table >
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>lName</th>
                <th>Email</th>
                <th>Password</th>
                <th>Date created</th>
                <th>Date last login</th>
                <th>Delete</th>
                <th>Ubdate</th>
            </tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $url = "delete.php?id=".$row["id"];
    $url2 = "update_FORM.php?id=".$row["id"];
    echo "<tr>
            <td>".$row["id"]."</td>
            <td>".$row["name"]."</td>
            <td>".$row["lastName"]."</td>
            <td>".$row["email"]."</td>
            <td>".$row["password"]."</td>
            <td>".$row["created_at"]."</td>
            <td>".$row["loging_at"]."</td>
            <td><a href=".$url."><input type='button' value='Delete'></a></td>
            <td><a href=".$url2."><input type='button' value='Update'></a></td>
            </tr>";
  }
  echo "</table>";
}

?>


