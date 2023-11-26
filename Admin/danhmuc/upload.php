<?php
if (is_array($dm)) {
    extract($dm);
}
?>
<div class="row">
    <div class="row formtile mb10">
        <h1 style="text-align: center;">THÊM MỚI DANH MỤC</h1>
    </div>
    <div>
        <form action="index.php?act=updatedm" method="post">
            <div class="dulieu">
                ID DANH MỤC :
                <input type="text" name="id_dm" value="<?php if (isset($dm_id) && ($dm_id != "")) echo $dm_id; ?>" disabled>
                DANH MỤC :
                <input type="text" name="danhmuc_dm" value="<?php if (isset($dm_danhmuc) && ($dm_danhmuc != "")) echo $dm_danhmuc; ?>">
                Trạng thái:
                <select name="on_off" id="">
                    <option value="0">Tắt</option>
                    <option value="1">Bật</option>
                </select>

            </div>
            <div class="nut_cn">
<<<<<<< HEAD
                <input type="hidden" name="id" value="<?php if (isset($dm_id) && ($dm_id > 0)) echo $id; ?>">
=======
                <input type="hidden" name="id" value="<?php if (isset($dm_id) && ($dm_id > 0)) echo $dm_id; ?>">
>>>>>>> 4605b8b58af363b60251878b700a7f5e486bd9a3
                <input type="submit" name="capnhat" value="CẬP NHẬT">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
            </div>


        </form>
    </div>


</div>