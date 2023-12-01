<div class="row">
    <div>
        <h1 style="text-align: center; margin: 30px;">CHI TIẾT ĐƠN HÀNG</h1>
    </div>
    <div class="">
        <div class="">

            <table>
                <tr class="a" colspan="2">
                    <th class="b">DHCT_ID</th>
                    <th class="b">DH_ID </th>
                    <th class="b">Ảnh</th>
                    <th class="b">Tên biến thể sản phẩm</th>
                    <th class="b">SỐ LƯỢNG</th>
                    <th class="b">Thành tiền</th>
                    <?php
                    foreach ($one as $o) {
                        extract($o);
                        $img = "../assets/uploads/" . $sp_img;
                        if (is_file($img)) {
                            $hinh = "<img src='" . $img . "' height='100' width='75'>";
                        } else {
                            $hinh = "không hình ảnh";
                        }
                        echo '  <tr>
                            <th>' . $dhct_id . '</th>
                            <th>' . $dh_id . '</th>
                            <th>' . $hinh . '</th>
                            <th>' . $btsp_ten . '</th>
                            <th>' . $dhct_soluong . '</th>
                            <th>' . $thanh_tien . '</th>
                        </tr>';
                    }
                    ?>
            </table>
        </div>
    </div>

</div>
</div>