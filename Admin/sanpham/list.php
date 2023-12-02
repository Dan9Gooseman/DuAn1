<div class="row">
    <div>
        <h1 style="text-align: center; margin: 30px;">DANH SÁCH SẢN PHẨM</h1>
    </div>
    <div class="">
        <div class="">
        <div class="dulieu2">
        <input type="text" id="searchInput" placeholder="Nhập ký tự cần tìm kiếm">
        <button onclick="searchCharacter()">Tìm kiếm</button>
        <p id="result"></p></div>
            <table>
                <tr class="a">
                    <th class="b">MÃ SẢN PHẨM</th>
                    <th class="b">TÊN SẢN PHẨM</th>
                    <th class="b">ẢNH SẢN PHẨM</th>
                    <th class="b">MÔ TẢ SẢN PHẨM</th>
                    <th class="b">TRẠNG THÁI</th>
                    <th class="b">LƯỢT MUA</th>
                    <th class="b"></th>
                </tr>
                <?php
                foreach ($listsanpham as $sp) {
                    extract($sp);
                    // $xoasp = "index.php?act=xoasp&id=" . $sp_id;
                    $suasp = "index.php?act=suasp&id=" . $sp_id;
                    $img = "../assets/uploads/" . $sp_img;
                    if (is_file($img)) {
                        $hinh = "<img src='" . $img . "' height='300' width='150'>";
                    } else {
                        $hinh = "không hình ảnh";
                    }
                    echo '<tr>
                    <th style="width:12%;">' . $sp_id . '</th>
                    <th>' . $sp_ten . '</th>
                    <th>' . $hinh . '</th>
                    <th>' . $sp_mota . '</th>
                    <th>'.$is_active.'</th>
                    <th>' . $sp_luotmua . '</th>
                    <th class="center">
                    <a href="' . $suasp . '"><input class="c" type="button" value="sửa"></a></th>
                </tr>';
                }
                ?>
            </table>

        </div>
        <div class="nut_cn">
            <a href="index.php?act=addsp"><input type="button" value="nhập thêm"></a>
        </div>
    </div>

</div>
</div>