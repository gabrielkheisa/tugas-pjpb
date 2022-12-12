<?php

	include 'conn.php';
	
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$connect->query("UPDATE profil SET nama='".$nama."', email='".$email."', password='".$password."' WHERE id=". $id);

?>