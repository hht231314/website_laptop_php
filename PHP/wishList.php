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
<?php
    session_start();
    require 'checkSession.php';
    require 'connect.php';
?>
<body>
    <div id="wrap">
        <?php
            require 'menu.php';
        ?>
        <div id="content" class="user-wish-list-content">
            <?php
                $sqlList = "SELECT * FROM yeuthich, laptop, thuonghieu WHERE
                yeuthich.idthanhvien=".$_SESSION["id"]." AND yeuthich.idlaptop=laptop.idlaptop AND
                laptop.thuonghieu=thuonghieu.idthuonghieu;";
                $resultList=$con->query($sqlList);
                if($resultList->num_rows>0) {
                    while($rowList=$resultList->fetch_assoc()) {
                        echo '
                            <div class="user-wish-list">
                                <img src="../Pictures/hinhanh/'.$rowList["hinhdaidien"].'" />
                                <a href="../PHP/info.php?id='.$rowList["idlaptop"].'">'.$rowList["tenlaptop"].'</a>
                                <label>'.$rowList["thuonghieu"].'</label>';
                        
                        $sqlSale="SELECT * FROM giam WHERE idlaptop=$rowList[idlaptop]";
                        $resultSale=$con->query($sqlSale);
                        
                        if($resultSale->num_rows>0){
                            while($rowSale=$resultSale->fetch_assoc()){
                                echo '
                                    <div class="user-wish-list-price">
                                        <label>'.$rowSale["giagiam"].'đ</label>
                                        <label style="color: red; text-decoration-line: line-through; font-size: 14px;">'.$rowList["gialaptop"].'đ</label>
                                    </div>
                                    <div class="user-wish-list-icon">
                                        <a href="deleteWishList.php?idlaptop='.$rowList["id"].'"><i class="fas fa-trash"></i></a>
                                        <a href="buy.php?idlaptop='.$rowList["idlaptop"].'"><i class="fas fa-cart-plus"></i></a>
                                    </div>
                                    </div>
                                ';
                            }
                        }else {
                            echo '
                                <div class="user-wish-list-price"><label>'.$rowList["gialaptop"].'đ</label></div>
                                <div class="user-wish-list-icon">
                                    <a href="deleteWishList.php?idlaptop='.$rowList["id"].'"><i class="fas fa-trash"></i></a>
                                    <a href="buy.php?idlaptop='.$rowList["idlaptop"].'"><i class="fas fa-cart-plus"></i></a>
                                </div>  
                                </div>
                            ';
                        }
                    }
                }
            ?>
        </div>
        <?php require 'footer.php'; ?>
    </div>
</body>
</html>