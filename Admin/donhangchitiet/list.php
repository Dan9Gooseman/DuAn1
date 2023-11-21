<div class="row">
    <div>
        <h1 style="text-align: center; margin: 30px;">DANH SÁCH TÀI KHOẢN KHÁCH HÀNG</h1>
    </div>
    <div class="">
        <div class="">
            <table>
                <tr class="a">
                    <th class="b"></th>
                    <th class="b">ID ĐƠN HÀNG CT</th>
                    <th class="b">ID BTSP</th>
                    <th class="b">SỐ LƯỢNG</th>
                    <th class="b">THANH TOÁN</th>
                    <th class="b"> GIAO HÀNG</th>
                    <th class="b">ID ĐƠN HÀNG </th>
                </tr>
                <?php
                foreach ($listdhct as $dhct) {
                    extract($dhct);
                    echo '
                            <th><input type="checkbox"></th>
                            <th>' . $dhct_id . '</th>
                            <th>' . $btsp_id . '</th>
                            <th>' . $dhct_soluong . '</th>
                            <th>' . $dhct_thanhtoan . '</th>
                            <th>' . $dhct_giaohang . '</th>
                            <th>' . $dh_id . '</th>
                        </tr>';
                }
                ?>
            </table>

        </div>
        <!-- <div class="nut_cn">
            <input class="mr" type="button" value="chọn tât cả">
            <input class="mr" type="button" value="bỏ chọn tất cả">
            <input class="mr" type="button" value="xóa mục đã chọn">
        </div> -->
    </div>

</div>
</div>