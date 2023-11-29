<div class="row">
    <div>
        <h1 style="text-align: center; margin: 30px;">DANH SÁCH ĐƠN HÀNG</h1>
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
                    <th class="b">ID ĐƠN HÀNG</th>
                    <th class="b">NGÀY TẠO</th>
                    <th class="b">TỔNG TIỀN</th>
                    <th class="b">THANH TOÁN</th> 
                    <th class="b">HỌ TÊN KHÁCH HÀNG</th>
                    <th class="b">SDT</th>
                    <th class="b">ĐỊA CHỈ</th>
                    <th class="b">TRẠNG THÁI ĐƠN HÀNG</th>
                    
                    <th class="b"></th>
                    
                </tr>
                <?php
                foreach ($listdonhang as $donhang) {
                    extract($donhang);
                    $suatrangthai = "index.php?act=suatrangthai&id=" . $dh_id;
                    $chitiet="index.php?act=list_one&iddh=".$dh_id;
                    echo '<tr>
                    <th><input type="checkbox"></th>
                    <th>' . $dh_id . '</th>
                    <th>' . $dh_ngaytao . '</th>
                    <th>' . $dh_tongtien . '</th>
                    <th>'.$dh_thanhtoan.'</th>
                    <th>'.$user_hovaten.'</th>
                    <th>'.$dcnh_sdt.'</th>
                    <th>'.$dcnh_diachi.'</th>
                    <th>'.$dh_trangthaidonhang.'</th>
                    
                    <th><a  href="'.$chitiet.'"><input class="c" type="button" value="Chi Tiết"></a>
                    <a href="' . $suatrangthai . '"><input class="c" type="button" value="sửa"></a></th></th>
                </tr>';
                }
                ?>
            </table>

        </div>
        <div class="nut_cn">
            <a  href="index.php?act=listdhct"><input type="button" value="Danh Sách DHCT"></a>
        </div>
    </div>

</div>
</div>