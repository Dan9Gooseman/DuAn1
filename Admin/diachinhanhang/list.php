<div class="row">
    <div>
        <h1 style="text-align: center; margin: 30px;">DANH SÁCH ĐỊA CHỈ NHẬN HÀNG</h1>
    </div>
    <div class="">
        <div class="">
            <div class="dulieu2">
        <input type="text" id="searchInput" placeholder="Nhập ký tự cần tìm kiếm">
        <button onclick="searchCharacter()">Tìm kiếm</button></div>
        <p id="result"></p>
            <table>
                <tr class="a">
                    <th class="b">ID ĐỊA CHỈ</th>
                    <th class="b">ĐỊA CHỈ</th>
                    <th class="b">SỐ ĐIỆN THOẠI</th>
                    <th class="b">HỌ VÀ TÊN</th>
                </tr>
                <?php

                foreach ($listdcnh as $dcnh) {
                    extract($dcnh);
                    echo '<tr>
                    <th style="width:12%;">' . $dcnh_id . '</th>
                    <th>' . $dcnh_diachi . '</th>
                    <th>' . $dcnh_sdt . '</th>
                    <th>' . $dcnh_hovaten . '</th>
    </tr>';
                }

                ?>
            </table>

        </div>
    </div>

</div>
</div>