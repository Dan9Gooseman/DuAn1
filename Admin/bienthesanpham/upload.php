<?php
if (is_array($btsp)) {
    extract($btsp);
    // var_dump($btsp);
}
?>
<div class="row">
    <div class="row formtile mb10">
        <h1 style="text-align: center;">SỬA BIẾN THỂ SẢN PHẨM</h1>
    </div>
    <div>
        <form action="index.php?act=updatebtsp" method="post">
        <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
            <div class="dulieu">
                ID BTSP :
                <input type="text" name="ma" value="<?php if (isset($btsp_id) && ($btsp_id > 0)) echo $btsp_id; ?>" disabled>
                SẢN PHẨM :
                <select name="sp_id" id="">
                    <?php 
                    foreach ($listsanpham as $sp) {
                        extract($sp);
                        if($sp_id==$sp_id) $s="selected"; else $s="";
                        echo '<option value="'.$sp_id.'" '.$s.'>'.$sp_ten.'</option>';
                    }
                    ?>
                    
                </select><br>
                THƯƠNG HIỆU :
                <select name="th_id" id="">
                    <?php 
                    foreach ($listthuonghieu as $th) {
                        extract($th);
                        if($th_id==$th_id) $s="selected"; else $s="";
                        echo '<option value="'.$th_id.'" '.$s.'>'.$th_thuonghieu.'</option>';
                    }
                    ?>
                    
                </select><br>
                DUNG TÍCH :
                <select name="dt_id" id="">
                    <?php 
                    foreach ($listdungtich as $dt) {
                        extract($dt);
                        if($dt_id==$dt_id) $s="selected"; else $s="";
                        echo '<option value="'.$dt_id.'" '.$s.'>'.$dt_dungtich.'</option>';
                    }
                    ?>
                    
                </select><br>
                DANH MỤC :
                <select name="dm_id" id="">
                    <?php 
                    foreach ($listdanhmuc as $dm) {
                        extract($dm);
                        if($dm_id==$dm_id) $s="selected"; else $s="";
                        echo '<option value="'.$dm_id.'" '.$s.'>'.$dm_danhmuc.'</option>';
                    }
                    ?>
                    
                </select><br>
            <div class="dulieu">
                TÊN BIẾN THỂ SẢN PHẨM :
                <input type="text" name="btsp_ten" value="<?=$btsp_ten ?>" required>
                GIÁ TIỀN :
                <input type="text" name="btsp_gia" value="<?=$btsp_giatien ?>" required>
                SỐ LƯỢNG :
                <input type="text" name="btsp_soluong" value="<?=$btsp_soluongconlai ?>" required>
            </div>
            <div class="nut_cn">
            <input type="hidden" name="id" value="<?php if (isset($btsp_id) && ($btsp_id > 0)) echo $btsp_id; ?>">
                <input type="submit" name="thaydoi" value="cập nhật">
                <input type="reset" value="nhập lại">
                <a href="index.php?act=listbtsp"><input type="button" value="danh sách"></a>
            </div>
            

        </form>
    </div>


</div>