<div class="row">
    <div>
        <h1 style="text-align: center; margin: 30px;">DANH SÁCH TÀI KHOẢN</h1>
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
                    <th class="b">MÃ TÀI KHOẢN</th>
                    <th class="b">USER</th>
                    <th class="b">MẬT KHẨU</th>
                    <th class="b">EMAIL</th>
                    <th class="b">ROLE</th>
                    <th class="b">KÍCH HOẠT</th>
                    <th class="b"> </th>
                </tr>
                <?php
                foreach ($listuser as $user) {
                    extract($user);
                    if($is_active == 1){$is_active = "Đang hoạt động";} else {$is_active = "Ngừng hoạt động";}
                    $xoauser = "index.php?act=xoauser&id=" . $user_id;
                    echo '<tr>
                    <th style="width:12%;">' . $user_id . '</th>
                    <th>' . $user_hovaten . '</th>
                    <th>' . $user_password . '</th>
                    <th>' . $user_email . '</th>
                    <th>' . $user_vaitro . '</th>
                    <th>' . $is_active . '</th>
                    <th class="center"><a href="' . $xoauser . '"><input class="c" type="button" value="xóa"></a></th>
                </tr>';
                }
                ?>
            </table>

        </div>
    </div>

</div>
</div>