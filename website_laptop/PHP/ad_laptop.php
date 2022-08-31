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
            <?php
                if(isset($_POST["submit"])) {
                    $stt=$_POST['status'];
                    $id=$_REQUEST["id"];
                    $sqlStatus="UPDATE laptop SET trangthailt=$stt WHERE idlaptop=$id";
                    $con->query($sqlStatus);
                    header('location: ad_laptop.php');
                }

                if(isset($_POST["sale"])) {
                    $price=$_POST['price'];
                    $id=$_REQUEST["id"];
                    $sqlCheck="SELECT * FROM giam WHERE idlaptop=$id";
                    $resultCheck=$con->query($sqlCheck);

                    if($resultCheck->num_rows>0) {
                        $sqlPrice="UPDATE giam SET giagiam=$price WHERE idlaptop=$id";
                    }else {
                        $sqlPrice="INSERT INTO giam(idlaptop, giagiam) VALUE ('$id', '$price')";
                    }
                    $con->query($sqlPrice);
                    header('location: ad_laptop.php');
                }

                $sqlUser="SELECT * FROM laptop, thuonghieu, trangthailaptop
                WHERE laptop.trangthailt =trangthailaptop.idtrangthailt
                AND laptop.thuonghieu=thuonghieu.idthuonghieu;";
                $resultUser=$con->query($sqlUser);
                echo '<div class="ad-showLaptop-1">
                        <div class="ad-addLaptop">
                            <a href="ad_addLaptop.php"><i class="far fa-plus-square"></i></a>
                            <span>Thêm Laptop</span>
                        </div>
                        <div class="ad-showLaptop-2">
                    
                ';
                if($resultUser->num_rows>0) {
                    while($rowUser=$resultUser->fetch_assoc()) {
                        echo '
                            
                                <div class="ad-showLaptop-1-row">
                                    <img src="../Pictures/hinhanh/'.$rowUser["hinhdaidien"].'" />
                                    <div class="ad-showLaptop-1-row-a"><a href="info.php?id='.$rowUser["idlaptop"].'">'.$rowUser["tenlaptop"].'</a></div>
                                    <label>'.$rowUser["thuonghieu"].'</label>
                                    <label>'.$rowUser["trangthailt"].'</label>
                                    <label>'.$rowUser["gialaptop"].'đ</label>';
                        $sqlSale="SELECT * FROM giam WHERE idlaptop=$rowUser[idlaptop]";
                        $resultSale=$con->query($sqlSale);
                        if($rowSale=$resultSale->num_rows>0) {
                            while($rowSale=$resultSale->fetch_assoc()) {
                                echo '<label>'.$rowSale["giagiam"].'đ</label>';
                            }
                        }else {
                            echo '<label></label>';
                        }
                        echo '
                                <div class="action">
                                    <form method="post" action="../PHP/ad_laptop.php?id='.$rowUser["idlaptop"].'">
                                        <select name="status">
                                            <option value="1">Còn Hàng</option>
                                            <option value="2">Hết Hàng</option>
                                        </select>
                                        <input type="submit" name="submit" value="Lưu" />
                                    </form>
                                    <div class="action-sale">
                                        <form method="post" action="../PHP/ad_laptop.php?id='.$rowUser["idlaptop"].'">
                                            <input type="number" name="price" placeholder="Nhập giá giảm.." />
                                            <input class="action-sale-submit" type="submit" name="sale" value="Lưu" style="width: 50px; border: 0px;" />
                                        </form>
                                    </div>
                                    <div class="action-icon">
                                        <a href="ad_editLaptop.php?id='.$rowUser["idlaptop"].'"><i class="fas fa-pen"></i></a>
                                        <a href="ad_removeLaptop.php?id='.$rowUser["idlaptop"].'"><i class="fas fa-trash"></i></a>
                                    </div>
                                </div>
                                </div>
                        ';
                    }
                }
            ?>
            </div>
        </div>
    </div>
    <?php require 'footer.php' ?>
    </div>
</body>

</html>