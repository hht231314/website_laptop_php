<?php
	session_start();
	require 'checkSession.php';
	require 'checkAdmin.php';

	//Tạo kết nối
	require 'connect.php';

	//Viet cau lenh sql
    $sql_fore="SET FOREIGN_KEY_CHECKS=0";
    $con -> query($sql_fore);
	$sql="DELETE FROM thanhvien WHERE id=$_REQUEST[id]";
	//echo $sql;

	//Thực hiện truy vấn
	$con -> query($sql);

    $sql_fore1="SET FOREIGN_KEY_CHECKS=1";
    $con -> query($sql_fore1);
    header('location: ad_user.php');
	//Đóng kết nối
	$con -> close();
?>