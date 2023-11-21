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
                    <th class="b"> </th>
                </tr>
                <?php

                foreach ($listdcnh as $dcnh) {
                    extract($dcnh);
                    echo '<tr>
                    <th><input type="checkbox"></th>
                    <th>' . $user_id . '</th>
                    <th>' . $user_hovaten . '</th>
                    <th>' . $user_password . '</th>
                    <th>' . $user_email . '</th>
                    <th>' . $dcnh_id . '</th>
                    <th>' . $user_vaitro . '</th>
                    <th></th>
    </tr>';
                }

                ?>
            </table>

        </div>
        <div class="nut_cn">
            <input class="mr" type="button" value="chọn tât cả">
            <input class="mr" type="button" value="bỏ chọn tất cả">
            <input class="mr" type="button" value="xóa mục đã chọn">
        </div>
    </div>

</div>
</div>