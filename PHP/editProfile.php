<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
<?php
    session_start();
    require 'checkSession.php';
    require 'connect.php';
    $id=$_REQUEST['id'];
    if(isset($_POST['submit'])){
        
		$name=$_POST['username'];
			$sqlUser="UPDATE thanhvien SET tendangnhap='".$name."' WHERE id=$id";
			$con -> query($sqlUser);
		$sex=$_POST['sex'];
			$sqlSex="UPDATE thanhvien SET gioitinh='".$sex."' WHERE id=$id";
			$con -> query($sqlSex);
		$file_name=$_FILES['avatar']['name'];
		$file_path="../Pictures/avt/".$file_name;
			if($file_name!=""){
				move_uploaded_file($_FILES['avatar']['tmp_name'],$file_path);
				$sqlImage="UPDATE thanhvien SET hinhdaidien='$file_name' WHERE id=$id";
				$con -> query($sqlImage);
			}
		$address=$_POST['address'];
			$sqlAddress="UPDATE thanhvien SET diachi='".$address."' WHERE id=$id";
			$con -> query($sqlAddress);
		$phone=$_POST['phoneNumber'];
			$sqlPhone="UPDATE thanhvien SET sodienthoai='".$phone."' WHERE id=$id";
			$con -> query($sqlPhone);
		$email=$_POST['mail'];
			$sqlMail="UPDATE thanhvien SET email='".$email."' WHERE id=$id";
			$con -> query($sqlMail);
		
        $sqlLevel="SELECT * FROM thanhvien WHERE id=$_SESSION[id]";
        $resultLevel=$con->query($sqlLevel);
        if($resultLevel->num_rows>0) {
            while($rowLevel=$resultLevel->fetch_assoc()) {
                if($rowLevel["level"]==1) {
                    header('location: ad_user.php');
                }else {
                    header('location: profile.php');
                }
            }
        }
	}
?>

