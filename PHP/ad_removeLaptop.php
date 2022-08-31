<?php
	session_start();
	require 'checkSession.php';
    require 'checkAdmin.php';

	//Tạo kết nối
	require 'connect.php';


    $sql_fore="SET FOREIGN_KEY_CHECKS=0";
    $con -> query($sql_fore);
    
	//Viet cau lenh sql
	$sql="DELETE FROM laptop WHERE idlaptop=$_REQUEST[id]";
    $sqlConfig="DELETE FROM cauhinh WHERE idlaptop=$_REQUEST[id]";
    $sqlImg="DELETE FROM hinhanh WHERE idlaptop=$_REQUEST[id]";

    $con -> query($sqlImg);
    $con -> query($sqlConfig);
    $con -> query($sql);
    
    header('location: ad_laptop.php');
	//Đóng kết nối
	$con -> close();
?>