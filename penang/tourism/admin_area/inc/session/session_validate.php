<?php
session_start();
include 'inc/init.php';

$user = "";
$name = "";
$type = 0;

if(isset($_SESSION['login']) && ($_SESSION['login']>0 && $_SESSION['login']<10) ){
	if(!(isset($_SESSION['time']))){
		session_destroy();
		header("Location: login.php?task=xpire"); 
		die();
	} else{
		$new_time=$_SESSION['time'];
		$new_brow=$_SERVER['HTTP_USER_AGENT'];
		$new_ipad=$_SERVER['REMOTE_ADDR'];
		$new_code=md5($new_time . $new_brow . $new_ipad . "LakesshHere");
	
		if($new_code!=$_SESSION['hash']){
			session_destroy();
			header("Location: login.php?task=xvalid"); 
			die();	
		}
		
		$user=$_SESSION['user'];
		$name=$_SESSION['name'];
		$type=$_SESSION['login'];
                $lastLogOut=$_SESSION['lastOut'];
                $lastLogIn=$_SESSION['lastIn'];
	} 
} else {
	//user not login
	session_destroy();
	header("Location: login.php?task=fail");  
	die();
}
?>