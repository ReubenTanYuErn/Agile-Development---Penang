<?php

include 'inc/login/func_validate.php';

if ($_POST) {
    $allowed = array();
    $allowed[] = 'user';
    $allowed[] = 'pass';
	
    $sent = array_keys($_POST);
    if ($allowed == $sent) {
		$username = $_POST['user'];
		$password = $_POST['pass'];
		
		if (!isset($username) || strlen($username) == 0) {
			$msg ="Please enter your username"; 
			$badfield='user';		
		} else if(strlen($username) > 30 || strlen($username) < 4) {
			$msg ="Invalid username";  
			$badfield='user';
		} else if(!charsValid($username)) {
			$msg ="Invalid username";  
			$badfield='user'; 
		} else if (!isset($password) || strlen($password) == 0) {
			$msg ="Please enter your password";  
			$badfield='pass';				
		} else if(strlen($password) < 6 || strlen($password) > 10) {
			$msg ="Invalid password";  
			$badfield='pass'; 
		} else if(!charsValid($password)) {
			$msg ="Invalid password";  
			$badfield='pass'; 
		} else {
			$form_valid = true;			
		}
	} 
}
?>