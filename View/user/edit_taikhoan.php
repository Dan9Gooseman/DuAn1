<div class="container-thongtin">
    <div class="header">
        <div class="taikhoan">
            <div class="anh">
                <img src="../img/5.jpg" alt="" />
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
            </div>
        </div>
        <div class="menu">
            <div class="menu1">
                <a href="index.php?act=hoso">Trang cá nhân</a>
            </div>
            <div class="menu2">
                <a href="index.php?act=">Ghé thăm cửa hàng</a>
            </div>
        </div>
    </div>
    <form action="index.php?act=capnhattk" method="post">
        <div class="form">
            <div class="form1">
                <div class="hoten">
                    <span>Họ và tên*</span>
                </div>
                <div class="nut">
                    <input type="text" name="user_hovaten" value="<?php echo $_SESSION['nguoidung']['user_hovaten'] ?>" />
                </div>
            </div>
            <div class="form1">
                <div class="email">
                    <span>Email*</span>
                </div>
                <div class="nut">
                    <input type="text" name="user_email" value="<?php echo $_SESSION['nguoidung']['user_email'] ?>" />
                </div>
            </div>
            <input type="hidden" name="user_id" value="<?php echo $_SESSION['nguoidung']['user_id'] ?>">
            <p>
                Tên này sẽ hiển thị trong trang Tài khoản và phần Đánh giá sản phẩm
            </p>
            <input type="submit" value="Lưu thay đổi" name="capnhat_tk">
        </div>
        <h2 class="thongbao">
            <?php
            if (isset($thongbao) && ($thongbao != "")) {

                echo $thongbao;
            }
            ?>
        </h2>
    </form>
</div>