<?php
include 'inc/login/func_hash.php';
include 'inc/conn/conn_open.php';

$safeUser = mysqli_real_escape_string($conn, $username);
$qry = "SELECT password FROM info WHERE username = '$safeUser'";

$result = mysqli_query($conn, $qry);
if ($result) {
	if (mysqli_num_rows($result) > 0) { 
            $row = mysqli_fetch_array($result); 
            if (_hash($password, $row['password'])) {
		$loginSuccess = true;
            } else {
                $msg = "Invalid password";
                $badfield = 'pass';
            } 
	} else {
            $msg = "Invalid username";
            $badfield = 'user';
        }
	mysqli_free_result($result);
} else {
	$msg = "Invalid username or password";
	$badfield = 'user';
}
	
include 'inc/conn/conn_close.php';
?>