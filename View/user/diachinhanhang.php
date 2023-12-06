<div class="container-suadiachi">
    <div class="header">
        <div class="taikhoan">
            <div class="anh">
                <img src="../../img/5.jpg" alt="" />
            </div>
            <div class="ten">
                <span>
                    <?php
                    if (isset($_SESSION['nguoidung']) && $_SESSION['nguoidung']) {
                        // var_dump($_SESSION['nguoidung']);
                        echo 'Xin chào ' . $_SESSION['nguoidung']['user_hovaten'];
                        echo "<br>";
                        echo 'Xin chào ' . $_SESSION['nguoidung']['user_email'];
                    } else {
                        echo "Chưa đăng nhập";
                    }
                    ?>
                </span> <br />
                <?php
                if (isset($_SESSION['nguoidung']) && $_SESSION['nguoidung']['user_hovaten']) :
                ?>
                <?php
                endif;
                ?>
                <!-- <button>Đăng xuất</button> -->
            </div>
        </div>
        <div class="menu">
            <div class="menu1">
                <a href="index.php?act=edit_mk">Đổi mật khẩu</a>
            </div>
        </div>
    </div>
    <div class="main">
        <span>Các địa chỉ bên dưới mặc định sẽ được sử dụng ở trang thanh toán sản
            phẩm.</span>
        <div class="content">
            <div class="ct1">
                <div class="chu">
                    <h4>Địa chỉ thanh toán</h4>
                </div>
                <div class="nut">
                    <a href="index.php?act=suadiachi"><input type="submit" value="SỬA"></a>
                </div>
            </div>
            <div class="ct1">
                <?php
                // var_dump($diachinhanhang);
                    echo '<tr>
                    <td>' . $diachinhanhang['dcnh_hovaten'] . '</td><br>
                    <td>' . $diachinhanhang['dcnh_sdt'] . '</td><br>
                    <td>' . $diachinhanhang['dcnh_diachi'] . '</td><br>
                    <td>' . $diachinhanhang['user_email'] . '</td><br>
                    </tr>';
                // var_dump($listdonhang);
                ?>
            </div>
        </div>
    </div>
</div>