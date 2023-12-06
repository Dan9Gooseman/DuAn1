<div class="dathang">
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
                <th class="b">MÃ ĐƠN HÀNG</th>
                <th class="b">ĐỊA CHỈ</th>
                <th class="b">NGÀY TẠO</th>
                <th class="b">TỔNG TIỀN</th>
                <th class="b">THANH TOÁN</th>
                <th class="b">TRẠNG THÁI ĐƠN HÀNG</th>
                <th class="b"></th>

            </tr>
            <?php
            if (isset($listdonhang)) {
                foreach ($listdonhang as $donhang) : ?>
                    <tr>
                        <th> <?= $donhang['dh_id'] ?> </th>
                        <th> <?= $donhang['dcnh_diachi'] ?> </th>
                        <th> <?= $donhang['dh_ngaytao'] ?> </th>
                        <th> <?= $donhang['dh_tongtien'] ?> </th>
                        <th> <?= $donhang['dh_thanhtoan'] ?> </th>
                        <th> <?= $donhang['dh_trangthaidonhang'] ?> </th>
                        <th>
                            <?php
                            // Sửa điều kiện để kiểm tra nếu trạng thái là 'Đang xử lý' hoặc 'Đang giao'
                            if ($donhang['dh_trangthaidonhang'] == 'Đang xử lý') {
                                echo '<a href="index.php?act=suatrangthai&id=' . $donhang['dh_id'] . '"><input class="c" id="nuthuydh" type="button" value="Hủy đơn hàng" name="huydonhang"></a>';
                            }
                            ?>
                        </th>
                    </tr>
            <?php endforeach;
            } ?>

        </table>
    </div>
</div>
<!-- <script>
// Sử dụng hàm setTimeout để làm mới trang sau mỗi 5 giây
setTimeout(function(){
    location.reload();
}, 2000);
</script> -->