<?php
session_start();
require 'checkSession.php';
if(isset($_POST["dathang"])){
	require 'connect.php';
	$sql="SELECT * FROM giohang WHERE idthanhvien=$_SESSION[id]";
	$result=$con->query($sql);

    $sqlCode="SELECT * FROM donhang ORDER BY STT DESC LIMIT 1";
    $resultCode=$con->query($sqlCode);
    if($resultCode->num_rows>0) {
        while($rowCode=$resultCode->fetch_assoc()) {
            $madonhang=$rowCode["madonhang"]+1;
        }
    }else {
        $madonhang=1;
    }

	if($result->num_rows>0){
		while($row=$result->fetch_assoc()){
			$thanhtien=$row['giatien']*$row['soluong'];
			$sql1="INSERT INTO donhang(idthanhvien, idlaptop, trangthaidh, madonhang, soluong, thanhtien) VALUE ('$_SESSION[id]', '$row[idlaptop]', '1', '$madonhang', '$row[soluong]', '$thanhtien')";
			$result1=$con->query($sql1);

            $sql="DELETE FROM giohang WHERE idgiohang=$row[idgiohang]";
            //echo $sql;
            //Thực hiện truy vấn
            $con -> query($sql);
		}
	}
	$sql3="SELECT * FROM donhang WHERE madonhang=$madonhang";
	$result3=$con->query($sql3);
	if($result3->num_rows>0){
		header('location: purchase.php');
	}
}
?>