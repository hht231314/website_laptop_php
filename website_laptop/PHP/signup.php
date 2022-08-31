<?php
session_start();

if(isset($_POST["submit"])){
	//Lấy thông tin về
	$name=$_POST['username'];
	$pass=md5($_POST['password']);
	$rePass=md5($_POST['rePassword']);
	$sex=$_POST['sex'];
	$file_name=$_FILES['avatar']['name'];
	$file_path="../Pictures/avt/".$file_name;
	$address=$_POST['address'];
	$phone=$_POST['phoneNumber'];
	$email=$_POST['mail'];
	//Tạo kết nối
	require 'connect.php';

    $sqlCheckPhone="SELECT * FROM thanhvien WHERE sodienthoai=$phone";
    $resultCheckPhone=$con->query($sqlCheckPhone);
    if($resultCheckPhone->num_rows>0) {
        echo '<script>alert("Vui lòng chọn số điện thoại chưa đăng ký trước đây !!");</script>';
    } else {
        	//Viet cau lenh sql
            move_uploaded_file($_FILES['avatar']['tmp_name'],$file_path);
            $sql="INSERT INTO thanhvien(tendangnhap, matkhau, gioitinh, hinhdaidien, diachi, sodienthoai, email)
                    VALUE ('$name','$pass', '$sex', '$file_name', '$address', '$phone', '$email')";
            $con->query($sql);
            //$echo $sql;
            //Thực hiện truy vấn
            $sqlCheck="SELECT * FROM thanhvien WHERE tendangnhap='".$name."' ";
            $resultCheck=$con -> query($sqlCheck);
            if($resultCheck->num_rows>0){
                if(isset($_SESSION["id"])){
                    $sqlLevel="SELECT * FROM thanhvien WHERE id=$_SESSION[id]";
                    $resultLevel=$con->query($sqlLevel);
                    
                    if($resultLevel->num_rows>0) {
                        while($rowLevel=$resultLevel->fetch_assoc()) {
                            if($rowLevel["level"]==1) {
                                header('location: ad_user.php');
                            }else {
                                header('location: login.php');
                            }
                        }
                    }
                }else {
                    header('location: login.php');
                }
            }else{
                header('location: signup.php');
            }
    }
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
    <script src="../JAVASCRIPT/signup.js"></script>
    <!--[if lte IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
	<![endif]-->
</head>

<body
    style="background-image: url(../Pictures/taobao-background-3-Recovered.jpg);background-size: cover;background-position: center;">
    <div id="wrap" class="body-form">
        <?php require 'menu.php';?>
        <div id="content" class="content-form-login" style="background-image: none; height: 1800px;">
            <div class="form-signup-div">
                <form method="post" name="myForm" enctype="multipart/form-data" action="../PHP/signup.php"
                    onsubmit="return signup()">
                    <div class="form-title">
                        <div class="form-name">
                            <label>Đăng ký</label>
                        </div>

                        <div class="form-swap">
                            <div class="form-swap-signup">
                                <label>Chuyển sang trang đăng nhập</label>
                            </div>

                            <div class="form-swap-icon">
                                <a href="./login.php"><svg height="60" width="60">
                                    <polyline points="5 2, 5 55, 59 55"
                                        style="fill:white;stroke:rgb(53, 13, 161);stroke-width:6" />
                                    <polyline points="13 2, 13 26, 32 26, 32 5, 12 5"
                                        style="fill:white;stroke:rgb(53, 13, 161);stroke-width:6" />
                                    <polyline points="37 5, 59 5" style="fill:white;stroke:rgb(53, 13, 161);stroke-width:6" />
                                    <polyline points="37 26, 56 26, 56 16, 46 16"
                                        style="fill:white;stroke:rgb(53, 13, 161);stroke-width:6" />

                                    <polyline points="13 31, 13 51" style="fill:white;stroke:rgb(53, 13, 161);stroke-width:6" />
                                    <polyline points="21 51, 21 35, 56 47, 56 31"
                                        style="fill:white;stroke:rgb(53, 13, 161);stroke-width:6" />

                                    Sorry, your browser does not support inline SVG.
                                </svg></a>
                            </div>

                        </div> <!-- Close form-swap -->
                    </div> <!-- Close form-title -->

                    <div class="form-input">

                        <div class="form-input-icon" id="div-username">
                            <span>Họ và Tên</span>
                            <label><i class="fas fa-user"></i></label>
                            <input onblur="checkName()" type="text" name="username" id="username" placeholder="Nhập họ và tên.." />
                            <span class="form-input-err" style="color: red;" id="errName"></span>
                        </div> <!-- Close form-input-icon -->

                        <div class="form-input-icon" id="div-password">
                            <span>Mật Khẩu</span>
                            <label><i class="fas fa-lock"></i></label>
                            <input onblur="checkPassword()" type="password" name="password" id="pass" placeholder="Nhập mật khẩu của bạn.." />
                            <span class="form-input-err" style="color: red;" id="errPassword"></span>
                        </div> <!-- Close form-input-icon -->

                        <div class="form-input-icon" id="div-rePass">
                            <span>Nhập Lại Mật Khẩu</span>
                            <label><i class="fas fa-lock"></i></label>
                            <input onblur="checkRePassword()" type="password" name="rePassword" id="rePass"
                                placeholder="Nhập lại mật khẩu của bạn.." />
                            <span class="form-input-err" style="color: red;" id="errRePassword"></span>
                        </div> <!-- Close form-input-icon -->

                        <div class="form-input-icon form-input-sex">
                            <span>Giới Tính</span>
                            <div class="form-input-sex-div">
                                <input class="sex" type="radio" name="sex" value="Nam" /> Nam
                                <input class="sex" type="radio" name="sex" value="Nữ" /> Nữ
                                <input class="sex" type="radio" name="sex" value="Khác" checked="true" /> Khác
                            </div>
                        </div> <!-- Close form-input-icon -->

                        <div class="form-input-icon" id="div-image">
                            <span>Hình Đại Diện</span>
                            <label><i class="far fa-image"></i></label>
                            <input onblur="checkImage()" type="file" name="avatar" id="image" />
                            <span class="form-input-err" style="color: red;" id="errImage"></span>
                        </div> <!-- Close form-input-icon -->

                        <div class="form-input-icon" id="div-address">
                            <span>Địa Chỉ</span>
                            <label><i class="fas fa-map-marked-alt"></i></label>
                            <input onblur="checkAddress()" type="text" name="address" id="address" placeholder="Nhập địa chỉ.." />
                            <span class="form-input-err" style="color: red;" id="errAddress"></span>
                        </div> <!-- Close form-input-icon -->

                        <div class="form-input-icon" id="div-email">
                            <span>Email</span>
                            <label><i class="fas fa-envelope"></i></label>
                            <input onblur="checkEmail()" type="text" name="mail" id="mail" placeholder="Nhập địa chỉ email.." />
                            <span class="form-input-err" style="color: red;" id="errEmail"></span>
                        </div> <!-- Close form-input-icon -->

                        <div class="form-input-icon" id="div-phone">
                            <span>Số Điện Thoại</span>
                            <label><i class="fas fa-mobile-alt"></i></label>
                            <input type="text" name="phoneNumber" id="phone" onblur="showHint(this.value)"
                                placeholder="Nhập số điện thoại.." />
                            <span class="form-input-err" style="color: red;" id="errPhoneNumber"></span>
                        </div> <!-- Close form-input-icon -->

                    </div>

                    <div class="form-input-submit">
                        <input type="submit" name="submit" value="Đăng ký" />
                    </div> <!-- Close form-input-submit -->

                    <div class="form-signin-using">
                        <label>Hoặc đăng nhập bằng</label>

                        <div class="form-signin-using-icon">
                            <i class="fab fa-facebook-f" style="background-color: #3b5998;"></i>
                            <i class="fab fa-instagram" style="background: linear-gradient(to bottom right,
						rgb(93, 13, 99), rgb(216, 24, 168), rgb(255, 0, 111), rgb(255, 101, 30), yellow);"></i>
                            <i class="fab fa-twitter" style="background-color: #1da1f2;"></i>
                            <i class="fab fa-google" style="background-color: #ea4335;"></i>
                        </div>
                    </div> <!-- Close form-signin-using -->

                    <div class="form-signup">
                        <span>Đã có tài khoản !? Đăng nhập ngay !!</span>
                        <input type="button" value="Đăng nhập" />
                    </div> <!-- Close form-signup -->
                </form>
            </div> <!-- Close form-login -->
        </div>
        <!--Đóng div content-->
        <!-- <?php include 'footer.php';?> -->
    </div>
    <!--Đóng div wrap-->
</body>

</html>