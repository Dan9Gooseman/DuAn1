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
                if (isset($_SESSION['nguoidung']) && $_SESSION['nguoidung']['user_hovaten']) {
                ?>
                <!-- <li><a class="dropdown-item" href="index.php?act=hoso">Hồ sơ</a></li> -->
                <li><a class="dropdown-item" href="index.php?act=dangxuat">Đăng xuất</a></li>
                <?php
                } else {
                    echo "";
                }
                ?>
                <!-- <button>Đăng xuất</button> -->
            </div>
        </div>
        <div class="menu">
            <div class="menu1">
                <a href="index.php?act=edit_tk">Cập nhật hồ sơ</a>
            </div>
            <div class="menu1">
                <a href="index.php?act=edit_mk">Đổi mật khẩu</a>
            </div>
            <div class="menu2">
                <a href="home.php">Ghé thăm cửa hàng</a>
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
                foreach ($listdonhang as $donhang) {
                    extract($donhang);
                    echo '<tr>
                    <td>' . $user_hovaten . '</td><br>
                    <td>' . $dcnh_sdt . '</td><br>
                    <td>' . $dcnh_diachi . '</td><br>
                    </tr>';
                }
                // var_dump($listdonhang);
                ?>
            </div>
        </div>
    </div>
</div>