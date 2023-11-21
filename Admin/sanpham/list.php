<div class="row">
    <div>
        <h1 style="text-align: center; margin: 30px;">DANH SÁCH SẢN PHẨM</h1>
    </div>
    <div class="">
        <div class="">
            <table>
                <tr class="a">
                    <th class="b"></th>
                    <th class="b">MÃ SẢN PHẨM</th>
                    <th class="b">TÊN SẢN PHẨM</th>
                    <th class="b">ẢNH SẢN PHẨM</th>
                    <th class="b">MÔ TẢ SẢN PHẨM</th>

                    <th class="b">LƯỢT MUA</th>
                    <th class="b"></th>
                </tr>
                <?php
                foreach ($listsanpham as $sp) {
                    extract($sp);
                    $xoasp = "index.php?act=xoasp&id=" . $sp_id;
                    $suasp = "index.php?act=suasp&id=" . $sp_id;
                    $img = "../assets/uploads/" . $sp_img;
                    if (is_file($img)) {
                        $hinh = "<img src='" . $img . "' height='300' width='150'>";
                    } else {
                        $hinh = "không hình ảnh";
                    }
                    echo '<tr>
                    <th><input type="checkbox"></th>
                    <th>' . $sp_id . '</th>
                    <th>' . $sp_ten . '</th>
                    <th>' . $hinh . '</th>
                    <th>' . $sp_mota . '</th>
                    <th>' . $sp_luotmua . '</th>
                    <th><a href="' . $xoasp . '"><input class="c" type="button" value="xóa"></a>
                    <a href="' . $suasp . '"><input class="c" type="button" value="sửa"></a></th>
                </tr>';
                }
                ?>
            </table>

        </div>
        <div class="nut_cn">
            <input class="mr" type="button" value="chọn tât cả">
            <input class="mr" type="button" value="bỏ chọn tất cả">
            <input class="mr" type="button" value="xóa mục đã chọn">
            <a href="index.php?act=addsp"><input type="button" value="nhập thêm"></a>
        </div>
    </div>

</div>
</div>