<?php

include 'inc/conn/conn_open.php';


$safeUser = mysqli_real_escape_string($conn, $username);
$qry = "SELECT info.timein, info.timeout, info.type, data.name FROM info, data WHERE info.username = data.username AND info.username = '$safeUser'";

$lastTimeIn = false;
$lastTimeOut = false;
$uLevel = false;
$uName = false;

$result = mysqli_query($conn, $qry);
if ($result) {
	if (mysqli_num_rows($result) > 0) { 
		$row = mysqli_fetch_array($result); 
		
		if (isset($row['timein']) && ($row['timein'] != NULL)) {
			$lastTimeIn = $row['timein'];
		} 
		if (isset($row['timeout']) && ($row['timeout'] != NULL)) {
			$lastTimeOut = $row['timeout'];
		} 
		if (isset($row['type']) && ($row['type'] != NULL)) {
			$uLevel = $row['type'];			
		} 
		if (isset($row['name']) && ($row['name'] != NULL)) {
			$uName = $row['name'];
		} 		
	} else {
		//unable to find username
	}
	mysqli_free_result($result);
} else {
	//unable to execute qry
}


$new_time = date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME']);
$new_brow = $_SERVER['HTTP_USER_AGENT'];
$new_ipad = $_SERVER['REMOTE_ADDR'];
$new_code=md5($new_time . $new_brow . $new_ipad . "LakesshHere");

$safeUser = mysqli_real_escape_string($conn, $username);
$qry = "UPDATE info SET timein='$new_time', timeout=NULL WHERE username = '$safeUser'";

$result = mysqli_query($conn, $qry);
if ($result) {
	//update successful
	
} else {
	//update fail
}

include 'inc/conn/conn_close.php';
	
session_regenerate_id (); 
$_SESSION['lastIn'] = $lastTimeIn;
$_SESSION['lastOut'] = $lastTimeOut;
$_SESSION['time'] = $new_time;
$_SESSION['hash'] = $new_code;
$_SESSION['user'] = $username;
$_SESSION['name'] = $uName;
$_SESSION['login'] = $uLevel;

header('Location: firstpage.php'); 
?>


