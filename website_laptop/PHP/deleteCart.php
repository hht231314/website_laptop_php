<?php
	session_start();
	require 'checkSession.php';

	//Tạo kết nối
	require 'connect.php';

	//Viet cau lenh sql
	$sql="DELETE FROM giohang WHERE idgiohang=$_REQUEST[id]";
	//echo $sql;
	//Thực hiện truy vấn
	$con -> query($sql);
    header('location: cart.php');
	//Đóng kết nối
	$con -> close();
?>