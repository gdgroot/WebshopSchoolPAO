<?php

function clean($var) {
	$var = htmlspecialchars($var);
	$var = mysql_real_escape_string($var);
	return $var;
}

function appendTD($value) {
	return '<td>' . $value . '</td>';
}
?>