<div class="row">
    <div class="row formtile mb10">
        <h1 style="text-align: center;">THÊM MỚI DANH MỤC</h1>
    </div>
    <div>
        <form action="index.php?act=adddt" method="post">
            <div class="dulieu">
                DUNG TÍCH :
                <input type="text" name="dungtich_dt" required>

            </div>
            <div class="nut_cn">
                <input type="submit" name="themmoi" value="thêm mới">
                <input type="reset" value="nhập lại">
                <a href="index.php?act=listdt"><input type="button" value="danh sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;

            ?>


        </form>
    </div>


</div>