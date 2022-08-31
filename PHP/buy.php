<?php
session_start();
require 'checkSession.php';
	$id = $_REQUEST["idlaptop"];
	require 'connect.php';

	$sqlCheckCart="SELECT * FROM giohang WHERE idthanhvien=$_SESSION[id] AND idlaptop=$id";
	$resultCheckCart=$con->query($sqlCheckCart);

	if($resultCheckCart->num_rows>0) {
		while($rowCheckCart=$resultCheckCart->fetch_assoc()) {
			$sl=$rowCheckCart["soluong"]+1;
			$sqlAmount="UPDATE giohang SET soluong=$sl WHERE idgiohang=$rowCheckCart[idgiohang]";
			$con->query($sqlAmount);
			header('location: cart.php');
		}
	}else {
		$sqlLaptop="SELECT * FROM laptop WHERE idlaptop=$id";
		$resultLaptop=$con->query($sqlLaptop);
	
		$sqlSale="SELECT giagiam FROM giam WHERE idlaptop=$id";
		$resultSale=$con->query($sqlSale);
	
		if($resultLaptop->num_rows>0){
			while($rowLaptop=$resultLaptop->fetch_assoc()){
				$price=-1;
				if($resultSale->num_rows>0){
					while($rowSale=$resultSale->fetch_assoc()){
						$price=$rowSale["giagiam"];
					}
				}else {
					$price=$rowLaptop["gialaptop"];
				}
	
				if($price!=-1) {
					$sqlCart= "INSERT INTO giohang(idthanhvien, idlaptop, giatien) VALUE ('$_SESSION[id]', '$rowLaptop[idlaptop]','$price')";
					$resultCart=$con->query($sqlCart);
					header('location: cart.php');
				}
			}
		}
	}
?>