<div class="row">
    <div>
        <h1 style="text-align: center; margin: 30px;">DANH SÁCH THƯƠNG HIỆU</h1>
    </div>
    <div class="">
        <div class="">
        <div class="dulieu2">
        <input type="text" id="searchInput" placeholder="Nhập ký tự cần tìm kiếm">
        <button onclick="searchCharacter()">Tìm kiếm</button>
        <p id="result"></p></div>
            <table>
                <tr class="a">
                    <th class="b">MÃ THƯƠNG HIỆU</th>
                    <th class="b">THƯƠNG HIỆU</th>
                    <th class="b">TRẠNG THÁI</th>
                    <th class="b"></th>
                </tr>
                <?php
                foreach ($listthuonghieu as $th) {
                    extract($th);
                    // $xoath = "index.php?act=xoath&id=" . $th_id;<a href="' . $xoath . '"><input class="c" type="button" value="xóa"></a>
                    $suath = "index.php?act=suath&id=" . $th_id;
                    echo '<tr>
                        <th style="width:12%;">' . $th_id . '</th>
                        <th>' . $th_thuonghieu . '</th>
                        <th>'.$is_active.'</th>
                        <th class="center">
                        <a href="' . $suath . '"><input class="c" type="button" value="sửa"></a></th>
                    </tr>';
                }
                ?>
            </table>

        </div>
        <div class="nut_cn">
            <a href="index.php?act=addth"><input type="button" value="nhập thêm"></a>
        </div>
    </div>

</div>
</div>