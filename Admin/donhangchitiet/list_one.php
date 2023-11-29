<div class="row">
    <div>
        <h1 style="text-align: center; margin: 30px;">CHI TIẾT ĐƠN HÀNG</h1>
    </div>
    <div class="">
        <div class="">

            <table>
                <tr class="a" colspan="2">
                    <th class="b"></th>
                    <th class="b">ID_DHCT</th>
                    <th class="b">ID_DH </th>
                    <th class="b">ID_BTSP</th>
                    <th class="b">SỐ LƯỢNG</th>
                <?php
                foreach ($one as $o) {
                extract($o);
                echo '  <tr>
                            <th><input type="checkbox"></th>
                            <th>' . $dhct_id . '</th>
                            <th>' . $dh_id . '</th>
                            <th>' . $btsp_id . '</th>
                            <th>' . $dhct_soluong . '</th>
                        </tr>';
                    }
                ?>
            </table>
        </div>
    </div>

</div>
</div>