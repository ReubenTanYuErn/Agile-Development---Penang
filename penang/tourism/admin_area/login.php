<?php
session_start();

include_once 'inc/init.php';

$msg = "";
$username = "";
$password = "";
$badfield = "user";

if ($_GET) {
    switch ($_GET['task'])
    {
        case 'print':
            include 'inc/login/login_form.php';
            break;

    	case 'process':
            $form_valid = false;
            include 'inc/login/login_validate.php';
            if ($form_valid) {
				$loginSuccess = false;
				include 'inc/login/login_process.php';
				if ($loginSuccess) {
                    include 'inc/login/login_success.php';
				} else {
                    include 'inc/login/login_form.php';
				}
            } else {
                include 'inc/login/login_form.php';
            }
            break;

        case 'xpire':
            $msg = "Your session has expired. Please log in again.";
            include 'inc/login/login_form.php';
            break;
			
		case 'fail':
            $msg = "This page requires you to log in. Please log in.";
            include 'inc/login/login_form.php';
            break;
            
        case 'xvalid':
            $msg = "Error during validation. Please log in again.";
            include 'inc/login/login_form.php';
            break;
        
        case 'logout':
            $msg = "You have successfully logout.";
            include 'inc/login/login_form.php';
            break;
			
    	default:
            include 'inc/login/login_form.php';
            break;
    }
} else {
    include 'inc/login/login_form.php';
}


?>
