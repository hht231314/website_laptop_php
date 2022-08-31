<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/styles.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../CSS/userStyles.css" media="screen" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!--[if lte IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
	<![endif]-->
</head>
<?php session_start();
    require 'checkSession.php'; ?>

<body>
    <div id="wrap" class="dathang-content">
        <?php require 'menu.php'; ?>
        <div id="content">
            <div id="order">
                <?php
                        require 'connect.php';
                        $sql="SELECT * FROM giohang WHERE idthanhvien=$_SESSION[id]";
                        $result=$con->query($sql);
                        echo '<div class="dathang-tieude">
                                <h3>Sản Phẩm:</h3>
                            </div>
                            <div class="dathang-sanpham">';
                        if($result->num_rows>0){
                            $tong=0;
                            while($row=$result->fetch_assoc()){
                                $sql1="SELECT * FROM laptop WHERE idlaptop=$row[idlaptop]";
                                $result1=$con->query($sql1);
                                if($result1->num_rows>0){
                                    while($row1=$result1->fetch_assoc()){
                                        $tong=$tong + $row['soluong']*$row1['gialaptop'];
                                        echo '<div class="dathang-sanpham-row">
                                            <img src="../Pictures/hinhanh/'.$row1["hinhdaidien"].'" />
                                            <label class="namelt">'.$row1["tenlaptop"].'</label>';
                                        $sql2="SELECT * FROM giam WHERE idlaptop='".$row["idlaptop"]."'";
                                        $result2=$con->query($sql2);
                                        if($result2->num_rows>0){
                                            while($row2=$result2->fetch_assoc()){
                                                echo '<div class="dathang-sanpham-row-price">
                                                    <span class="gialaptop">'.$row2["giagiam"].' VND</span>
                                                    <span class="giagiam" style="font-size: 13px; text-decoration-line: line-through; color: red;">'.$row1["gialaptop"].' VND</span>
                                                    </div>';
                                            }
                                        }else{
                                            echo '<div class="dathang-sanpham-row-price">
                                                <span class="gialaptop">'.$row1["gialaptop"].' VND</span>
                                                <span class="giagiam"></span></div>';
                                        }
                                        echo '
                                            <span class="soluong">x'.$row["soluong"].'</span></div>
                                        ';
                                        
                                    }
                                }
                                
                            }
                        }
                        echo '</div>';
                        $sql3="SELECT * FROM thanhvien WHERE id=$_SESSION[id]";
                        $result3=$con->query($sql3);
                                if($result3->num_rows>0){
                                    while($row3=$result3->fetch_assoc()){
                                        echo '<div class="dathang-thongtin">
                                            <span>Tổng Tiền: <b>'.$tong.' VND</b></span>
                                            <label>Thông Tin Địa chỉ: </label>
                                            <div class="dathang-thongtin-khachhang">
                                                <span class="thongtin1">Địa chỉ: '.$row3["diachi"].'</span>
                                                <span class="thongtin1">Số điện thoại: '.$row3["sodienthoai"].'</span>
                                                <span class="thongtin1">Email: '.$row3["email"].'</span></div>
                                            </div>
                                        ';
                                    }
                                }
                    ?>
                <div id="dathang">
                    <form action="order.php" method="post" enctype="multipart/form-data">
                        <input type="submit" name="dathang" value="Đặt Hàng" />
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</body>

</html>