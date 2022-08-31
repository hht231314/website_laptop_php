<?php
session_start();
require 'checkSession.php';
if(!isset($_SESSION["id"])){
	header ('location: login.php');
}
	$id = $_REQUEST["idlaptop"];
	require 'connect.php';

	$sqlCheckLaptop="SELECT * FROM yeuthich WHERE idlaptop=$id AND idthanhvien=$_SESSION[id]";
	$resultCheckLaptop=$con->query($sqlCheckLaptop);
	if($resultCheckLaptop->num_rows>0) {
		header('location: wishList.php');
	}else {
		$sql="SELECT * FROM laptop WHERE idlaptop=$id";
		$result=$con->query($sql);
	
		if($result->num_rows>0) {
			while($row=$result->fetch_assoc()) {
				$sqlWishList= "INSERT INTO yeuthich(idthanhvien, idlaptop) VALUE ('$_SESSION[id]', '$row[idlaptop]')";
				$resultWishList=$con->query($sqlWishList);
				header ('location: wishList.php');
			}
		}
	}	
?>