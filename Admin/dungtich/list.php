<div class="row">
    <div>
        <h1 style="text-align: center; margin: 30px;">DANH SÁCH DUNG TÍCH</h1>
    </div>
    <div class="">
        <div class="">
        <div class="dulieu2">
        <input type="text" id="searchInput" placeholder="Nhập ký tự cần tìm kiếm">
        <button onclick="searchCharacter()">Tìm kiếm</button>
        <p id="result"></p></div>
            <table>
                <tr class="a">
                    <th class="b">MÃ DUNG TÍCH</th>
                    <th class="b">DUNG TÍCH</th>
                    <th class="b">TRẠNG THÁI</th>
                    <th class="b"></th>
                </tr>
                <?php
                foreach ($listdungtich as $dt) {
                    extract($dt);
                    // $xoadt = "index.php?act=xoadt&id=" . $dt_id;<th><a href="' . $xoadt . '"><input class="c" type="button" value="xóa"></a>
                    $suadt = "index.php?act=suadt&id=" . $dt_id;
                    echo '<tr>
                    <th style="width:12%;">' . $dt_id . '</th>
                    <th>' . $dt_dungtich . '</th>
                    <th>' . $is_active . '</th>
                    <th class="center">
                    
                    <a href="' . $suadt . '"><input class="c" type="button" value="sửa"></a></th>
                </tr>';
                }
                ?>
            </table>

        </div>
        <div class="nut_cn">
            <a href="index.php?act=adddt"><input type="button" value="nhập thêm"></a>
        </div>
    </div>

</div>
</div>