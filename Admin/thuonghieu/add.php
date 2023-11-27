<div style="margin: 0 5rem;">
    <div class="">
        <h1 style="text-align: center;">THÊM MỚI THƯƠNG HIỆU</h1>
    </div>
    <div>
        <form action="index.php?act=addth" method="post">
            <div class="dulieu">
                THƯƠNG HIỆU :
                <input type="text" name="thuonghieu_th" required>
                TRẠNG THÁI :
                <select name="on_off" class="onoff">
              >
                    <option value="1">Bật</option>
                    <option value="0">Tắt</option>
                </select>
            </div>
            <div class="nut_cn">
                <input type="submit" name="themmoi" value="thêm mới">
                <input type="reset" value="nhập lại">
                <a href="index.php?act=listth"><input type="button" value="danh sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;

            ?>


        </form>


    </div>
</div>