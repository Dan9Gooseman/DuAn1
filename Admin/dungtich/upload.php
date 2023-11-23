<?php
if (is_array($dt)) {
    extract($dt);
}
?>
<div class="row">
    <div class="row formtile mb10">
        <h1 style="text-align: center;">SỬA DANH MỤC</h1>
    </div>
    <div>
        <form action="index.php?act=updatedt" method="post">
            <div class="dulieu">
                ID DUNG TÍCH :
                <input type="text" name="dt_id" value="<?php if (isset($dt_id) && ($dt_id != "")) echo $dt_id; ?>" disabled>
                DUNG TÍCH :
                <input type="text" name="dt_dungtich" value="<?php if (isset($dt_dungtich) && ($dt_dungtich != "")) echo $dt_dungtich; ?>">

            </div>
            <div class="nut_cn">
                <input type="hidden" name="id" value="<?php if (isset($dt_id) && ($dt_id > 0)) echo $dt_id; ?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="nhập lại">
                <a href="index.php?act=listdt"><input type="button" value="danh sách"></a>
            </div>
            <?php

            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;

            ?>


        </form>
    </div>

</div>