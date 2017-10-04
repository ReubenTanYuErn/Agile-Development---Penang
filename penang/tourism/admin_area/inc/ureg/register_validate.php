<?php

function userExist($name) {
	include 'inc/conn/conn_open.php';

	$safeUser = mysqli_real_escape_string($conn, $name);
	$qry = "SELECT id FROM info WHERE username = '$safeUser'";

	$exist = false;
	$result = mysqli_query($conn, $qry);
	if ($result) {
		if(mysqli_num_rows($result) > 0) { 
			$exist = true;
		}
		mysqli_free_result($result);
	} 
		
	include 'inc/conn/conn_close.php';
	return $exist;
}

include 'inc/login/func_validate.php';

if ($_POST) {
    $allowed = array();
    $allowed[] = 'name';
    $allowed[] = 'user';
    $allowed[] = 'pass1';
    $allowed[] = 'pass2';
    $allowed[] = 'submit';

    $sent = array_keys($_POST);
    if ($allowed == $sent) {
                $name = $_POST['name'];
		$username = $_POST['user'];
		$password1 = $_POST['pass1'];
		$password2 = $_POST['pass2'];
		
                if (!isset($name) || strlen($name) == 0) {
                        $msg ="Please enter your full name"; 
			$badfield='name';		
                } else if (!isset($username) || strlen($username) == 0) {
			$msg ="Please enter your username"; 
			$badfield='user';		
		} else if(strlen($username) > 30 || strlen($username) < 4) {
			$msg ="Username must contains between 4 to 30 characters";  
			$badfield='user';
		} else if(!charsValid($username)) {
			$msg ="Username can consist of characters and numbers only";  
			$badfield='user'; 
		} else if(userExist($username)) {
			$msg ="Username already exist";  
			$badfield='user'; 
		} else if (!isset($password1) || strlen($password1) == 0) {
			$msg ="Please enter your password";  
			$badfield='pass1';				
		} else if (!isset($password2) || strlen($password2) == 0) {
			$msg ="Please enter your password twice for verification";  
			$badfield='pass1';
		} else if($password1 != $password2) {
			$msg ="Your password does not match";  
			$badfield='pass1';		
		} else if(strlen($password1) < 6 || strlen($password1) > 10) {
			$msg ="Password must contains 6 to 10 characters";  
			$badfield='pass1'; 
		} else if(!charsValid($password1)) {
			$msg ="Password can consist of characters and numbers only";  
			$badfield='pass1'; 
		} else {
			$form_valid = true;			
		}
	} 
}
?>
