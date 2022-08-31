<?php
session_start();

if(isset($_SESSION["id"])){
	header('location: profile.php');
}

if(isset($_POST["submit"])){
	//Lấy thông tin về
	$phone = $_POST['phoneNumber'];
	$password = md5($_POST['password']);

	//Tạo kết nối
	require 'connect.php';

	//Thực hiện truy vấn
	$sql="SELECT * FROM thanhvien WHERE sodienthoai='".$phone."' and matkhau='".$password."'";
	$result=$con -> query($sql);

	if($result->num_rows >0) {
		if($row = $result->fetch_assoc()) {
			$_SESSION["id"]=$row["id"];
			header('location: profile.php');
		}
	}else {
		echo '<script type="text/javascript">
				window.onload = function(){
					alert("Bạn đã nhập sai số điện thoại hoặc password");
					}
			</script>';
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
    <script src="../JAVASCRIPT/login.js"></script>
    <!--[if lte IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
	<![endif]-->
</head>

<body>
    <div id="wrap" class="body-form">
        <?php require 'menu.php';?>
        <div id="content" class="content-form-login">
            <div class="form-login">
                <form method="post" name="myForm" enctype="multipart/form-data" action="login.php"
                    onsubmit="return login()">
                    <div class="form-title">
                        <div class="form-name">
                            <label>Đăng Nhập</label>
                        </div>

                        <div class="form-swap">
                            <div class="form-swap-signup">
                                <label>Chưa có tài khoản !? Đăng ký</label>
                            </div>

                            <div class="form-swap-icon">
                                <a href="./signup.php"><svg height="60" width="60">
                                        <polyline points="57 5, 5 5, 5 30, 55 30, 55 55, 3 55"
                                            style="fill:white;stroke:rgb(53, 13, 161);stroke-width:6" />
                                        <polyline points="11 9, 11 26"
                                            style="fill:white;stroke:rgb(53, 13, 161);stroke-width:4" />

                                        <polyline points="31 11, 15 11"
                                            style="fill:white;stroke:rgb(53, 13, 161);stroke-width:4" />

                                        <polyline points="15 24, 29.5 24, 29.5 18, 22 18"
                                            style="fill:white;stroke:rgb(53, 13, 161);stroke-width:4" />

                                        <polyline points="37 26, 37 13.5, 54 21.5, 54 9"
                                            style="fill:white;stroke:rgb(53, 13, 161);stroke-width:6" />

                                        <polyline points="6 35, 6 48, 29 48, 29 35"
                                            style="fill:white;stroke:rgb(53, 13, 161);stroke-width:6" />

                                        <polyline points="33 37, 49 37, 49 45, 35 45, 35 51"
                                            style="fill:white;stroke:rgb(53, 13, 161);stroke-width:4" />

                                        Sorry, your browser does not support inline SVG.
                                    </svg></a>
                            </div>

                        </div> <!-- Close form-swap -->
                    </div> <!-- Close form-title -->

                    <div class="form-input" style="height: 260px;">
                        <div class="form-input-icon" id="div-phone">
                            <span>Số Điện Thoại</span>
                            <label><i class="fas fa-mobile-alt"></i></label>
                            <input onblur="checkPhone()" type="text" name="phoneNumber" id="phone" placeholder="Nhập số điện thoại.." />
                            <span style="color: red;" class="form-input-err" id="errPhoneNumber"></span>
                        </div> <!-- Close form-input-icon -->

                        <div class="form-input-icon" id="div-password">
                            <span>Mật Khẩu</span>
                            <label><i class="fas fa-lock"></i></label>
                            <input onblur="checkPassword()" type="password" name="password" id="pass" placeholder="Nhập mật khẩu của bạn.." />
                            <span style="color: red;" class="form-input-err" id="errPassword"></span>
                        </div> <!-- Close form-input-icon -->

                        <div class="form-forgot-password">
                            <label>Quên mật khẩu !?</label>
                        </div> <!-- Close form-forgot-password -->

                    </div>

                    <div class="form-input-submit">
                        <input type="submit" name="submit" value="Đăng Nhập" />
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
                        <span>Chưa có tài khoản !? Đăng ký ngay !!</span>
                        <a href="signup.php"><input type="button" value="Đăng ký" /></a>
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