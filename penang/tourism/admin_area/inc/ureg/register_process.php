<?php
include 'inc/login/func_hash.php';
include 'inc/conn/conn_open.php';

$type = 1;
if ($username == 'admin') {
	$type = 9;
}

$safeUser = mysqli_real_escape_string($conn, $username);
$safePass = mysqli_real_escape_string($conn, $password1);
$qry = sprintf("INSERT INTO info (username, password, type) VALUES ('$safeUser', '%s', $type)",
				_hash($safePass) ); 

if(mysqli_query($conn, $qry)) { 
	
	$regSuccess = true;
} 

if ($regSuccess) {
    
    $regSuccess=false;
    $qry = sprintf("INSERT INTO data (username, name) VALUES ('$safeUser', '$name')"); 

    if(mysqli_query($conn, $qry)) { 
	
	$regSuccess = true;
    }

}

include 'inc/conn/conn_close.php';
?>

