<div class="show">
        <table>
            <tr class="a">
                <th class="b" style="width:400px;">TÊN SẢN PHẨM</th>
                <th class="b" style="width:120px;">Số lượng</th>
                <th class="b" style="width:150px;">THÀNH TIỀN</th>
                <th class="b"></th>
            </tr>
            <?php
            if (isset($listsanphamtrongdonhang)) {
                foreach ($listsanphamtrongdonhang as $sanpham) : ?>
                    <tr>
                        <th> <?= $sanpham['btsp_ten'] ?> </th>
                        <th> <?= $sanpham['dhct_soluong'] ?> </th>
                        <th> <?= number_format($sanpham['btsp_giatien'] * $sanpham['dhct_soluong']) . 'đ' ?> </th>
                        <th>
                            <?php
                            echo '<a href="index.php?act=chitietsanpham&sp_id=' . $sanpham['sp_id'] . '"><input class="c" id="nuthuydh" type="button" value="Xem sản phẩm" name="xemsanpham"></a>';
                            ?>
                        </th>
                    </tr>
            <?php endforeach;
            } ?>

        </table>
    </div>