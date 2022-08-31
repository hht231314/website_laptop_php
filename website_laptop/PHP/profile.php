<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/styles.css" media="screen" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!--[if lte IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
	<![endif]-->
</head>
<?php
    session_start();
    require 'checkSession.php'
?>

<body>
    <div id="wrap">
        <?php require 'menu.php';?>

        <div id="content">
            <?php
                require 'connect.php';

                $sqlUser="SELECT * FROM thanhvien WHERE id=$_SESSION[id]";
                $resultUser=$con->query($sqlUser);

                if($resultUser->num_rows>0) {
                    while($rowUser=$resultUser->fetch_assoc()) {
                        echo '
                            <div class="show-info">
                                <div class="show-info-avartar">
                                    <img src="../Pictures/avt/'.$rowUser["hinhdaidien"].'" />
                                    <div><span>'.$rowUser["tendangnhap"].'</span>
                                    <a href="editProfile.php?id='.$rowUser["id"].'"><i class="fas fa-user-edit"></i></a></div>
                                </div>
                                <div class="show-info-user">
                                    <span>Giới Tính: '.$rowUser["gioitinh"].'</span>
                                    <span>Địa Chỉ: '.$rowUser["diachi"].'</span>
                                    <span>Số Điện Thoại: '.$rowUser["sodienthoai"].'</span>
                                    <span>Email: '.$rowUser["email"].'</span>
                                </div>
                            </div>
                        ';
                    }
                }

            ?>
        </div>
    </div>
</body>

</html>