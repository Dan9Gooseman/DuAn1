<?php
if (is_array($sp)) {
    extract($sp);
}
?><div class="row">
    <div class="row formtile mb10">
        <h1 style="text-align: center;">THÊM MỚI SẢN PHẨM</h1>
    </div>
    <div>
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="dulieu">
                ID SẢN PHẨM :
                <input type="text" name="id" value="<?=$sp_id ?>" disabled>
                TÊN SẢN PHẨM :
                <input type="text" name="name" value="<?=$sp_ten?>">
                MÔ TẢ SẢN PHẨM :
                <input type="text" name="mota" value="<?=$sp_mota ?>">
                Trạng Thái :
                <select name="on_off"  class="onoff">
                    <option value="1">Bật</option>
                    <option value="0">Tắt</option>
                </select><br><br>
                ẢNH SẢN PHẨM :
                <input type="file" name="img_sp">
            </div>
            <div class="nut_cn">
                <input type="hidden" name="id" value="<?php if (isset($sp_id) && ($sp_id > 0)) echo $sp_id; ?>">
                <input type="submit" name="capnhat" value="cập nhật">
                <input type="reset" value="nhập lại">
                <a href="index.php?act=listsp"><input type="button" value="danh sách"></a>
            </div>


        </form>
    </div>


</div>