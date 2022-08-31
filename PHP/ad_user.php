<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/styles.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../CSS/adminStyles.css" media="screen" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!--[if lte IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
	<![endif]-->
</head>
<?php
    session_start();
    require 'checkSession.php';
    require 'checkAdmin.php';
    require 'connect.php';
?>

<body>
    <div id="wrap">
        <?php require 'menu.php'; ?>
        <div id="content">
            <div class="ad-showUser">
                <div class="ad-addUser">
                    <a href="signup.php"><i class="far fa-plus-square"></i></a>
                    <span>Thêm User</span>
                </div>
                <div class="ad-showUser-row-1">
                
                    <?php
                        $sqlUser="SELECT * FROM thanhvien";
                        $resultUser=$con->query($sqlUser);

                        if(isset($_POST["submit"])) {
                            $id=$_REQUEST["id"];
                            $sql="SELECT * FROM thanhvien WHERE id=$id";
                            $result=$con->query($sql);
                            $lv=0;
                            if($result->num_rows>0) {
                                while($row=$result->fetch_assoc()) {
                                    if($row["level"]==1) {
                                        $sqlLevel="UPDATE thanhvien SET level=$lv WHERE id=$id";
                                    } else {
                                        $lv=1;
                                        $sqlLevel="UPDATE thanhvien SET level=$lv WHERE id=$id";
                                    }
                                    $con -> query($sqlLevel);
                                    header('location: ad_user.php');
                                }
                            }
                        }

                        if($resultUser->num_rows>0) {
                            while($rowUser=$resultUser->fetch_assoc()) {
                                $id=$rowUser['id'];
                                if($rowUser["level"]==1) {
                                    $level="Quản Trị Viên";
                                    $swapLevel="Set User";


                                }else {
                                    $level="Người Dùng";
                                    $swapLevel="Set Admin";
                                }
                                
                                echo '<div class="ad-showUser-row-2">
                                    <div class="ad-showUser-row-2-img"><img src="../Pictures/avt/'.$rowUser["hinhdaidien"].'" /></div>
                                    <label class="ad-showUser-row-2-label-1">'.$rowUser["tendangnhap"].'</label>
                                    <label class="ad-showUser-row-2-label-1">'.$level.'</label>
                                    <label class="ad-showUser-row-2-label-1">'.$rowUser["gioitinh"].'</label>
                                    <label class="ad-showUser-row-2-label-2">'.$rowUser["diachi"].'</label>
                                    <label class="ad-showUser-row-2-label-1">'.$rowUser["sodienthoai"].'</label>
                                    <label class="ad-showUser-row-2-label-2">'.$rowUser["email"].'</label>

                                    <div class="action-user">
                                        <form method="post" action="../PHP/ad_user.php?id='.$rowUser["id"].'">
                                            <input type="submit" name="submit" value="'.$swapLevel.'" />
                                        </form>    
                                        <div class="action-user-icon">
                                            <a href="editProfile.php?id='.$rowUser["id"].'"><i class="fas fa-pen"></i></a>
                                            <a href="ad_removeAcount.php?id='.$rowUser["id"].'"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </div></div>
                                ';
                            }
                        }
                    ?>
                </div>

            </div>
        </div>
    </div>
</body>

</html>