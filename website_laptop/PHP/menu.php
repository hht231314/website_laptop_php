<script>
    function showMenu() {
        document.getElementById("hideMenu").style.display = "block";

    }

    function closeMenu() {
        document.getElementById("hideMenu").style.display = "none";
    }
</script>
<?php
    require 'connect.php';
    if(isset($_SESSION["id"])) {
        $sqlUser="SELECT * FROM thanhvien WHERE id=$_SESSION[id]";
        $resultUser=$con->query($sqlUser);

        if($resultUser->num_rows>0) {
            while($rowUser=$resultUser->fetch_assoc()) {
                if($rowUser["level"]==1) {
                    echo '
                    <div class="topnav">
                        <div class="topleft">
                            <a class="active" href="../index.php">Trang Chủ</a>

                            <div class="subnav">
                                <button class="subnavbtn">Laptop <i class="fa fa-caret-down"></i></button>

                                <div class="subnav-content">';
                    
                    require 'connect.php';
                    $sql = "SELECT * FROM thuonghieu";
                    $result = $con -> query($sql);

                    if($result -> num_rows>0) {
                        while($row=$result -> fetch_assoc()) {
                            echo '<a href="../PHP/laptop.php?brand='.$row["idthuonghieu"].'"> '.$row["thuonghieu"].' </a>';
                        }
                    }

                    echo '
                        </div> <!-- Close brand laptop div -->
                        </div> <!-- Close laptop div -->
                        <div class="subnav">
                            <button class="subnavbtn">Quản lý <i class="fa fa-caret-down"></i></button>
                            <div class="subnav-content">
                                <a href="../PHP/ad_user.php">Quản lý User</a>
                                <a href="../PHP/ad_laptop.php">Quản lý Laptop</a>
                                <a href="../PHP/ad_purchase.php">Quản lý đơn hàng</a>
                            </div>
                        </div>
                        

                        </div> <!-- Close left side div -->

                        <div class="topright">
                        <a href="#home" onclick="showMenu()"><i class="fas fa-bars"></i></a>
                        <div class="hide-menu" id="hideMenu">
                            <span><i onclick="closeMenu()" class="fas fa-times"></i></span>
                            <a class="hide-menu-top" href="../PHP/logout.php">Đăng Xuất</a>
                        </div>
                    ';

                        $avt="SELECT * FROM thanhvien WHERE id=$_SESSION[id]";
                        $result_avt=$con->query($avt);

                        if($result_avt->num_rows>0) {
                            if($row = $result_avt->fetch_assoc()){
                                $img = "../Pictures/avt/";
                                $img.= $row["hinhdaidien"];
                                echo '<a href="../PHP/profile.php" style="padding: 10.5px 20px;"><img id="avatar" src="'.$img.'" /> </a>';
                            }
                        }
                            
                    ?>
<!-- Show Avatar or User Icon -->

<div id="menuSearch">
    <form method="post" action="../PHP/search.php">
        <input type="text" name="search" placeholder="Nhập sản phẩm cần tìm.." />
        <button type="submit" name="sm"><i class="material-icons">search</i></button>
    </form>
</div>
<!--Close Search div -->

</div>
</div>
<?php 
                }else if($rowUser["level"]==0) { ?>
                    <div class="topnav">
                        <div class="topleft">
                            <div class="subnav">
                                <button class="active subnavbtn">Trang Chủ <i class="fa fa-caret-down"></i></button>
                                <div class="subnav-content">
                                    <a href="../index.php">Trang Chủ</a>
                                    <a href="../PHP/intro.php">Giới Thiệu</a>
                                    <a href="../PHP/contact.php">Liên Hệ</a>
                                </div>
                            </div>

                            <div class="subnav">
                                <button class="subnavbtn">Laptop <i class="fa fa-caret-down"></i></button>

                                <div class="subnav-content">
                                    <?php
                                        require 'connect.php';
                                        $sql = "SELECT * FROM thuonghieu";
                                        $result = $con -> query($sql);
                                        if($result -> num_rows>0) {
                                            while($row=$result -> fetch_assoc()) {
                                                echo '<a href="../PHP/laptop.php?brand='.$row["idthuonghieu"].'"> '.$row["thuonghieu"].' </a>';
                                            }
                                        } 
                                    ?>
                                </div> <!-- Close brand laptop div -->
                            </div> <!-- Close laptop div -->

                            <!-- <a href="../PHP/intro.php">Giới Thiệu</a>
                            <a href="../PHP/contact.php">Liên Hệ</a> -->

                        </div> <!-- Close left side div -->

                        <div class="topright">
                            <a href="#home" onclick="showMenu()"><i class="fas fa-bars"></i></a>
                            
                            <div class="hide-menu" id="hideMenu">
                                <span><i onclick="closeMenu()" class="fas fa-times"></i></span>
                                <a class="hide-menu-top" href="../PHP/logout.php">Đăng Xuất</a>
                                <a href="../PHP/removeAccount.php">Xóa tài khoản</a>
                            </div>

                            <?php
                                    $avt="SELECT * FROM thanhvien WHERE id=$_SESSION[id]";
                                    $result_avt=$con->query($avt);

                                    if($result_avt->num_rows>0) {
                                        if($row = $result_avt->fetch_assoc()){
                                            $img = "../Pictures/avt/";
                                            $img.= $row["hinhdaidien"];
                                            echo '<a href="../PHP/profile.php" style="padding: 10.5px 20px;"><img id="avatar" src="'.$img.'" /> </a>';
                                        }
                                    }
                            ?>
                            <!-- Show Avatar or User Icon -->
                            <a href="../PHP/wishList.php"><i class="fas fa-heart"></i></a>
                            <a href="../PHP/cart.php"><i class="fa fa-shopping-cart"></i></a>
                            <a href="../PHP/purchase.php"><i class="fas fa-clipboard-list"></i></a>

                            <div id="menuSearch">
                                <form method="post" action="../PHP/search.php">
                                    <input type="text" name="search" placeholder="Nhập sản phẩm cần tìm.." />
                                    <button type="submit" name="sm"><i class="material-icons">search</i></button>
                                </form>
                            </div>
                            <!--Close Search div -->

                        </div>
                    </div>
            <?php
                } 
                }
            }
        }else { ?>
            <div class="topnav">
                <div class="topleft">
                    <a class="active" href="../index.php">Trang Chủ</a>

                    <div class="subnav">
                        <button class="subnavbtn">Laptop <i class="fa fa-caret-down"></i></button>

                        <div class="subnav-content">
                            <?php
                                require 'connect.php';
                                $sql = "SELECT * FROM thuonghieu";
                                $result = $con -> query($sql);
                                if($result -> num_rows>0) {
                                    while($row=$result -> fetch_assoc()) {
                                        echo '<a href="../PHP/laptop.php?brand='.$row["idthuonghieu"].'"> '.$row["thuonghieu"].' </a>';
                                    }
                                } 
                            ?>
                        </div> <!-- Close brand laptop div -->
                    </div> <!-- Close laptop div -->

                    <a href="../PHP/intro.php">Giới Thiệu</a>
                    <a href="../PHP/contact.php">Liên Hệ</a>

                </div> <!-- Close left side div -->

                <div class="topright">
                    <a href="#home"><i class="fas fa-bars"></i></a>

                    <?php
                        if(!isset($_SESSION['id'])) {
                            echo '<a href="../PHP/login.php"><i class="fas fa-user-circle"></i></a>';
                        } else {
                            $avt="SELECT * FROM thanhvien WHERE id=$_SESSION[id]";
                            $result_avt=$con->query($avt);
                            if($result_avt->num_rows>0) {
                                if($row = $result_avt->fetch_assoc()){
                                    $img = "../Pictures/avt/";
                                    $img.= $row["hinhdaidien"];
                                    echo '<a href="../PHP/profile.php" style="padding: 10.5px 20px;"><img id="avatar" src="'.$img.'" /> </a>';
                                }
                            }
                        }
                    ?>
                    <!-- Show Avatar or User Icon -->

                    <a href="../PHP/cart.php"><i class="fa fa-shopping-cart"></i></a>

                    <div id="menuSearch">
                        <form method="post" action="../PHP/search.php">
                            <input type="text" name="search" placeholder="Nhập sản phẩm cần tìm.." />
                            <button type="submit" name="sm"><i class="material-icons">search</i></button>
                        </form>
                    </div>
                    <!--Close Search div -->

                </div>
            </div>
    <?php
    }
?>