<?php
$cookie_name = "ujkmkmlser";
$cookie_value = "Johjiookjon Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 ), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}

echo '<br>';
echo '<br>';
echo '<br>';
?>

</body>
</html>
<?php

setcookie($cookie_name, $cookie_value, time() - (86400 ), "/");
?>
<html>
<body>

<?php
echo "Cookie 'user' is deleted.";
?>

</body>
</html>