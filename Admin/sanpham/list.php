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
                    <th class="b">MÔ TẢ SẢN PHẨM</th>
                    <th class="b">ẢNH SẢN PHẨM</th>
                    <th class="b">LƯỢT MUA SẢN PHẨM</th>
                    <th class="b"></th>
                </tr>
                <?php
                foreach ($listsanpham as $sp) {
                    extract($sp);
                    echo '<tr>
                    <th><input type="checkbox"></th>
                    <th>' . $sp_id . '</th>
                    <th>' . $sp_ten . '</th>
                    <th>' . $sp_mota . '</th>
                    <th></th>
                    <th>' . $sp_luotmua . '</th>
                    <th><a href="#"><input class="c" type="button" value="xóa"></a></th>
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