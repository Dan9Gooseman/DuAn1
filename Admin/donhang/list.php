<div class="row">
    <div>
        <h1 style="text-align: center; margin: 30px;">DANH SÁCH TÀI KHOẢN KHÁCH HÀNG</h1>
    </div>
    <div class="">
        <div class="">
            <table>
                <tr class="a">
                    <th class="b"></th>
                    <th class="b">ID ĐƠN HÀNG</th>
                    <th class="b">NGÀY TẠO</th>
                    <th class="b">TỔNG TIỀN</th>
                    <th class="b">TRẠNG THÁI ĐƠN HÀNG</th>
                    <th class="b">ID NGƯỜI DÙNG</th>
                    <th class="b"> </th>
                </tr>
                <?php
                foreach ($listdonhang as $donhang) {
                    extract($donhang);
                    echo '<tr>
                    <th><input type="checkbox"></th>
                    <th>' . $dh_id . '</th>
                    <th>' . $dh_ngaytao . '</th>
                    <th>' . $dh_tongtien . '</th>
                    <th>' . $dh_trangthaidonhang . '</th>
                    <th>' . $user_id . '</th>
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