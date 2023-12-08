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
                <th class="b" style="width:150px;">MÃ ĐƠN HÀNG</th>
                <th class="b" style="width:400px;overflow:hidden;">ĐỊA CHỈ</th>
                <th class="b" style="width:120px;">NGÀY TẠO</th>
                <th class="b" style="width:120px;">TỔNG TIỀN</th>
                <th class="b" style="width:150px;">THANH TOÁN</th>
                <th class="b" style="width:200px;">TRẠNG THÁI ĐƠN HÀNG</th>
                <th class="b">Chi tiết</th>
                <th class="b">Hủy đơn hàng</th>

            </tr>
            <?php
            if (isset($listdonhang)) {
                foreach ($listdonhang as $donhang) : ?>
                    <tr>
                        <th> <?= $donhang['dh_id'] ?> </th>
                        <th> <?= $donhang['dcnh_diachi'] ?> </th>
                        <th> <?= $donhang['dh_ngaytao'] ?> </th>
                        <th> <?= number_format($donhang['dh_tongtien']) . 'đ' ?> </th>
                        <th> <?= $donhang['dh_thanhtoan'] ?> </th>
                        <th> <?= $donhang['dh_trangthaidonhang'] ?> </th>
                        <th>
                            <?php
                            echo '<a href="index.php?act=chitietdonhang&dh_id=' . $donhang['dh_id'] . '"><input class="c" id="nuthuydh" type="button" value="Xem" name="huydonhang"></a>';
                            ?>
                        </th>
                        <th>
                            <?php
                            // Sửa điều kiện để kiểm tra nếu trạng thái là 'Đang xử lý' hoặc 'Đang giao'
                            if ($donhang['dh_trangthaidonhang'] == 'Đang xử lý' || $donhang['dh_trangthaidonhang'] == 'Đang chuẩn bị hàng' || $donhang['dh_trangthaidonhang'] == 'Đã giao cho đơn vị vận chuyển') {
                                echo '<a href="index.php?act=suatrangthai&id=' . $donhang['dh_id'] . '"><input class="c" id="nuthuydh" type="button" value="Hủy đơn hàng" name="huydonhang"></a>';
                            }else{
                                echo '<p>Không thể hủy</p>';
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