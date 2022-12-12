<?php

	include 'conn.php';
	
	$nama = $_POST['nama'];	
	$email = $_POST['email'];
	$password = $_POST['password'];
	$wallet = $_POST['wallet'];
	
	$connect->query("INSERT INTO profil (nama, email, password, wallet) VALUES ('".$nama."','".$email."','".$password."','".$wallet."')")

?>