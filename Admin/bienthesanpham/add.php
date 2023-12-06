<div class="row ">
    <div class="row formtile mb10">
        <h1 style="text-align: center;">THÊM MỚI BIẾN THỂ SẢN PHẨM</h1>
    </div>
    <div>
        <form action="index.php?act=addbtsp" method="post">
        <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
            <div class="dulieu_fix">
               
            </div>
            
            <div class="dulieu">
            TÊN SẢN PHẨM :<br>
                <select name="sp_id" id="" >
                    <?php 
                    foreach ($listsanpham as $sp) {
                        extract($sp);
                        echo '<option value="'.$sp_id.'">'.$sp_ten.'</option>';
                    }
                    ?>
                    
                </select><br>
                ID THƯƠNG HIỆU :<br>
                <select name="th_id" id="">
                    <?php 
                    foreach ($listthuonghieu as $th) {
                        extract($th);
                        echo '<option value="'.$th_id.'">'.$th_thuonghieu.'</option>';
                    }
                    ?>
                    
                </select><br>
                ID DUNG TÍCH :<br>
                <select name="dt_id" id="" required>
                    <?php 
                    foreach ($listdungtich as $dt) {
                        extract($dt);
                        echo '<option value="'.$dt_id.'">'.$dt_dungtich.'</option>';
                    }
                    ?>
                    
                </select><br>
                 ID DANH MỤC : <br>
                <select name="dm_id" id="">
                    <?php 
                    foreach ($listdanhmuc as $dm) {
                        extract($dm);
                        echo '<option value="'.$dm_id.'">'.$dm_danhmuc.'</option>';
                    }
                    ?>
                    
                </select><br>
                TÊN BIẾN THỂ SẢN PHẨM : <br>
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