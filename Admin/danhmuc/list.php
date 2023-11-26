<div class="row">
    <div>
        <h1 style="text-align: center; margin: 30px;">DANH SÁCH DANH MỤC</h1>
    </div>
    <div class="">
        <div class="">
            <table>
                <tr class="a">
                    <th class="b"></th>
                    <th class="b">MÃ DANH MỤC</th>
                    <th class="b">TÊN DANH MỤC</th>
                    <th class="b">Trạng Thái</th>
                    <th class="b"></th>
                </tr>
                <?php
                foreach ($listdanhmuc as $dm) {
                    extract($dm);
                    $xoadm = "index.php?act=xoadm&id=" . $dm_id;
                    $suadm = "index.php?act=suadm&id=" . $dm_id;
                    echo '<tr>
                        <th><input type="checkbox"></th>
                        <th>' . $dm_id . '</th>
                        <th>' . $dm_danhmuc . '</th>
                        <th>'.$is_active.'</th>
                        <th><a href="' . $xoadm . '"><input class="c" type="button" value="xóa"></a>
                        <a href="' . $suadm . '"><input class="c" type="button" value="sửa"></a></th>
                    </tr>';
                }
                ?>
            </table>

        </div>
        <div class="nut_cn">
            <input class="mr" type="button" value="chọn tât cả"  onclick="toggleCheckbox()">
            <input class="mr" type="button" value="bỏ chọn tất cả" onclick="uncheckAll()">
            <input class="mr" type="button" value="xóa mục đã chọn">
            <a href="index.php?act=adddm"><input type="button" value="nhập thêm"></a>
        </div>
    </div>

</div>
</div>