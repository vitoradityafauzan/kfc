<!--
Author : Aguzrybudy
Created : Selasa, 19-April-2016
Title : Crud Menggunakan Modal Bootsrap
-->
<?php
	include "dbconfig.php";
	
	$nik=$_POST['nik'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$position = $_POST['position'];
	$division = $_POST['division'];
	$modal=mysqli_query($conn,"UPDATE biodata_it SET fname = '$fname',lname = '$lname',email = '$email',phone = '$phone',position = '$position',division = '$division' WHERE nik = '$nik'");
	header('location:admin.php');
?>