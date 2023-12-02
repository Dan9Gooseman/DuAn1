<div class="container-thongtin">
    <div class="header">
        <div class="taikhoan">
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
</div>
<div class="main">
    <div class="chu">
        <!-- <span>Bạn chưa có đơn hàng nào.</span> -->
    </div>
    <div class="nut">
        <a href="index.php?act=lichsudathang">Làm mới trang</a>
    </div>
</div>
<div class="show">
    <table>
        <tr class="a">
            <!-- <th class="b"></th> -->
            <th class="b">HỌ TÊN KHÁCH HÀNG</th>
            <th class="b">SDT</th>
            <th class="b">ĐỊA CHỈ</th>
            <th class="b">NGÀY TẠO</th>
            <th class="b">TỔNG TIỀN</th>
            <th class="b">THANH TOÁN</th>
            <th class="b">TRẠNG THÁI ĐƠN HÀNG</th>
            <th class="b"></th>

        </tr>
        <?php foreach ($listdonhang as $donhang) : ?>
        <tr>
            <th> <?= $donhang['user_hovaten'] ?> </th>
            <th> <?= $donhang['dcnh_sdt'] ?> </th>
            <th> <?= $donhang['dcnh_diachi'] ?> </th>
            <th> <?= $donhang['dh_ngaytao'] ?> </th>
            <th> <?= $donhang['dh_tongtien'] ?> </th>
            <th> <?= $donhang['dh_thanhtoan'] ?> </th>
            <th> <?= $donhang['dh_trangthaidonhang'] ?> </th>
            <th>
                <?php
                    // Sửa điều kiện để kiểm tra nếu trạng thái là 'Đang xử lý' hoặc 'Đang giao'
                    if ($donhang['dh_trangthaidonhang'] == 'Đang xử lý' || $donhang['dh_trangthaidonhang'] == 'Đang giao') {
                        echo '<a href="index.php?act=suatrangthai&id=' . $donhang['dh_id'] . '"><input class="c" id="nuthuydh" type="button" value="Hủy đơn hàng" name="huydonhang"></a>';
                    }
                    ?>
            </th>
        </tr>
        <?php endforeach; ?>

    </table>
</div>
<!-- <script>
// Sử dụng hàm setTimeout để làm mới trang sau mỗi 5 giây
setTimeout(function(){
    location.reload();
}, 2000);
</script> -->