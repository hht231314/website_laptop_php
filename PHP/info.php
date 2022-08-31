<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/styles.css" media="screen" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!--[if lte IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
	<![endif]-->
    <?php session_start();?>
    <style>
    </style>
</head>
<body>
    <div id="wrap">
        <?php require 'menu.php'; ?>
        <div id="content">
            <div class="content-img-conf">
        <?php
            $laptopName="";
            $trangthai=2;
            $price=0;
            $id = $_REQUEST["id"];
            $sqlLaptop="SELECT * FROM laptop WHERE idlaptop=$id";
            $resultLaptop=$con->query($sqlLaptop);

            $sqlImg="SELECT * FROM hinhanh WHERE idlaptop=$id";
            $resultImg=$con->query($sqlImg);

            $sqlInfo="SELECT * FROM cauhinh WHERE idlaptop=$id";
            $resultInfo=$con->query($sqlInfo);
            echo '<div class="showImg">';
            if($resultLaptop->num_rows>0){
                while($rowLaptop=$resultLaptop->fetch_assoc()){
                    $laptopName=$rowLaptop["tenlaptop"];
                    $trangthai=$rowLaptop["trangthailt"];
                    $price=$rowLaptop["gialaptop"];
                    $sqlCount="SELECT * FROM hinhanh WHERE idlaptop=$id";
                    $resultCount=$con->query($sqlCount);
                    $num=1;
                    if($resultCount->num_rows>0){
                        while($rowCount=$resultCount->fetch_assoc()){
                            $num=count($rowCount)+1;
                        }
                    }

                    echo '
                        <div class="container">
                        <div class="mySlides">
                            <div class="numbertext">1 / '.$num.'</div>
                            <img src="../Pictures/hinhanh/'.$rowLaptop['hinhdaidien'].'" style="width:70%;">
                        </div>';
                    
                    if($resultImg->num_rows>0){
                        $count=1;
                        while($rowImg=$resultImg->fetch_assoc()){
                            $count=$count+1;
                            echo '
                                <div class="mySlides">
                                    <div class="numbertext">'.$count.' / '.$num.'</div>
                                    <img src="../Pictures/hinhanh/'.$rowImg['hinhanh'].'" style="width:70%">
                                </div>
                            ';
                        }
                    }

                        echo '
                            <a class="prev" onclick="plusSlides(-1)">❮</a>
                            <a class="next" onclick="plusSlides(1)">❯</a>
                            
                            <div class="caption-container">
                                <p id="caption"></p>
                            </div>
                            
                            <div class="row">
                                <div class="column">
                                    <img class="demo cursor" src="../Pictures/hinhanh/'.$rowLaptop['hinhdaidien'].'" style="width:100%" onclick="currentSlide(1)" alt="'.$rowLaptop['tenlaptop'].'">
                                </div>
                            ';
                            $sqlImg1="SELECT * FROM hinhanh WHERE idlaptop=$id";
                            $resultImg1=$con->query($sqlImg1);

                            if($resultImg1->num_rows>0){
                                $count=1;
                                while($rowImg1=$resultImg1->fetch_assoc()){
                                    $count=$count+1;
                                    echo '
                                        <div class="column">
                                            <img class="demo cursor" src="../Pictures/hinhanh/'.$rowImg1['hinhanh'].'" style="width:100%" onclick="currentSlide('.$count.')" alt="'.$rowLaptop['tenlaptop'].'">
                                        </div>
                                    ';
                                }
                            }
                            
                        echo '</div>
                            </div>';
                        if($trangthai==1) {
                            echo '
                                <div class="btn">
                                    <form>
                                        <a href="buy.php?idlaptop='.$id.'"><input class="addcart-btn" type="button" value="Thêm Vào Giỏ Hàng" /></a>
                                        <a href="yeuthich.php?idlaptop='.$id.'"><input class="wishlist-btn" type="button" value="Thêm Vào Yêu Thích" /></a>
                                    </form>
                                </div></div>
                            ';
                        }else {
                            echo '
                                <div class="btn" style="display: none;">
                                    <form>
                                        <a href="#"><input class="addcart-btn" type="button" value="Thêm Vào Giỏ Hàng" /></a>
                                        <a href="#"><input class="wishlist-btn" type="button" value="Thêm Vào Yêu Thích" /></a>
                                    </form>
                                </div></div>
                            ';
                        }    
                }
            }

            echo '
                <div class="info-laptop">
                    <p>Thông Tin Cấu Hình Máy Chi Tiết '.$laptopName.'</p>';
            if($trangthai==1) {
                echo '<span class="trangthai" style="background-color: rgb(0, 255, 47);" >Còn Hàng</span>';
            } else {
                echo '<span class="trangthai" style="background-color: rgb(255, 0, 0);">Hết Hàng</span>';
            }
            $sqlSale="SELECT * FROM giam WHERE idlaptop=$id";
            $resultSale=$con->query($sqlSale);
            if($resultSale->num_rows>0){
                while($rowSale=$resultSale->fetch_assoc()){
                    echo '<span class="price-laptop-info" style="color: red;">'.$rowSale['giagiam'].' VND</span>
                        <span class="price-laptop-info" style="text-decoration-line: line-through; font-size:14px; margin-left: 10px;">'.$price.' VND</span>';
                }
            }else {
                echo '<span class="price-laptop-info" style="color: red;">'.$price.' VND</span>';
            }        
            echo '<div class="info-laptop-row">';
            if($resultInfo->num_rows>0) {
                while($rowInfo=$resultInfo->fetch_assoc()) {
                    echo '
                        <ul>
                            <li class="info-laptop-row-1"><p>CPU: </p><span>'.$rowInfo['cpu'].'</span></li>
                            <li class="info-laptop-row-2"><p>Ram: </p><span>'.$rowInfo['ram'].'</span></li>
                            <li class="info-laptop-row-1"><p>Ổ Cứng: </p><span>'.$rowInfo['ocung'].'</span></li>
                            <li class="info-laptop-row-2"><p>Màn Hình: </p><span>'.$rowInfo['manhinh'].'</span></li>
                            <li class="info-laptop-row-1"><p>Card Màn Hình: </p><span>'.$rowInfo['cardmanhinh'].'</span></li>
                            <li class="info-laptop-row-2"><p>Cổng Kết Nối: </p><span>'.$rowInfo['congketnoi'].'</span></li>
                            <li class="info-laptop-row-1"><p>Hệ Điều Hành: </p><span>'.$rowInfo['hedieuhanh'].'</span></li>
                            <li class="info-laptop-row-2"><p>Thiết Kế: </p><span>'.$rowInfo['thietke'].'</span></li>
                            <li class="info-laptop-row-1"><p>Kích Thước: </p><span>'.$rowInfo['kichthuoc'].'</span></li>
                            <li class="info-laptop-row-2"><p>Thời Điểm: </p><span>'.$rowInfo['thoidiem'].'</span></li>
                        </ul>
                    ';
                }
            }

            echo '</div>
                </div>
                </div>
            ';

            
        ?>
        </div>
        <?php require 'footer.php'; ?>
    </div>
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);
                    
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }
                    
        function currentSlide(n) {
        showSlides(slideIndex = n);
        }
                    
        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("demo");
            let captionText = document.getElementById("caption");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            captionText.innerHTML = dots[slideIndex-1].alt;
        }
    </script>
</body>
</html>