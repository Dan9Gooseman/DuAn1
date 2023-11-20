<div class="row">
    <div>
        <h1 style="text-align: center; margin: 30px;">DANH SÁCH THƯƠNG HIỆU</h1>
    </div>
    <div class="">
        <div class="">
            <table>
                <tr class="a">
                    <th class="b"></th>
                    <th class="b">MÃ THƯƠNG HIỆU</th>
                    <th class="b">THƯƠNG HIỆU</th>
                    <th class="b"></th>
                </tr>
                <?php
                foreach ($listthuonghieu as $th) {
                    extract($th);
                    echo '<tr>
                        <th><input type="checkbox"></th>
                        <th>' . $th_id . '</th>
                        <th>' . $th_thuonghieu . '</th>
                        <th><a href="#"><input class="c" type="button" value="xóa"></a>
                        <a href="#"><input class="c" type="button" value="sửa"></a></th>
                    </tr>';
                }
                ?>
            </table>

        </div>
        <div class="nut_cn">
            <input class="mr" type="button" value="chọn tât cả">
            <input class="mr" type="button" value="bỏ chọn tất cả">
            <input class="mr" type="button" value="xóa mục đã chọn">
            <a href="index.php?act=addth"><input type="button" value="nhập thêm"></a>
        </div>
    </div>

</div>
</div>