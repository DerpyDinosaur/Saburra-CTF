<?php

$serverip = "127.0.0.1";
$dbUser = "root";
$dbPass = "";
$dbName = "saburra";

$conn = mysqli_connect($serverip, $dbUser, $dbPass, $dbName);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}