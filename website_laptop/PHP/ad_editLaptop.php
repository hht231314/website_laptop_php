<?php
session_start();
require 'checkSession.php';
require 'checkAdmin.php';
$id=$_REQUEST['id'];

if(isset($_POST["submit"])) {

    
	//Lấy thông tin về laptop
	$laptopName=$_POST['laptopName'];
    $file_name=$_FILES['avatar']['name'];
	$file_path="../Pictures/hinhanh/".$file_name;
	$price=$_POST['price'];
	$brand=$_POST['brand'];
	$status=$_POST['status'];

    //Lấy thông tin về cấu hình
    $cpu=$_POST['cpu'];
    $ram=$_POST['ram'];
    $driver=$_POST['driver'];
    $screen=$_POST['screen'];
    $card=$_POST['card'];
    $port=$_POST['port'];
    $os=$_POST['os'];
    $design=$_POST['design'];
    $size=$_POST['size'];
    $time=$_POST['time'];

	//Tạo kết nối
	require 'connect.php';

	//Viet cau lenh sql update Laptop

    $sqlLaptop="UPDATE laptop SET tenlaptop='$laptopName', gialaptop='$price', thuonghieu='$brand', trangthailt='$status' WHERE idlaptop=$id";
    $con->query($sqlLaptop);

    if($file_name!="") {
        move_uploaded_file($_FILES['avatar']['tmp_name'],$file_path);
        $sqlImg="UPDATE laptop SET hinhdaidien='$file_name' WHERE idlaptop=$id";
        $con->query($sqlImg);
    }

    $sqlConfig="UPDATE cauhinh SET cpu='$cpu', ram='$ram', ocung='$driver', manhinh='$screen', cardmanhinh='$card',
    congketnoi='$port', hedieuhanh='$os', thietke='$design', kichthuoc='$size', thoidiem='$time' WHERE idlaptop=$id";
    $con->query($sqlConfig);
    header ('location: ad_laptop.php');
	
	//Đóng kết nối
	$con -> close();
	}
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/styles.css" media="screen" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="../JAVASCRIPT/ad_addLaptop.js"></script>
    <!--[if lte IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
	<![endif]-->
</head>

<body
    style="background-image: url(../Pictures/taobao-background-3-Recovered.jpg);background-size: cover;background-position: center;">
    <div id="wrap" class="body-form">
        <?php require 'menu.php';?>
        <div id="content" class="content-form-login" style="background-image: none; height: 2300px;">
            <div class="form-signup-div" style="height: 2100px;">
                <form method="post" name="myForm" enctype="multipart/form-data" <?php echo 'action="../PHP/ad_editLaptop.php?id='.$id.'"'; ?>
                    onsubmit="return editLaptop()">
                    <div class="form-title">
                        <div class="form-name">
                            <label>Sửa Laptop</label>
                        </div>

                        <div class="form-swap">
                            <div class="form-swap-signup" style="right: 120px;">
                                <label>Chuyển về trang quản lý</label>
                            </div>

                            <div class="form-swap-icon">
                                <a href="./ad_laptop.php"><img src="../HT_Cloud_Logo.svg" width="100" /></a>
                            </div>

                        </div> <!-- Close form-swap -->
                    </div> <!-- Close form-title -->

                    <div class="form-input">

                        <?php
                        $sqlLaptop="SELECT laptop.idlaptop, laptop.thuonghieu, laptop.trangthailt, laptop.tenlaptop,
                        laptop.hinhdaidien, laptop.gialaptop, cauhinh.cpu, cauhinh.ram, cauhinh.ocung, cauhinh.manhinh,
                        cauhinh.cardmanhinh, cauhinh.congketnoi, cauhinh.hedieuhanh, cauhinh.thietke,
                        cauhinh.kichthuoc, cauhinh.thoidiem
                        FROM laptop, cauhinh WHERE laptop.idlaptop=$_REQUEST[id]
                        AND laptop.idlaptop=cauhinh.idlaptop";

                        $resultLaptop=$con->query($sqlLaptop);
                        
                        if($resultLaptop->num_rows>0) {
                            while($rowLaptop=$resultLaptop->fetch_assoc()) {        
                    ?>

                        <div class="form-input-icon" id="div-laptopName">
                            <span>Tên Laptop</span>
                            <label><i class="fas fa-laptop"></i></label>
                            <input onblur="checkName()" type="text" name="laptopName" id="laptopName"
                                placeholder="Nhập tên Laptop.." value="<?php echo $rowLaptop["tenlaptop"] ?>" />
                            <span class="form-input-err" style="color: red;" id="errName"></span>
                        </div> <!-- Close form-input-icon -->

                        <div class="form-input-icon" id="div-image">
                            <span>Hình Đại Diện</span>
                            <label><i class="far fa-image"></i></label>
                            <input type="file" name="avatar" id="image" />
                            <span class="form-input-err" style="color: red;" id="errImage"></span>
                        </div> <!-- Close form-input-icon -->

                        <div class="form-input-icon" id="div-price">
                            <span>Giá Laptop</span>
                            <label><i class="fas fa-dollar-sign"></i></label>
                            <input onblur="checkPrice()" type="number" name="price" id="price"
                                placeholder="Nhập giá Laptop.." value="<?php echo $rowLaptop["gialaptop"] ?>" />
                            <span class="form-input-err" style="color: red;" id="errPrice"></span>
                        </div> <!-- Close form-input-icon -->

                        <div class="form-input-icon" id="div-brand">
                            <span>Thương Hiệu</span>
                            <label><i class="fab fa-apple"></i></label>
                            <select name="brand" class="form-input-select">
                                <?php
                                    $sqlBrand="SELECT * FROM thuonghieu";
                                    $resultBrand=$con -> query($sqlBrand);
                                    if($resultBrand->num_rows>0){
                                        while($rowBrand=$resultBrand->fetch_assoc()){
                                            if($rowLaptop["thuonghieu"]==$rowBrand["idthuonghieu"]) {
                                                echo '<option value="'.$rowBrand["idthuonghieu"].'" selected>'.$rowBrand["thuonghieu"].'</option>';
                                            }else {
                                                echo '<option value="'.$rowBrand["idthuonghieu"].'">'.$rowBrand["thuonghieu"].'</option>';
                                            }
                                        }
                                    }
                                ?>
                            </select>
                        </div> <!-- Close form-input-icon -->

                        <div class="form-input-icon" id="div-status">
                            <span>Trạng Thái Laptop</span>
                            <label><i class="fas fa-bell"></i></label>
                            <select name="status" class="form-input-select">
                                <?php
                                    $sqlStatus="SELECT * FROM trangthailaptop";
                                    $resultStatus=$con -> query($sqlStatus);
                                    if($resultStatus->num_rows>0){
                                        while($rowStatus=$resultStatus->fetch_assoc()){
                                            if($rowLaptop["trangthailt"]==$rowStatus["idtrangthailt"]) {
                                                echo '<option value="'.$rowStatus["idtrangthailt"].'" selected>'.$rowStatus["trangthailt"].'</option>';
                                            }else {
                                                echo '<option value="'.$rowStatus["idtrangthailt"].'">'.$rowStatus["trangthailt"].'</option>';
                                            }
                                        }
                                    }
                                ?>
                            </select>
                        </div> <!-- Close form-input-icon -->

                        <div class="form-input-icon" id="div-cpu">
                            <span>CPU</span>
                            <label><i class="fas fa-fire"></i></label>
                            <input onblur="checkCpu()" type="text" name="cpu" id="cpu"
                                value="<?php echo $rowLaptop["cpu"] ?>" placeholder="Nhập CPU.." />
                            <span class="form-input-err" style="color: red;" id="errCpu"></span>
                        </div> <!-- Close form-input-icon -->

                        <div class="form-input-icon" id="div-ram">
                            <span>RAM</span>
                            <label><i class="fas fa-fire"></i></label>
                            <input onblur="checkRam()" type="text" name="ram" id="ram"
                                value="<?php echo $rowLaptop["ram"] ?>" placeholder=" Nhập RAM.." />
                            <span class="form-input-err" style="color: red;" id="errRam"></span>
                        </div> <!-- Close form-input-icon -->

                        <div class="form-input-icon" id="div-driver">
                            <span>Ổ Cứng</span>
                            <label><i class="fas fa-fire"></i></label>
                            <input onblur="checkDriver()" type="text" name="driver" id="driver"
                                placeholder="Nhập Ổ Cứng.." value="<?php echo $rowLaptop["ocung"] ?>" />
                            <span class="form-input-err" style="color: red;" id="errDriver"></span>
                        </div> <!-- Close form-input-icon -->

                        <div class="form-input-icon" id="div-screen">
                            <span>Màn Hình</span>
                            <label><i class="fas fa-fire"></i></label>
                            <input onblur="checkScreen()" type="text" name="screen" id="screen"
                                placeholder="Nhập Màn Hình.." value="<?php echo $rowLaptop["manhinh"] ?>" />
                            <span class="form-input-err" style="color: red;" id="errScreen"></span>
                        </div> <!-- Close form-input-icon -->

                        <div class="form-input-icon" id="div-card">
                            <span>Card Màn Hình</span>
                            <label><i class="fas fa-fire"></i></label>
                            <input onblur="checkCard()" type="text" name="card" id="card"
                                placeholder="Nhập Card Màn Hình.." value="<?php echo $rowLaptop["cardmanhinh"] ?>" />
                            <span class="form-input-err" style="color: red;" id="errCard"></span>
                        </div> <!-- Close form-input-icon -->

                        <div class="form-input-icon" id="div-port">
                            <span>Cổng Kết Nối</span>
                            <label><i class="fas fa-fire"></i></label>
                            <input onblur="checkPort()" type="text" name="port" id="port"
                                placeholder="Nhập Cổng Kết Nối.." value="<?php echo $rowLaptop["congketnoi"] ?>" />
                            <span class="form-input-err" style="color: red;" id="errPort"></span>
                        </div> <!-- Close form-input-icon -->

                        <div class="form-input-icon" id="div-os">
                            <span>Hệ Điều Hành</span>
                            <label><i class="fas fa-fire"></i></label>
                            <input onblur="checkOs()" type="text" name="os" id="os"
                                value="<?php echo $rowLaptop["hedieuhanh"] ?>" placeholder="Nhập Hệ Điều Hành.." />
                            <span class="form-input-err" style="color: red;" id="errOs"></span>
                        </div> <!-- Close form-input-icon -->

                        <div class="form-input-icon" id="div-design">
                            <span>Thiết Kế</span>
                            <label><i class="fas fa-fire"></i></label>
                            <input onblur="checkDesign()" type="text" name="design" id="design"
                                placeholder="Nhập Thiết Kế.." value="<?php echo $rowLaptop["thietke"] ?>" />
                            <span class="form-input-err" style="color: red;" id="errDesign"></span>
                        </div> <!-- Close form-input-icon -->

                        <div class="form-input-icon" id="div-size">
                            <span>Kích Thước</span>
                            <label><i class="fas fa-fire"></i></label>
                            <input onblur="checkSize()" type="text" name="size" id="size"
                                placeholder="Nhập Kích Thước.." value="<?php echo $rowLaptop["kichthuoc"] ?>" />
                            <span class="form-input-err" style="color: red;" id="errSize"></span>
                        </div> <!-- Close form-input-icon -->

                        <div class="form-input-icon" id="div-time">
                            <span>Thời Điểm Ra Mắt</span>
                            <label><i class="far fa-calendar-alt"></i></label>
                            <input onblur="checkTime()" type="text" name="time" id="time" placeholder="Nhập Thời Điểm.."
                                value="<?php echo $rowLaptop["thoidiem"] ?>" />
                            <span class="form-input-err" style="color: red;" id="errTime"></span>
                        </div> <!-- Close form-input-icon -->

                        <?php
                        }
                    }
                    ?>

                    </div>

                    <div class="form-input-submit">
                        <input type="submit" name="submit" value="Lưu" />
                    </div> <!-- Close form-input-submit -->
                </form>
            </div> <!-- Close form-login -->
        </div>
        <!--Đóng div content-->
        <!-- <?php require 'footer.php';?> -->
    </div>
    <!--Đóng div wrap-->
</body>

</html>