<?php

$dbhost = "sql201.epizy.com";
$dbuser = "epiz_34020459";
$dbpass = "mulTdYd8Kt";
$dbname = "epiz_34020459_login";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}