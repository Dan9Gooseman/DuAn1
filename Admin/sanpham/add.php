<div class="row">
    <div class="row formtile mb10">
        <h1 style="text-align: center;">THÊM MỚI SẢN PHẨM</h1>
    </div>
    <div>
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="dulieu">
                TÊN SẢN PHẨM :
                <input type="text" name="sanpham_sp" required>
                MÔ TẢ SẢN PHẨM :
                <input type="text" name="mota_sp" required>
                ẢNH SẢN PHẨM :
                <input type="file" name="img_sp">
            </div>
            <div class="nut_cn">
                <input type="submit" name="themmoi" value="thêm mới">
                <input type="reset" value="nhập lại">
                <a href="index.php?act=listsp"><input type="button" value="danh sách"></a>
            </div>


        </form>
    </div>


</div>