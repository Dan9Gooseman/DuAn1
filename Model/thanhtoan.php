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
function updatediachinguoidung($dcnh_id,$diachi,$sdt,$hovaten,$user_id){
    if(isset($dcnh_id)){
        $sql = "update diachinhanhang
                set dcnh_diachi = '$diachi', dcnh_sdt = '$sdt', dcnh_hovaten = $hovaten
                where dcnh_id = '$dcnh_id'";
        pdo_execute($sql);
    }else{
        $sql1 = "insert into diachinhanhang (dcnh_diachi, dcnh_sdt, dcnh_hovaten)
                values ('$diachi', '$sdt','$hovaten')";
        $sql2 = "update user
                set dcnh_id = ( select dcnh_id from diachinhanhang order by dcnh_id DESC limit 1)
                where user_id = '$user_id'";
        pdo_execute($sql1);
        pdo_execute($sql2);
    }
}
if(isset($_POST['submit']) && ($_POST['submit'])){
    $user_id =  $_SESSION['nguoidung']['user_id'];
    $dcnh_id = $_POST['dcnh_id'];
    $hovaten = $_POST['hovaten'];
    $diachi = $_POST['diachi'];
    $sdt = $_POST['sdt'];
    $user_email = $_POST['email'];
    $phuongthucthanhtoan = $_POST['phuongthucthanhtoan'];
    $ghichu = $_POST['ghichu'];
    $tongtien = $_POST['tongtien'];
    //update địa chỉ nhận hàng
    // updatediachinguoidung($dcnh_id,$diachi,$sdt,$hovaten,$user_id);
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