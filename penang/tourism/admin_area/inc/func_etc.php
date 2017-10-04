<?php
function showTime($timeInSeconds) {
	$code = "<script language='JavaScript'>";
	$code .= "var loc = new Date();";
	$code .= "var d = new Date(" . ($timeInSeconds * 1000) .");";
	$code .= "document.write(d.toLocaleString());";
	$code .= "</script>";
	return $code;
}
?>
	