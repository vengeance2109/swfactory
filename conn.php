<?php
$db = "swfactory_main";
$lgn = "185.56.145.147";
$pswd = "n)T&V7yZEJ;]";
$usr = "swfactory";

$conn = new mysqli($lgn, $usr, $pswd, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
  $conn-> set_charset("utf8");
}
 ?>
