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

    <script>
    function plus(idCart) {
        var xhttp;
        if (window.XMLHttpRequest) {
            xhttp = new XMLHttpRequest();
        } else {
            xhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                document.getElementById("amount").innerHTML = xhttp.responseText;
            }
        }
        xhttp.open("GET", "../PHP/plus.php?q=" + idCart, true);
        xhttp.send();
    }
    </script>
</head>
<?php
    session_start();
    require 'checkSession.php';
    require 'connect.php';

    if(isset($_POST["minus"])){
        $idgiohang=$_POST["idgiohang"];
        //Lấy thông tin về
        //Viet cau lenh sql
        $sql11="SELECT * FROM giohang WHERE idgiohang=$idgiohang";
        $result11=$con->query($sql11);
        if($result11->num_rows>0){
            while($row11=$result11->fetch_assoc()){
                if($row11['soluong']!=1){
                    $sl=$row11['soluong']-1;
                    $sql22="UPDATE giohang SET soluong=$sl WHERE idgiohang=$idgiohang";
                    $con->query($sql22);
                }
            }
        }
        }
        if(isset($_POST["plus"])){
        $idgiohang=$_POST["idgiohang"];
        //Lấy thông tin về
        //Viet cau lenh sql
        $sql11="SELECT * FROM giohang WHERE idgiohang=$idgiohang";
        $result11=$con->query($sql11);
        if($result11->num_rows>0){
            while($row11=$result11->fetch_assoc()){
                if($row11['soluong']!=5){
                    $sl=$row11['soluong']+1;
                    $sql22="UPDATE giohang SET soluong=$sl WHERE idgiohang=$idgiohang";
                    $con->query($sql22);
                }
            }
        }
        }
?>

<body>
    <div id="wrap">
        <?php
            require 'menu.php';
        ?>
        <div id="content" class="user-cart-content">
            <?php
                $sqlList = "SELECT * FROM giohang, laptop, thuonghieu WHERE
                giohang.idthanhvien=".$_SESSION["id"]." AND giohang.idlaptop=laptop.idlaptop AND
                laptop.thuonghieu=thuonghieu.idthuonghieu;";
                $resultList=$con->query($sqlList);
                if($resultList->num_rows>0) {
                    while($rowList=$resultList->fetch_assoc()) {
                        echo '
                            <div class="user-cart">
                                <img src="../Pictures/hinhanh/'.$rowList["hinhdaidien"].'" />
                                <a href="../PHP/info.php?id='.$rowList["idlaptop"].'">'.$rowList["tenlaptop"].'</a>
                                <div class="user-cart-form">
                                    <form method="post">
                                        <input type="hidden" name="idgiohang" value="'.$rowList["idgiohang"].'" />
                                        <input type="submit" name="minus" value="-" />
                                        <input type="button" name="amount" id="amount" value="'.$rowList["soluong"].'"  />
                                        <input type="submit" name="plus" value="+" />
                                    </form>
                                </div>
                                <div class="user-cart-brand"><label>'.$rowList["thuonghieu"].'</label></div>';
                        
                        $sqlSale="SELECT * FROM giam WHERE idlaptop=$rowList[idlaptop]";
                        $resultSale=$con->query($sqlSale);
                        
                        if($resultSale->num_rows>0){
                            while($rowSale=$resultSale->fetch_assoc()){
                                echo '
                                    <div class="user-cart-price">
                                        <label>'.$rowSale["giagiam"].'</label>
                                        <label style="color: red; text-decoration-line: line-through; font-size: 14px;">'.$rowList["gialaptop"].'</label>
                                    </div>

                                    <div class="user-cart-icon">
                                        <a href="deleteCart.php?id='.$rowList["idgiohang"].'"><i class="fas fa-trash"></i></a>
                                        <a href="yeuthich.php?idlaptop='.$rowList["idlaptop"].'"><i class="fas fa-heart"></i></a>
                                    </div>
                                    </div>
                                ';
                            }
                        }else {
                            echo '
                                <div class="user-cart-price">
                                    <label>'.$rowList["gialaptop"].'</label>
                                </div>

                                <div class="user-cart-icon">
                                    <a href="deleteCart.php?id='.$rowList["idgiohang"].'"><i class="fas fa-trash"></i></a>
                                    <a href="yeuthich.php?idlaptop='.$rowList["idlaptop"].'"><i class="fas fa-heart"></i></a>
                                </div>  
                                </div>
                            ';
                        }
                    
                    }
                    echo '<div class="user-cart-order"><a href="dathang.php"><input type="button" value="Đặt Hàng" /></a></div>';
                }
            ?>
            
        </div>
        <?php require 'footer.php'; ?>
    </div>
</body>

</html>