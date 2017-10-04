<?php

$mysql_host = "localhost";
$mysql_database = "user";
$mysql_user = "root";
$mysql_password = "";

$conn = @mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database) or die("Connection error: ".mysql_error());


?>