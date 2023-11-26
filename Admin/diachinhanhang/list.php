<div class="row">
    <div>
        <h1 style="text-align: center; margin: 30px;">DANH SÁCH TÀI KHOẢN KHÁCH HÀNG</h1>
    </div>
    <div class="">
        <div class="">
            <table>
                <tr class="a">
                    <th class="b"></th>
                    <th class="b">ID ĐỊA CHỈ</th>
                    <th class="b">ĐỊA CHỈ</th>
                    <th class="b">SỐ ĐIỆN THOẠI</th>
                    <th class="b">HỌ VÀ TÊN</th>
                </tr>
                <?php

                foreach ($listdcnh as $dcnh) {
                    extract($dcnh);
                    echo '<tr>
                    <th><input type="checkbox"></th>
                    <th>' . $dcnh_id . '</th>
                    <th>' . $dcnh_diachi . '</th>
                    <th>' . $dcnh_sdt . '</th>
                    <th>' . $dcnh_hovaten . '</th>
    </tr>';
                }

                ?>
            </table>

        </div>
        <div class="nut_cn">
        <input class="mr" type="button" value="chọn tât cả"  onclick="toggleCheckbox()">
            <input class="mr" type="button" value="bỏ chọn tất cả" onclick="uncheckAll()">
            <input class="mr" type="button" value="xóa mục đã chọn">
        </div>
    </div>

</div>
</div>