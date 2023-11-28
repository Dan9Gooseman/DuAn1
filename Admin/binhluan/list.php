<div class="row">
    <div>
        <h1 style="text-align: center; margin: 30px;">DANH SÁCH BÌNH LUẬN</h1>
    </div>
    <div class="">
        <div class="">
            <div class="dulieu2">
        <input type="text" id="searchInput" placeholder="Nhập ký tự cần tìm kiếm">
        <button onclick="searchCharacter()">Tìm kiếm</button>
        <p id="result"></p></div>
            <table>
                <tr class="a">
                    <th class="b"></th>
                    <th class="b">MÃ BÌNH LUẬN</th>
                    <th class="b">NỘI DUNG BÌNH LUẬN</th>
                    <th class="b">ID USER</th>
                    <th class="b">ID PRODUCT</th>
                    <th class="b">NGÀY BÌNH LUẬN</th>
                    <th class="b"></th>
                </tr>
                <?php
                foreach ($listbinhluan as $bl) {
                    extract($bl);
                    $xoabl = "index.php?act=xoabl&id=" . $bl_id;
                    echo '<tr>
                    <th></th>
                    <th>' . $bl_id . '</th>
                    <th>' . $bl_noidung . '</th>
                    <th' . $user_id . '</th>
                    <th>' . $btsp_id . '</th>
                    <th>' . $bl_ngaytao . '</th>
                    <th><a href="' . $xoabl . '"><input class="c" type="button" value="xóa"></a>
                  </th>
                </tr>';
                }
                ?>


            </table>

        </div>
        <div class="nut_cn">
            <input class="mr" type="button" value="chọn tât cả" onclick="toggleCheckbox()">
            <input class="mr" type="button" value="bỏ chọn tất cả"onclick="uncheckAll()">
            <input class="mr" type="button" value="xóa mục đã chọn">
        </div>
    </div>

</div>
</div>
<script>
    function toggleCheckbox() {
        var checkboxes = document.getElementsByTagName('input');
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].type == 'checkbox') {
                checkboxes[i].checked = !checkboxes[i].checked;
            }
        }
    }
</script>
