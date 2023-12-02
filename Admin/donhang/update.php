<?php
if (is_array($dh)) {
    extract($dh);
}
?>
<div class="row">
    <div class="row formtile mb10">
        <h1 style="text-align: center;">CẬP NHẬT DANH MỤC</h1>
    </div>
    <div>
        <form action="index.php?act=updatetrangthai" method="post">
            <div class="dulieu">
                ID ĐƠN HÀNG :
                <input type="text" value="<?= $dh_id  ?>" disabled>
                TRẠNG THÁI :
                <select name="trangthai">
                    <!-- <option value="<?php echo $dh_trangthaidonhang; ?>">Hiện tại: <?php echo $dh_trangthaidonhang; ?></option>
                    <option value="Đang xử lí">Đang xử lý</option>
                    <option value="Đang chuẩn bị hàng">đang chuẩn bị hàng</option>
                    <option value="Đã giao cho đơn vị vận chuyển">Đã giao cho đơn vị vận chuyển</option>
                    <option value="Đang giao">Đang giao</option>
                    <option value="Giao Hàng Thành công">Giao Hàng Thành công</option>
                    <option value="Giao Hàng Thất Bại">Giao Hàng Thất Bại</option> -->
                    <?php
                    $options = array(
                        "Đang xử lý",
                        "Đang chuẩn bị hàng",
                        "Đã giao cho đơn vị vận chuyển",
                        "Đang giao",
                        "Giao Hàng Thành công",
                        "Giao Hàng Thất Bại"
                    );

                    $selectedValue = $dh_trangthaidonhang;

                    // Find the index of the selected value in the options array
                    $selectedIndex = array_search($selectedValue, $options);

                    // Display options starting from the index of the selected value to the end of the array
                    echo '<option value="' . $dh_trangthaidonhang . '"> Hiện tại : ' .$dh_trangthaidonhang . '</option>';
                    for ($i = $selectedIndex + 1; $i < count($options); $i++) {
                        $optionValue = $options[$i];
                        echo '<option value="' . $optionValue . '">' . $optionValue . '</option>';
                    }
                    ?>
                </select>

            </div>
            <div class="nut_cn">
                <input type="hidden" name="id" value="<?php if (isset($dh_id) && ($dh_id > 0)) echo $dh_id; ?>">
                <input type="submit" name="thaydoi" value="Thay Đổi">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listdonhang"><input type="button" value="DANH SÁCH"></a>
            </div>


        </form>
    </div>


</div>