<?php
session_start();
require 'checkSession.php';
require 'checkAdmin.php';
require 'connect.php';
if(isset($_POST["submit"])) {

	//Lấy thông tin về laptop

	$files = $_FILES['pictures'];
    $names = $files['name'];
    $tmp= $files['tmp_name'];
    $numItems = count($names);

    $id=$_SESSION["idlaptop"];

    for($i=0; $i<$numItems; $i++) {
        $path="../Pictures/hinhanh/".$names[$i];
        move_uploaded_file($tmp[$i],$path);
        $sqlImg="INSERT INTO hinhanh(idlaptop, hinhanh) VALUE ('$id','$names[$i]')";
        $con->query($sqlImg);
    }
    unset($_SESSION['idlaptop']);
    header('location: info.php?id='.$id.''); 
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
    <!--[if lte IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
	<![endif]-->
    <script>
        check = true;
        function addPictures() {
            checkImage();

            if (check == false) {
                alert("Thêm Không Thành Công.");
            }

            return check;
        }

        function checkImage() {
            if (document.getElementById("image").value == "") {  
                document.getElementById("errImage").innerHTML = "*Vui lòng chọn 1 ảnh";
                document.getElementById("div-image").style.borderBottom = "2px solid #de0303";
                document.getElementById("errImage").style.visibility = "visible";
                check = false;
            } else {
                document.getElementById("errImage").innerHTML = "";
                document.getElementById("div-image").style.borderBottom = "2px solid rgb(185, 185, 185)";
                document.getElementById("errImage").style.visibility = "hidden";
                check = true;
            }
        }

    </script>
</head>

<body
    style="background-image: url(../Pictures/taobao-background-2.jpg);background-size: cover;background-position: center;">
    <div id="wrap" class="body-form">
        <?php require 'menu.php';?>
        <div id="content" class="content-form-login" style="background-image: none; height: 600px;">
            <div class="form-signup-div" style="height: 400px;">
                <form method="post" name="myForm" enctype="multipart/form-data" action="../PHP/ad_Pictures.php"
                    onsubmit="return addPictures()">
                    <div class="form-title">
                        <div class="form-name">
                            <label>Thêm Hình Ảnh Mô Tả Laptop</label>
                        </div>

                    </div> <!-- Close form-title -->

                    <div class="form-input">

                        <div class="form-input-icon" id="div-image">
                            <span>Hình Đại Diện</span>
                            <label><i class="far fa-image"></i></label>
                            <input onblur="checkImage()" type="file" multiple="multiple" name="pictures[]" id="image" accept="image/*" />
                            <span class="form-input-err" style="color: red;" id="errImage"></span>
                        </div> <!-- Close form-input-icon -->


                    </div>

                    <div class="form-input-submit">
                        <input type="submit" name="submit" value="Thêm" />
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