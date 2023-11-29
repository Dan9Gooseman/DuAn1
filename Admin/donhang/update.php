<?php
if (is_array($dh)) {
    extract($dh);
}
?>
<div class="row">
    <div class="row formtile mb10">
        <h1 style="text-align: center;">CẬP NHẬT DANH MỤC</h1>
    </div>
    <div>
        <form action="index.php?act=updatetrangthai" method="post">
            <div class="dulieu">
                ID ĐƠN HÀNG :
                <input type="text"  value="<?=$dh_id  ?>" disabled>
                 TRẠNG THÁI :
                 <select name="trangthai">
                    <option ><?=$dh_trangthaidonhang?></option>
                    <option value="Đang giao">Đang giao</option>
                    <option value="Đã nhận hàng">Đã nhận hàng</option>
                    <option value="Thất Bại">Thất Bại</option>
                    
                    </select>

            </div>
            <div class="nut_cn">
                <input type="hidden" name="id" value="<?php if (isset($dh_id) && ($dh_id > 0)) echo $dh_id; ?>">
                <input type="submit" name="thaydoi" value="Thay Đổi">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listdonhang"><input type="button" value="DANH SÁCH"></a>
            </div>


        </form>
    </div>


</div>