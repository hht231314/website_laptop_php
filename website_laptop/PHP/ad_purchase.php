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
    <script>
    function showSelect(madonhang) {
        var idSelect = "select-" + madonhang;
        document.getElementById(idSelect).style.display = "flex";
        var idCloseEdit = "close-edit-" + madonhang;
        document.getElementById(idCloseEdit).style.display = "flex";
        var idOpenEdit = "open-edit-" + madonhang;
        document.getElementById(idOpenEdit).style.display = "none";

    }

    function closeEdit(madonhang) {
        var idSelect = "select-" + madonhang;
        document.getElementById(idSelect).style.display = "none";
        var idCloseEdit = "close-edit-" + madonhang;
        document.getElementById(idCloseEdit).style.display = "none";
        var idOpenEdit = "open-edit-" + madonhang;
        document.getElementById(idOpenEdit).style.display = "flex";

    }
    </script>
</head>
<?php
    session_start();
    require 'checkSession.php';
    require 'checkAdmin.php';
    require 'connect.php';

    if(isset($_POST["submit"])) {
        $stt=$_POST['status'];
        $id=$_REQUEST["id"];
        $sqlStatus="UPDATE donhang SET trangthaidh=$stt WHERE madonhang=$id";
        $con->query($sqlStatus);
        header('location: ad_purchase.php');
    }
?>

<body>
    <div id="wrap" class="ad_purchase">
        <?php require 'menu.php'; ?>
        <div id="content">
        <?php
        $sqlId="SELECT donhang.madonhang, donhang.ngaydathang, trangthaidonhang.trangthaidh,
        thanhvien.tendangnhap, thanhvien.gioitinh, thanhvien.diachi,
        thanhvien.sodienthoai, thanhvien.email
        FROM donhang, trangthaidonhang, thanhvien
        WHERE donhang.trangthaidh=trangthaidonhang.idtrangthaidh
        AND donhang.idthanhvien=thanhvien.id GROUP BY donhang.madonhang
        ORDER BY donhang.trangthaidh, donhang.madonhang ASC";

        $resultId=$con->query($sqlId);

        echo '<div class="ad-showPurchase">';

        if($resultId->num_rows>0) {
            while($rowId=$resultId->fetch_assoc()) {
                echo '
                    <div class="ad-showPurchase-row">
                        <div class="ad-shipping-info">
                            <div class="ad-shipping-info-title">
                                <i class="fas fa-shipping-fast"></i>
                                <span>Th??ng Tin V???n Chuy???n:</span>
                            </div>
                            <div class="ad-shiping-info-div">
                                <div class="ad-shipping-info-status">
                                    <i class="fas fa-circle"></i>
                                    <span>'.$rowId["trangthaidh"].'</span>
                                </div>
                                <div class="ad-shipping-info-edit">
                                    <div class="ad-shipping-info-select" id="select-'.$rowId["madonhang"].'">
                                        <form method="post" action="ad_purchase.php?id='.$rowId["madonhang"].'">
                                            <select name="status">
                                                <option value="1">??ang x??? l??</option>
                                                <option value="2">???? ????ng g??i ????n h??ng</option>
                                                <option value="3">??ang giao h??ng</option>
                                                <option value="4">???? Giao H??ng</option>
                                            </select>
                                            <input type="submit" name="submit" value="L??u" />
                                        </form>
                                    </div>
                                    <i id="open-edit-'.$rowId["madonhang"].'" class="fas fa-edit" onclick="showSelect('.$rowId["madonhang"].')"></i>
                                    <i id="close-edit-'.$rowId["madonhang"].'" class="fas fa-sign-out-alt" onclick="closeEdit('.$rowId["madonhang"].')" style="display:none;"></i>
                                </div>
                            </div> 
                        </div>

                        <div class="ad-user-info">
                            <div class="ad-user-info-title">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Th??ng Tin Kh??ch H??ng:</span>
                            </div>
                            <div class="ad-user-info-address">
                                <span>H??? & T??n: '.$rowId["tendangnhap"].'</span>
                                <span>Gi???i t??nh: '.$rowId["gioitinh"].'</span>
                                <span>S??? ??i???n Tho???i: '.$rowId["sodienthoai"].'</span>
                                <span>Email: '.$rowId["email"].'</span>
                                <span>?????a Ch???: '.$rowId["diachi"].'</span>
                            </div>
                        </div>
                        <div class="ad-laptop-info">
                            <div class="ad-laptop-info-code-time">
                                <span><b>M?? ????n H??ng: </b>#'.$rowId["madonhang"].'</span>
                                <span><b>Th???i Gian ?????t H??ng: </b>'.$rowId["ngaydathang"].'</span>
                            </div>        
                ';
                
                $sqlPurchase="SELECT donhang.STT, laptop.idlaptop, laptop.tenlaptop,
                laptop.hinhdaidien AS imgLaptop, donhang.madonhang, donhang.soluong,
                donhang.thanhtien, donhang.ngaydathang, thuonghieu.thuonghieu
                FROM donhang, laptop, thanhvien, thuonghieu
                WHERE madonhang=$rowId[madonhang]
                AND donhang.idlaptop=laptop.idlaptop
                AND donhang.idthanhvien=thanhvien.id
                AND laptop.thuonghieu=thuonghieu.idthuonghieu ORDER BY donhang.STT";

                $resultPurchase=$con->query($sqlPurchase);
                $total=0;
                if($resultPurchase->num_rows>0) {
                    while($rowPurchase=$resultPurchase->fetch_assoc()) {
                        $total+=$rowPurchase["thanhtien"];
                        echo '
                            <div class="ad-laptop-info-row">
                                <img src="../Pictures/hinhanh/'.$rowPurchase["imgLaptop"].'" />
                                <div class="ad-laptop-info-row-1">
                                    <span>'.$rowPurchase["tenlaptop"].'</span>
                                    <div class="ad-laptop-info-row-2">
                                        <span>'.$rowPurchase["thuonghieu"].'</span>
                                        <div class="ad-laptop-info-row-3">
                                            <span>x'.$rowPurchase["soluong"].'</span>
                                            <span>'.$rowPurchase["thanhtien"].'??</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ';
                    }
                }
                echo '
                    <div class="ad-total">
                        <span>Thanh To??n: '.$total.'??</span>
                    </div>
                </div>
                </div>';
            }
        }
    ?>
        </div>
    </div>
</body>

</html>