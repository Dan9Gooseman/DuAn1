<?php
if (is_array($dm)) {
    extract($dm);
}
?>
<div class="row">
    <div class="row formtile mb10">
        <h1 style="text-align: center;">CẬP NHẬT DANH MỤC</h1>
    </div>
    <div>
        <form action="index.php?act=updatedm" method="post">
            <div class="dulieu">
                ID DANH MỤC :
                <input type="text" name="id_dm" value="<?=$dm_id ?>" disabled>
                DANH MỤC :
                <input type="text" name="danhmuc_dm" value="<?=$dm_danhmuc?>">
                 TRẠNG THÁI :
                <select name="on_off" class="onoff">
              >
                    <option value="1">Bật</option>
                    <option value="0">Tắt</option>
                </select>

            </div>
            <div class="nut_cn">
                <input type="hidden" name="id" value="<?php if (isset($dm_id) && ($dm_id > 0)) echo $dm_id; ?>">
                <input type="submit" name="capnhat" value="CẬP NHẬT">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
            </div>


        </form>
    </div>


</div>