<div class="row">
    <div>
        <h1 style="text-align: center; margin: 30px;">THỐNG KÊ SẢN PHẨM</h1>
    </div>
    <div class="">
        <div class="">
            <div class="dulieu2">
                <input type="text" id="searchInput" placeholder="Nhập tên cần tìm kiếm">
                <button onclick="searchCharacter()">Tìm kiếm</button>
                <p id="result"></p>
            </div>
            <table>
                <tr class="a">
                    <th class="b">THỜI GIAN</th>
                    <th class="b">DOANH THU</th>
                </tr>
                <?php
                echo '<tr>
                            <th>30 Ngày vừa qua</th>
                            <th>' . number_format($doanhthu_30[0]['tong_tien']) . 'đ</th>
                        </tr>';
                ?>
            </table>
            <table>
                <tr class="a">
                    <th class="b">NĂM</th>
                    <th class="b">THÁNG</th>
                    <th class="b">DOANH THU</th>
                </tr>
                <?php
                foreach ($doanhthu_theothoigian as $thoigian) {
                    extract($thoigian);
                    echo '<tr>
                            <th>'.$nam.'</th>
                            <th>'.$thang.'</th>
                            <th>'.number_format($doanh_thu).'đ</th>
                        </tr>';
                }
                ?>
            </table>
            <div class="nut_cn">
                <a href="index.php?act=bieudo2"><input type="button" value="XEM BIỂU ĐỒ THỐNG KÊ DOANH THU THEO THÁNG"></a>
            </div>
            <table>
                <tr class="a">
                    <th class="b">MÃ SẢN PHẨM</th>
                    <th class="b">TÊN SẢN PHẨM</th>
                    <th class="b">SỐ LƯỢNG BIẾN THỂ</th>
                    <th class="b">GIÁ THẤP NHẤT</th>
                    <th class="b">GIÁ CAO NHẤT</th>
                    <th class="b">GIÁ TRUNG BÌNH</th>

                </tr>
                <?php
                foreach ($listthongke as $tk) {
                    extract($tk);
                    echo '<tr>
                    <th>' . $sp_id . '</th>
                    <th>' . $sp_ten . '</th>
                    <th>' . $countsp . '</th>
                    <th>' . number_format($mingiatien) . 'đ</th>
                    <th>' . number_format($maxgiatien) . 'đ</th>
                    <th>' . number_format($avggiatien) . 'đ</th>
                </tr>';
                }
                ?>
            </table>
            <div class="nut_cn">
                <a href="index.php?act=bieudo"><input type="button" value="XEM BIỂU ĐỒ THỐNG KÊ SẢN PHẨM VÀ BIẾN THỂ"></a>
            </div>
            <table>
                <tr class="a">
                    <th class="b">MÃ SẢN PHẨM</th>
                    <th class="b">TÊN SẢN PHẨM</th>
                    <th class="b">ẢNH SẢN PHẨM</th>
                    <th class="b">LƯỢT MUA</th>
                </tr>
                <?php
                foreach ($listsptop as $top) {
                    extract($top);
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
                    <th>' . $sp_luotmua . '</th>
                </tr>';
                }
                ?>
            </table>
            <div class="nut_cn">
                <a href="index.php?act=bieudo1"><input type="button" value="XEM BIỂU ĐỒ THỐNG KÊ SẢN PHẨM BÁN CHẠY"></a>
            </div>
        </div>
    </div>
</div>
</div>