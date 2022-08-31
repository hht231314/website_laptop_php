<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/styles.css" media="screen" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<!--[if lte IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
	<![endif]-->
    <?php session_start();?>
</head>
<body>
    <div id="wrap">
        <?php require 'menu.php'; ?>
        <div id="content">
            <div class="showlaptop">
                <?php
                    $brand = $_REQUEST["brand"];
                    require 'connect.php';

                    $sqlLaptop = "SELECT * FROM laptop WHERE thuonghieu=$brand";
                    $resultLaptop=$con->query($sqlLaptop);

                    if($resultLaptop->num_rows>0) {
                        while($rowLaptop=$resultLaptop->fetch_assoc()){
                            echo '
                                <a href="./info.php?id='.$rowLaptop["idlaptop"].'" class="showlaptop-a">
                                <div class="showlaptop-div" data-aos="fade-up" data-aos-duration="1000">
                                        <img src="../Pictures/hinhanh/'.$rowLaptop["hinhdaidien"].'" />
                                        <h3>'.$rowLaptop["tenlaptop"].'</h3>
                                        
                                        <div class="price">';
                            $sqlSale= "SELECT * FROM giam WHERE idlaptop='".$rowLaptop['idlaptop']."'";
                            $resultSale=$con->query($sqlSale);
                            if($resultSale->num_rows>0) {
                                while($rowSale=$resultSale->fetch_assoc()) {
                                    echo '<strong>'.$rowSale["giagiam"].' VND</strong>
                                        <span>'.$rowLaptop["gialaptop"].' VND</span>
                                        </div>
                                    ';
                                }
                            }else {
                                echo '<strong>'.$rowLaptop["gialaptop"].' VND</strong>
                                    <span></span>
                                    </div>';
                            }

                            $sqlInfo="SELECT * FROM cauhinh WHERE idlaptop='".$rowLaptop['idlaptop']."' ";
                            $resultInfo=$con->query($sqlInfo);
                            if($resultInfo->num_rows>0){
                                while($rowInfo=$resultInfo->fetch_assoc()){
                                    echo '
                                        <div class="info-laptop-lt">
                                            <span>Màn hình: '.$rowInfo['manhinh'].'</span>
                                            <span>CPU: '.$rowInfo['cpu'].'</span>
                                            <span>Đồ họa: '.$rowInfo['cardmanhinh'].'</span>
                                            <span>Hệ điều hành: '.$rowInfo['hedieuhanh'].'</span>
                                        </div>
                                        </div>
                                        </a>
                                        ';
                                        }
                                    }
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>