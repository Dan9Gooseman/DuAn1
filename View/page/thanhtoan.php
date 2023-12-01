<?php
include "Model/thanhtoan.php";
?>
<div class="checkout">
    <form class="form" action="" method="post">
        <div class="address">
            <label>Họ và tên :</label>
            <input type="text" name="hovaten" value="<?php echo $diachinhanhang['dcnh_hovaten']; ?>">
            <label>Địa chỉ :</label>
            <input type="text" name="diachi" value="<?php echo $diachinhanhang['dcnh_diachi']; ?>">
            <label>số điện thoại :</label>
            <input type="text" name="sdt" value="<?php echo $diachinhanhang['dcnh_sdt']; ?>">
            <label>Email :</label>
            <input type="text" name="email" value="<?php echo $diachinhanhang['user_email']; ?>">
            <label>Ghi chú :</label>
            <textarea name="ghichu" cols="50" rows="10"></textarea>
        </div>
        <div class="divider1"></div>
        <div class="total">
            <strong>Tổng tiền : <?php echo number_format($tongtien) . 'đ'; ?></strong>
            <input type="text" name="tongtien" hidden readonly value="<?php echo $tongtien; ?>">
            <div class="divider2"></div>
            <div class="pay">
                <div>
                    <input type="radio" name="phuongthucthanhtoan" value="COD" checked><label>Thanh toán tại nhà (COD)</label>
                    <span>Thanh toán khi quý khách nhận được hàng.</span>
                </div>
                <div>
                    <input type="radio" name="phuongthucthanhtoan" value="Chuyển khoản"><label>Chuyển khoản ngân hàng (Quét mã QR)</label>
                    <span>Sử dụng ứng dụng Banking của ngân hàng quý khách đang xài để thanh toán.</span>
                </div>
            </div>

            <button type="submit" name="submit" value="Đặt hàng" class="datHang" id="submit">Đặt hàng</button>
        </div>
    </form>
</div>