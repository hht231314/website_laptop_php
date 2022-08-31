<?php
	session_start();
	require 'checkSession.php';

	//Tạo kết nối
	require 'connect.php';

	//Viet cau lenh sql
	$sql="DELETE FROM yeuthich WHERE id=$_REQUEST[idlaptop]";
	//echo $sql;
	//Thực hiện truy vấn
	$con -> query($sql);
    header('location: wishList.php');
	//Đóng kết nối
	$con -> close();
?>