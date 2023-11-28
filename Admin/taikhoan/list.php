<div class="row">
    <div>
        <h1 style="text-align: center; margin: 30px;">DANH SÁCH TÀI KHOẢN KHÁCH HÀNG</h1>
    </div>
    <div class="">
        <div class="">
        <div class="dulieu2">
        <input type="text" id="searchInput" placeholder="Nhập ký tự cần tìm kiếm">
        <button onclick="searchCharacter()">Tìm kiếm</button>
        <p id="result"></p>
    </div>
            <table>
                <tr class="a">
                    <th class="b"></th>
                    <th class="b">MÃ TÀI KHOẢN</th>
                    <th class="b">USER</th>
                    <th class="b">PASS</th>
                    <th class="b">EMAIL</th>
                    <th class="b">ADDRESS</th>
                    <th class="b">ROLE</th>
                    <th class="b"> </th>
                </tr>
                <?php
                foreach ($listuser as $user) {
                    extract($user);
                    $xoauser = "index.php?act=xoauser&id=" . $user_id;
                    echo '<tr>
                    <th><input type="checkbox"></th>
                    <th>' . $user_id . '</th>
                    <th>' . $user_hovaten . '</th>
                    <th>' . $user_password . '</th>
                    <th>' . $user_email . '</th>
                    <th>' . $dcnh_id . '</th>
                    <th>' . $user_vaitro . '</th>
                    <th class="center"><a href="' . $xoauser . '"><input class="c" type="button" value="xóa"></a></th>
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