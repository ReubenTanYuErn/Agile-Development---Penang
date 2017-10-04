<?php

include 'inc/conn/conn_open.php';

$new_time = date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME']);

$qry = "UPDATE info SET timein='$new_time', timeout=NULL WHERE username = '$user'";

$result = mysqli_query($conn, $qry);

if ($result) {
    //update successful	
} else {
    //update fail
}

include 'inc/conn/conn_close.php';

session_start();
session_unset();
session_destroy();

?>