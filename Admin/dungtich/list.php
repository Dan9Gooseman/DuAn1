<div class="row">
    <div>
        <h1 style="text-align: center; margin: 30px;">DANH SÁCH DUNG TÍCH</h1>
    </div>
    <div class="">
        <div class="">
            <table>
                <tr class="a">
                    <th class="b"></th>
                    <th class="b">MÃ DUNG TÍCH</th>
                    <th class="b">DUNG TÍCH</th>
                    <th class="b"></th>
                </tr>
                <?php
                foreach ($listdungtich as $dt) {
                    extract($dt);
                    $xoadt = "index.php?act=xoadt&id=" . $dt_id;
                    $suadt = "index.php?act=xoadt&id=" . $dt_id;
                    echo '<tr>
                    <th><input type="checkbox"></th>
                    <th>' . $dt_id . '</th>
                    <th>' . $dt_dungtich . '</th>
                    
                    <th><a href="' . $xoadt . '"><input class="c" type="button" value="xóa"></a>
                    <a href="' . $suadt . '"><input class="c" type="button" value="sửa"></a></th>
                </tr>';
                }
                ?>
                <!-- <tr>
                    <th></th>
                    <th>MÃ DUNG TÍCH</th>
                    <th>DUNG TÍCH</th>
                    <th></th>
                </tr>
                <tr>
                    <th></th>
                    <th>MÃ DUNG TÍCH</th>
                    <th>DUNG TÍCH</th>
                    <th></th>
                </tr> -->
            </table>

        </div>
        <div class="nut_cn">
            <input class="mr" type="button" value="chọn tât cả">
            <input class="mr" type="button" value="bỏ chọn tất cả">
            <input class="mr" type="button" value="xóa mục đã chọn">
            <a href="index.php?act=adddt"><input type="button" value="nhập thêm"></a>
        </div>
    </div>

</div>
</div>