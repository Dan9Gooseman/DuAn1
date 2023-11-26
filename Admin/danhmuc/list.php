<div class="row">
    <div>
        <h1 style="text-align: center; margin: 30px;">DANH SÁCH DANH MỤC</h1>
    </div>
    <div class="">
        <div class="">
            <div class="dulieu2">
        <input type="text" id="searchInput" placeholder="Nhập ký tự cần tìm kiếm">
        <button onclick="searchCharacter()">Tìm kiếm</button>
        <p id="result"></p></div>
            <table>
                <tr class="a">
                    <th class="b"></th>
                    <th class="b">MÃ DANH MỤC</th>
                    <th class="b">TÊN DANH MỤC</th>
                    <th class="b">TRẠNG THÁI</th>
                    <th class="b"></th>
                </tr>
                <?php
                foreach ($listdanhmuc as $dm) {
                    extract($dm);
                    // $xoadm = "index.php?act=xoadm&id=" . $dm_id;<a href="' . $xoadm . '"><input class="c" type="button" value="xóa"></a>
                    $suadm = "index.php?act=suadm&id=" . $dm_id;
                    echo '<tr>
                        <th><input type="checkbox"></th>
                        <th>' . $dm_id . '</th>
                        <th>' . $dm_danhmuc . '</th>
                        <th>' . $is_active . '</th>
                        
                        <th class="center">
                        
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