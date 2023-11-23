<?php
if (is_array($btsp)) {
    extract($btsp);
}
?>
<div class="row">
    <div class="row formtile mb10">
        <h1 style="text-align: center;">UPLOAD BIẾN THỂ SẢN PHẨM</h1>
    </div>
    <div>
        <form action="index.php?act=updatebtsp" method="post">
        <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
            <div class="dulieu">
                ID BTSP :
                <input type="text" name="ma" value="<?php if (isset($btsp_id) && ($btsp_id > 0)) echo $btsp_id; ?>" disabled>
           
            </div>
            <div class="dulieu_fix">
                ID  SẢN PHẨM :
                <input type="text" name="sp1_id" value="<?php if (isset($sp_id) && ($sp_id != "")) echo $sp_id; ?>" required>
                ID THƯƠNG HIỆU :
                <input type="text" name="th1_id" value="<?php if (isset($th_id) && ($th_id != "")) echo $th_id; ?>"  required>
                ID DUNG TÍCH :
                <input type="text" name="dt1_id" value="<?php if (isset($dt_id) && ($dt_id != "")) echo $dt_id; ?>" required>
                ID DANH MỤC :
                <input type="text" name="dm1_id" value="<?php if (isset($dm_id) && ($dm_id != "")) echo $dm_id; ?>" required>
            </div>
            <div class="dulieu">
                TÊN BIẾN THỂ SẢN PHẨM :
                <input type="text" name="name_btsp" value="<?php if (isset($btsp_ten) && ($btsp_ten != "")) echo $btsp_ten; ?>" required>
                GIÁ TIỀN :
                <input type="text" name="price_btsp" value="<?php if (isset($btsp_giatien) && ($btsp_giatien != "")) echo $btsp_giatien; ?>" required>
                SỐ LƯỢNG :
                <input type="text" name="sl_btsp" value="<?php if (isset($btsp_soluongconlai) && ($btsp_soluongconlai != "")) echo $btsp_soluongconlai; ?>" required>
            </div>
            <div class="nut_cn">
            <input type="hidden" name="id" value="<?php if (isset($btsp_id) && ($btsp_id > 0)) echo $btsp_id; ?>">
                <input type="submit" name="capnhap" value="cập nhật">
                <input type="reset" value="nhập lại">
                <a href="index.php?act=listbtsp"><input type="button" value="danh sách"></a>
            </div>
            

        </form>
    </div>


</div>