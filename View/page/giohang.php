<div class="noti"><text><?php echo $thongbao; ?></text></div>
<div class="giohang">
    <div class="sanpham">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Sản phẩm</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Tạm tính</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($cartlistitem)) {
                    $tongtien = 0;
                    foreach ($cartlistitem as $item) {
                        echo '<tr>
                            <td>' . $item['btsp_ten'] . '</td>
                            <td>' . $item['btsp_giatien'] . '</td>
                            <td>' . $item['soluong'] . '</td>
                            <td>' . $item['btsp_giatien'] * $item['soluong'] . '</td>
                            <td>
                                <form method="post" action="">
                                    <input type="hidden" name="remove_item" value="' . $item['btsp_id'] . '">
                                    <button class="deleteBtn" type="submit">Xóa</button>
                                </form>
                            </td>
                        </tr>';
                        $tongtien += $item['btsp_giatien'] * $item['soluong'];
                    }
                }
                function removeItemFromCart($btsp_id) {
                    if (isset($_SESSION['cart'][$btsp_id])) {
                        unset($_SESSION['cart'][$btsp_id]);
                        header('location: index.php?act=giohang');
                    }
                }
                
                // Check if the remove button is clicked
                if (isset($_POST['remove_item'])) {
                    $removedItemId = $_POST['remove_item'];
                    removeItemFromCart($removedItemId);
                }
                ?>
            </tbody>
        </table>
        <div class="trangchu">
            <a href="index.php?act=" class="a goback">Tiếp tục mua hàng</a>
        </div>
    </div>
    <div class="divider"></div>
    <div class="conggiohang">
        <p class="title">cộng giỏ hàng</p>
        <div class="total"> Tổng :
            <span>
                <?php
                if (isset($tongtien)) {
                    echo number_format($tongtien) . 'đ';
                }
                ?>
            </span>
        </div>
        <div class="trangchu">
            <a href="index.php?act=thanhtoan" class="a goback">Thanh toán</a>
        </div>
    </div>
</div>