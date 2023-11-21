<div class="row">
    <div>
        <h1 style="text-align: center; margin: 30px;">DANH SÁCH BÌNH LUẬN</h1>
    </div>
    <div class="">
        <div class="">
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
            <input class="mr" type="button" value="chọn tât cả">
            <input class="mr" type="button" value="bỏ chọn tất cả">
            <input class="mr" type="button" value="xóa mục đã chọn">
        </div>
    </div>

</div>
</div>