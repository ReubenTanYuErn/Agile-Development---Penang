<?php
function charsValid($str) {
	$pattern = '/^[a-zA-Z-0-9]{1,}$/';
	if (preg_match($pattern,$str)) {
		return true;
	} else {
		return false;
	}
}

?>