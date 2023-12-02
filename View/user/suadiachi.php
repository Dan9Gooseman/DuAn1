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
                <a href="index.php">Ghé thăm cửa hàng</a>
            </div>
        </div>
    </div>
    <h4>Địa chỉ thanh toán</h4>
    <form action="index.php?act=luudiachi" method="post">
        <div class="form">
            <div class="form1">

                <div class="hoten">
                    <span>Họ và tên*</span>
                </div>
                <div class="nut">
                    <input type="text" name="dcnh_hovaten" value="<?php echo $diachinhanhang['dcnh_hovaten'] ?>" />
                </div>
            </div>
            <div class="form1">
                <div class="sdt">
                    <span>Số điện thoại*</span>
                </div>
                <div class="nut">
                    <input type="text" name="dcnh_sdt" value="<?php echo $diachinhanhang['dcnh_sdt'] ?>" />
                </div>
            </div>
            <div class="form1">
                <div class="dchi">
                    <span>Địa chỉ</span>
                </div>
                <div class="nut">
                    <input type="text" name="dcnh_diachi" value="<?php echo $diachinhanhang['dcnh_diachi'] ?>" />
                </div>
            </div>
            <input type="hidden" name="dcnh_id" value="<?php echo $diachinhanhang['dcnh_id'] ?>">
            <input type="submit" value="LƯU ĐỊA CHỈ" name="luudiachi">
            <h2 class="thongbao">
                <?php
                if (isset($thongbao) && ($thongbao != "")) {

                    echo $thongbao;
                }
                ?>
            </h2>
        </div>


    </form>

</div>