<body>
    <div id="wrap"
        style="background-image: url(../Pictures/taobao-background-3.jpg);background-size: cover;background-position: center;">
        <?php require 'menu.php'; ?>
        <div id="content" class="content-form-login" style="background-image: none; height: 1600px;">
            <div class="form-signup-div" style="height: 1200px">
                <form method="post" name="myForm" enctype="multipart/form-data"
                    <?php echo 'action="../PHP/editProfile.php?id='.$id.'"'; ?> onsubmit="return editProfile()">
                    <div class="form-title">
                        <div class="form-name">
                            <label>Chỉnh Sửa Thông Tin</label>
                        </div>

                        <div class="form-swap">
                            <div class="form-swap-signup">
                                <label>Quay lại Profile</label>
                            </div>

                            <div class="form-swap-icon">
                                <a href="./profile.php"><svg height="60" width="60">
                                        <polyline points="5 55, 5 5, 57 5, 57 30"
                                            style="fill:none;stroke:rgb(53, 13, 161);stroke-width:6" />
                                        <polyline points="60 30, 13 30, 13 12"
                                            style="fill:none;stroke:rgb(53, 13, 161);stroke-width:5" />
                                        <polyline points="10.5 12, 30 12, 30 19, 10.5 19"
                                            style="fill:none;stroke:rgb(53, 13, 161);stroke-width:4" />
                                        <polyline points="12 20, 32 25, 52 25"
                                            style="fill:none;stroke:rgb(53, 13, 161);stroke-width:3" />
                                        <polyline points="50 25, 50 12, 36 12, 36 25"
                                            style="fill:none;stroke:rgb(53, 13, 161);stroke-width:4" />
                                        <!-- Bottom -->
                                        <polyline points="2 57, 13 57, 13 36"
                                            style="fill:none;stroke:rgb(53, 13, 161);stroke-width:5" />
                                        <polyline points="13 44, 28 44"
                                            style="fill:none;stroke:rgb(53, 13, 161);stroke-width:5" />
                                        <polyline points="10.5 36, 32 36, 32 60"
                                            style="fill:none;stroke:rgb(53, 13, 161);stroke-width:4" />
                                        <polyline points="40 34, 40 57, 60 57"
                                            style="fill:none;stroke:rgb(53, 13, 161);stroke-width:4" />
                                        <polyline points="46 57, 46 36, 60 36"
                                            style="fill:none;stroke:rgb(53, 13, 161);stroke-width:4" />
                                        <polyline points="46 45, 60 45"
                                            style="fill:none;stroke:rgb(53, 13, 161);stroke-width:4" />

                                        Sorry, your browser does not support inline SVG.
                                    </svg></a>
                            </div>

                        </div> <!-- Close form-swap -->
                    </div> <!-- Close form-title -->

                    <div class="form-input">
                        <?php
                        $sqlUser="SELECT * FROM thanhvien WHERE id=$_REQUEST[id]";
                        $resultUser=$con->query($sqlUser);

                        if($resultUser->num_rows>0) {
                            while($rowUser=$resultUser->fetch_assoc()) {
                                echo '
                                <div class="form-input-icon" id="div-username">
                                    <span>Họ và Tên</span>
                                    <label><i class="fas fa-user"></i></label>
                                    <input type="text" name="username" id="username" value="'.$rowUser["tendangnhap"].'" placeholder="Nhập họ và tên.." />
                                    <span style="color: red;" id="errName"></span>
                                </div> <!-- Close form-input-icon -->

                                <div class="form-input-icon form-input-sex">
                                    <span>Giới Tính</span>
                                    <div class="form-input-sex-div">
                                        <input type="hidden" value="'.$rowUser["gioitinh"].'" id="sex" />
                                        <input class="sex" type="radio" name="sex" value="Nam" id="man" /> Nam
                                        <input class="sex" type="radio" name="sex" value="Nữ" id="woman" /> Nữ
                                        <input class="sex" type="radio" name="sex" value="Khác" id="other" /> Khác
                                    </div>
                                </div> <!-- Close form-input-icon -->

                                <div class="form-input-icon" id="div-image">
                                    <span>Hình Đại Diện</span>
                                    <label><i class="far fa-image"></i></label>
                                    <input type="file" name="avatar" id="image" />
                                    <span style="color: red;" id="errImage"></span>
                                </div> <!-- Close form-input-icon -->

                                <div class="form-input-icon" id="div-address">
                                    <span>Địa Chỉ</span>
                                    <label><i class="fas fa-map-marked-alt"></i></label>
                                    <input type="text" name="address" id="address" value="'.$rowUser["diachi"].'" placeholder="Nhập địa chỉ.." />
                                    <span style="color: red;" id="errAddress"></span>
                                </div> <!-- Close form-input-icon -->

                                <div class="form-input-icon" id="div-email">
                                    <span>Email</span>
                                    <label><i class="fas fa-envelope"></i></label>
                                    <input type="text" name="mail" id="mail" value="'.$rowUser["email"].'" placeholder="Nhập địa chỉ email.." />
                                    <span style="color: red;" id="errEmail"></span>
                                </div> <!-- Close form-input-icon -->

                                <div class="form-input-icon" id="div-phone">
                                    <span>Số Điện Thoại</span>
                                    <label><i class="fas fa-mobile-alt"></i></label>
                                    <input type="text" name="phoneNumber" id="phone" value="'.$rowUser["sodienthoai"].'" onblur="showHint(this.value)"
                                        placeholder="Nhập số điện thoại.." />
                                    <span style="color: red;" id="errPhoneNumber"></span>
                                </div> <!-- Close form-input-icon -->

                            </div>
                            ';
                            }
                        }
                    ?>


                        <div class="form-input-submit">
                            <input type="submit" name="submit" value="Lưu Lại" />
                        </div> <!-- Close form-input-submit -->

                        <div class="form-profile">
                            <span>Quay lại trang Profile</span>
                            <a href="profile.php"><input type="button" value="Profile" /></a>
                        </div> <!-- Close form-signup -->
                </form>
            </div> <!-- Close form-login -->
        </div>
        <!--Đóng div content-->
        <!-- <?php include 'footer.php';?> -->
    </div>
    <script>
    function check() {
        if (document.getElementById("sex").value == document.getElementById("man").value) {
            document.getElementById("man").checked = true;
        } else if (document.getElementById("sex").value == document.getElementById("woman").value) {
            document.getElementById("woman").checked = true;
        } else {
            document.getElementById("other").checked = true;
        }

    }
    window.onload(check());
    </script>
</body>

</html>