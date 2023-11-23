<div class="row">
    <div class="row formtile mb10">
        <h1 style="text-align: center;">THÊM MỚI BIẾN THỂ SẢN PHẨM</h1>
    </div>
    <div>
        <form action="index.php?act=addbtsp" method="post">
        <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
            <div class="dulieu_fix">
            ID  SẢN PHẨM :
                <input type="text" name="sp_id" required>
                ID THƯƠNG HIỆU :
                <input type="text" name="th_id" required>
                ID DUNG TÍCH :
                <input type="text" name="dt_id" required>
                ID DANH MỤC :
                <input type="text" name="dm_id" required>
            </div>
            
            <div class="dulieu">
                TÊN BIẾN THỂ SẢN PHẨM :
                <input type="text" name="name_btsp" required>
                GIÁ TIỀN :
                <input type="text" name="price_btsp" required>
                SỐ LƯỢNG :
                <input type="text" name="sl_btsp" required>
            </div>
            <div class="nut_cn">
                <input type="submit" name="themmoi" value="thêm mới">
                <input type="reset" value="nhập lại">
                <a href="index.php?act=listbtsp"><input type="button" value="danh sách"></a>
            </div>
            

        </form>
    </div>


</div>