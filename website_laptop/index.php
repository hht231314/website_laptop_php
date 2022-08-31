<!DOCTYPE html>
<?php
session_start();
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./CSS/styles.css" media="screen" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!--[if lte IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
	<![endif]-->
</head>

<body>
    <div id="wrap">
        <?php 
		require './PHP/menu.php';
	?>
        <div id="content" style="padding-top:5px">
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <div class="numbertext">1 / 4</div>
                    <img src="./Pictures/1200x675hphe.png" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 4</div>
                    <img src="./Pictures/0331-laptophp-tin-tuc.jpg" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 4</div>
                    <img src="./Pictures/laptop_800x450.jpg" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">4 / 4</div>
                    <img src="./Pictures/lapfdgsef.png" style="width:100%">
                </div>

            </div>
            <br>

            <div style="text-align:center">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
            <div class="brand">
                <?php
			require './PHP/connect.php';

			$sqlShowBrand = "SELECT * FROM thuonghieu";
			$resultShowBrand = $con->query($sqlShowBrand);
			if($resultShowBrand->num_rows>0) {
				while($rowShowBrand=$resultShowBrand->fetch_assoc()) {
					$sqlShowLaptop = "SELECT * FROM laptop WHERE thuonghieu='".$rowShowBrand['idthuonghieu']."' ORDER BY idlaptop DESC LIMIT 5";
					$resultShowLaptop = $con->query($sqlShowLaptop);
					echo '<div class="brandProduct">
							<h1 class="brandProduct-title"> Mới Về Trong '.$rowShowBrand['thuonghieu'].'</h1>
							<div class="brandProduct-laptop">
					';
					
					if($resultShowLaptop->num_rows>0) {
						while($rowShowLaptop=$resultShowLaptop->fetch_assoc()) {							
							$sqlSale= "SELECT giagiam FROM giam WHERE idlaptop='".$rowShowLaptop['idlaptop']."'";
							$resultSale = $con->query($sqlSale);
							
							if($resultSale->num_rows>0) {
								while($rowSale=$resultSale->fetch_assoc()) {
									echo '
										<a href="../PHP/info.php?id='.$rowShowLaptop['idlaptop'].'">
											<div class="showBrandProduct">
												<img src="./Pictures/hinhanh/'.$rowShowLaptop['hinhdaidien'].'"/><br>
												<h3>'.$rowShowLaptop['tenlaptop'].'</h3>
												
												<div class="price">
													<strong>'.$rowSale['giagiam'].'đ</strong>
													<span>'.$rowShowLaptop['gialaptop'].'đ</span>
												</div>
											</div>
										</a>
									';
								}
							}else {
								echo '
									<a href="../PHP/info.php?id='.$rowShowLaptop['idlaptop'].'">
										<div class="showBrandProduct">
											<img src="./Pictures/hinhanh/'.$rowShowLaptop['hinhdaidien'].'"/><br>
											<h3>'.$rowShowLaptop['tenlaptop'].'</h3>
											
											<div class="price">
												<strong>'.$rowShowLaptop['gialaptop'].'đ</strong>
												<span></span>
											</div>
										</div>
									</a>
								';
							}
							
						}
					}
					echo '</div>
						</div>';
				}
			}
		?>
            </div>

            <div class="nb">

                <a href="#">
                    <div class="nb-col" style="background-color: #e94545;">
                        <img src="" />
                        <span>Gaming</span>
                    </div>
                </a>


                <a href="#">
                    <div class="nb-col" style="background-color: #e98145;">
                        <img src="" />
                        <span>Thiết kế</span>
                    </div>
                </a>

                <a href="#">
                    <div class="nb-col" style="background-color: #45e99f;">
                        <img src="" />
                        <span>Học Sinh, Sinh Viên</span>
                    </div>
                </a>

                <a href="#">
                    <div class="nb-col" style="background-color: #458ce9;">
                        <img src="" />
                        <span>Giá rẻ bất ngờ</span>
                    </div>
                </a>
            </div> <!-- Close noibat div -->

            <div class="footer">
                <div class="footer-col">
                    <ul class="f-listmenu">
                        <a href="#">
                            <li>Tìm hiểu về mua trả góp</li>
                        </a>
                        <a href="#">
                            <li>Chính sách đổi trả</li>
                        </a>
                        <a href="#">
                            <li>Giao hàng & Thanh toán</li>
                        </a>
                        <a href="#">
                            <li>Hướng dẫn mua Online</li>
                        </a>
                    </ul>

                    <ul class="f-listmenu">
                        <a href="#">
                            <li>Giới thiệu công ty</li>
                        </a>
                        <a href="#">
                            <li>Tuyển dụng</li>
                        </a>
                        <a href="#">
                            <li>Cửa Hàng & Chi Nhánh</li>
                        </a>
                        <a href="#">
                            <li>Nội quy cửa hàng</li>
                        </a>
                    </ul>

                    <ul class="f-listmenu">
                        <li>Tổng đài hỗ trợ</li>
                        <li>Gọi mua: 1800.xxxx </li>
                        <li>Kỹ thuật: 1800.xxxx </li>
                        <li>Khiếu nại: 1800.xxxx </li>
                        <li>Bảo hành: 1800.xxxx </li>
                    </ul>
                </div>

                <div class="copyright">
                    <p>© 1999. Công ty cổ phần Laptop H&T. GPDKKD: 0xxxxxxxxx do sở KH & ĐT
                        TP.HCM cấp ngày 03/05/2004. GPMXH: 238/GP-BTTTT do Bộ Thông Tin và Truyền Thông cấp
                        ngày 04/06/2020.<br>
                        Địa chỉ: xxx Quang Trung, P. Tân Định, Q.1, TP.Hồ Chí Minh. Điện thoại: 0xx xxxxxxxx.
                        Email: cskh@laptopht.com. Chịu trách nhiệm nội dung: Nguyễn Văn A. Xem chính sách sử dụng
                        ở đâu đó trong trang Web này.
                    </p>

                </div>
            </div>
        </div> <!-- Close div content -->
        <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
        </script>

    </div> <!-- Close div wrap -->
</body>

</html>