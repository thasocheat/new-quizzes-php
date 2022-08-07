<?php

// $dbhost = "localhost";
// $dbuser = "root";
// $dbpass = "";
// $dbname = "php_sample_quize_db";
$dbhost = "ec2-44-198-82-71.compute-1.amazonaws.com";
$dbuser = "fsmwnmuanqzsyk";
$dbpass = "9010bf20aa8a13c538d7d8a1d4a81a0854687efa3ee4e21923f568c6f313e0aa";
$dbname = "dcp5i9hfce4cqt";

// $dbhost = "localhost";
// $dbuser = "id19374795_phpquizzeskhmer";
// $dbpass = "@CEmbM7fb&IOwm+x";
// $dbname = "id19374795_php_sample_quize_db";

if($con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	echo 'Connected';
}else{
	die("Failed to connect!");
}
