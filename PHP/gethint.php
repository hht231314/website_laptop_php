<?php
$q = $_REQUEST["q"];
$hint="";
//echo $q;
//Tao ket noi
require 'connect.php';
//Viet cau lenh sql
$sql="SELECT * FROM thanhvien WHERE sodienthoai='".$q."'";
$result=$con -> query($sql);
if($result->num_rows>0){
	echo "Số điện thoại đã tồn tại !!";
}else{
	echo "OK";
}
?>