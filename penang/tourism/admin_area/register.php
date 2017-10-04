<?php
include 'inc/session/session_validate.php'; 

include "inc/init.php";


$badfield = 'user';
$msg = '';
$username = "";
$password1 = "";
$password2 = "";
if ($_GET) {
	switch ($_GET['task'])
	{
    	case 'print':
        	include 'inc/ureg/register_form.php';
        	break;

    	case 'process':
        	$form_valid = false;
        	include 'inc/ureg/register_validate.php';
        	if ($form_valid) {
                    $regSuccess = false;
                    include 'inc/ureg/register_process.php';
                    if ($regSuccess) {
                        include 'inc/ureg/register_success.php';
                    } else {
			include 'inc/ureg/register_fail.php';
                    }
        	} else {
            	include 'inc/ureg/register_form.php';
        	}
        	break;

    	default:
        	include 'inc/ureg/register_form.php';
        	break;
	}
} else {
	include 'inc/ureg/register_form.php';
}
?>

