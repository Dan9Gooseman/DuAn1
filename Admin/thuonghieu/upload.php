<?php
if (is_array($th)) {
    extract($th);
}
?>
<div class="row">
    <div class="row formtile mb10">
        <h1 style="text-align: center;">CẬP NHẬT THƯƠNG HIỆU</h1>
    </div>
    <div>
        <form action="index.php?act=updateth" method="post">
            <div class="dulieu">
                MÃ THƯƠNG HIỆU :
                <input type="text" name="ma" value="<?=$th_id?>">

                THƯƠNG HIỆU :
                <input type="text" name="name" value="<?=$th_thuonghieu?>">
                TRẠNG THÁI :
                <select name="on_off" class="onoff">
              >
                    <option value="1">Bật</option>
                    <option value="0">Tắt</option>
                </select>
            </div>
            <div class="nut_cn">
                <input type="hidden" name="id" value="<?php if (isset($th_id) && ($th_id > 0)) echo $th_id; ?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="nhập lại">
                <a href="index.php?act=listth"><input type="button" value="danh sách"></a>
            </div>
            <?php

            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;

            ?>


        </form>
    </div>

</div>