<div class="row">
    <div>
        <h1 style="text-align: center; margin: 30px;">DANH SÁCH BIẾN THỂ SẢN PHẨM</h1>
    </div>
    <div class="">
        <div class="">
            <table>
                <tr class="a">
                    <th class="b"></th>
                    <th class="b">MÃ BIẾN THỂ SP</th>
                    <th class="b">TÊN BIẾN THỂ SP</th>
                    <th class="b">GIÁ TIỀN BIẾN THỂ SP</th>
                    <th class="b">SỐ LƯỢNG CÒN LẠI</th>
                    <th class="b">MÃ SẢN PHẨM</th>
                    <th class="b">MÃ DANH MỤC</th>
                    <th class="b">MÃ THƯƠNG HIỆU</th>
                    <th class="b">MÃ DUNG TÍCH</th>
                    <th class="b">CHỨC NĂNG</th>
                </tr>
                <?php
                foreach ($listbienthesanpham as $btsp) {
                    extract($btsp);
                    $xoabtsp = "index.php?act=xoabtsp&id=" . $btsp_id;
                    $suabtsp = "index.php?act=suabtsp&id=" . $btsp_id;
                    echo '<tr>
                        <th><input type="checkbox"></th>
                        <th>' . $btsp_id . '</th>
                        <th>' . $btsp_ten . '</th>
                        <th>' . $btsp_giatien . '</th>
                        <th>' . $btsp_soluongconlai . '</th>
                        <th>' . $sp_id . '</th>
                        <th>' . $dm_id . '</th>
                        <th>' . $th_id . '</th>
                        <th>' . $dt_id . '</th>
                        <th><a href="' . $xoabtsp . '"><input class="c" type="button" value="xóa"></a>
                        <a href="' . $suabtsp . '"><input class="c" type="button" value="sửa"></a></th>
                    </tr>';
                }
                ?>
            </table>

        </div>
        <div class="nut_cn">
            <input class="mr" type="button" value="chọn tât cả" onclick="toggleCheckbox()">
            <input class="mr" type="button" value="bỏ chọn tất cả" onclick="uncheckAll()">
            <input class="mr" type="button" value="xóa mục đã chọn">
            <a href="index.php?act=addbtsp"><input type="button" value="nhập thêm"></a>
        </div>
    </div>

</div>
</div>
