<div class="container-acount">
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
        <div class="sp">
            <div class="sp1" id="donhang">
                <a href="index.php?act=diachinhanhang">
                    <h3>Cập nhật địa chỉ nhận hàng</h3>
                </a>
                <p>Thay đổi và cập nhật địa chỉ nhận hàng của bạn</p>
            </div>
            <div class="sp1" id="thongtin">
                <a href="index.php?act=edit_tk">
                    <h3>Thay đổi thông tin</h3>
                </a>
                <p>Chỉnh sửa thông tin cá nhân và mật khẩu của bạn</p>
            </div>
            <div class="sp1" id="capnhat">
                <a href="index.php?act=lichsudathang">
                    <h3>Lịch sử mua hàng</h3>
                </a>
                <p>Kiểm tra các đơn hàng mà bạn đã từng đặt tại Website</p>
            </div>
        </div>
    </div>
</div>