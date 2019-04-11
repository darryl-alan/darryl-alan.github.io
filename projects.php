<?php
$segments = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));
if(count($segments) == 3){
	// gallery page
	echo 'Gallery here';
}
else {
	// projects page
	echo $segments[3];
}