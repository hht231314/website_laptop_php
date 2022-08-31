<?php
require 'connect.php';
    $sql="SELECT * FROM thanhvien WHERE id=$_SESSION[id]";
    $result=$con->query($sql);
    if($result->num_rows>0) {
        while($row=$result->fetch_assoc()) {
            if($row["level"]==0) {
                echo '<script>
                    alert("Bạn không có quyền truy cập vào trang này!! Hệ thống sẽ chuyển hướng về trang chủ !!");
                    window.location.href = "../index.php";    
                </script>
                ';
            }
        }
    }
?>