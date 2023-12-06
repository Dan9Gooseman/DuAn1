<div class="row">
    <div class="row formtile mb10">
        <h1 style="text-align: center;">THÊM MỚI DUNG TÍCH</h1>
    </div>
    <div>
        <form action="index.php?act=adddm" method="post">
            <div class="dulieu">
                Danh Mục :
                <input type="text" name="dm_danhmuc" required>
                Trạng Thái :
                <select name="on_off" class="onoff">
                    <option value="1">Bật</option>
                    <option value="0">Tắt</option>
                </select>

            </div>
            <div class="nut_cn">
                <input type="submit" name="themmoi" value="thêm mới">
                <input type="reset" value="nhập lại">
                <a href="index.php?act=listdm"><input type="button" value="danh sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;

            ?>


        </form>
    </div>


</div>