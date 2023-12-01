<?php


if (empty($_SESSION['nguoidung']) || empty($_SESSION['cart'])) {
    header('location: index.php');
} else {
    $diachinhanhang = diachinhanhang();
    $cartlistitem = pdo_giohangsanpham();
    $tongtien = 0;
    foreach ($cartlistitem as $item) {
        $tongtien += $item['btsp_giatien'] * $item['soluong'];
    }
}
function themvaodonhang($tongtien,$user_id,$phuongthucthanhtoan,$ghichu){
    $sql = "insert into donhang(dh_tongtien,user_id, dh_thanhtoan, dh_ghichu)
            values('$tongtien','$user_id','$phuongthucthanhtoan','$ghichu') ";
    pdo_execute($sql);
}
function laydonhangIDmoi(){
    $sql2 = "SELECT dh_id FROM donhang ORDER BY dh_id DESC LIMIT 1";
    $dh_id =  pdo_query_one($sql2);
    return $dh_id;
}
function themvaodonhangchitiet($dh_id){
    foreach($_SESSION['cart'] as $btsp_id => $soluong){
        $sql = "insert into donhangchitiet(btsp_id, dhct_soluong, dh_id)
                values('$btsp_id','$soluong','$dh_id')";
        pdo_execute($sql);
    }
}
if(isset($_POST['submit']) && ($_POST['submit'])){
    $user_id =  $_SESSION['nguoidung']['user_id'];
    $hovaten = $_POST['hovaten'];
    $diachi = $_POST['diachi'];
    $sdt = $_POST['sdt'];
    $user_email = $_POST['email'];
    $phuongthucthanhtoan = $_POST['phuongthucthanhtoan'];
    $ghichu = $_POST['ghichu'];
    $tongtien = $_POST['tongtien'];
    //tạo đơn hàng mới
    themvaodonhang($tongtien, $user_id,  $phuongthucthanhtoan, $ghichu);
    //lấy id đơn hàng mới về
    $dh_id = laydonhangIDmoi();
    $dh_id =  $dh_id['dh_id'];
    //thêm đơn hàng chi tiết
    themvaodonhangchitiet($dh_id);
    unset($_SESSION['cart']);
    $_SESSION['dathangthanhcong'] = 'đặt hàng thành công';
    header('location: index.php?act=dathangthanhcong');
}
?>