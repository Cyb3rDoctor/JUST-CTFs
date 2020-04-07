<?php
$flag = 'JUST{CuRl_1337_K!nG}';
if ($_SERVER['HTTP_USER_AGENT'] != "Just-Web-Broswer"){
	die("You must use [Just-Web-Broswer] to view this page! Other web broswer will be denied!");
}
echo $flag;
