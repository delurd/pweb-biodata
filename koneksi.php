<?php

$server = "localhost";
$database_name = "pwebbiodata";
$username = "root";
$password = "";

$koneksi = mysqli_connect($server, $username, $password, $database_name);

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>


