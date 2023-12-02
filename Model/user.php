<?php
function insert_user($user_hovaten, $user_email, $user_password)
{
    $sql = "insert into user(user_hovaten,user_email,user_password) values('$user_hovaten','$user_email','$user_password')";
    pdo_execute($sql);
}
function update_user($user_hovaten, $user_email, $user_id)
{
    $sql = "update user set user_hovaten='" . $user_hovaten . "', user_email='" . $user_email . "' where user_id=" . $user_id;
    pdo_execute($sql);
}
function update_userpass($user_password, $user_id)
{
    $sql = "update user set user_password='" . $user_password . "' where user_id=" . $user_id;
    pdo_execute($sql);
}
function checkuser($user_email, $user_password)
{
    $sql = "select * from user where user_email='" . $user_email . "' AND user_password='" . $user_password . "'";
    $tk = pdo_query_one($sql);
    return  $tk;
}
function checkemail($user_email)
{
    $sql = "select * from user where user_email='" . $user_email . "'";
    $sp = pdo_query_one($sql);
    return  $sp;
}
function diachinhanhang()
{
    $user_id = $_SESSION['nguoidung']['user_id'];
    $sql = "select d.*, u.user_id,u.user_email 
            from diachinhanhang d
            join user u on d.dcnh_id = u.dcnh_id
            where u.user_id = '$user_id'";
    $diachinhanhang = pdo_query_one($sql);
    return $diachinhanhang;
}
function loadone_donhang($iddh)
{
    $sql = "select * from donhang where dh_id='" . $iddh . "'";
    $onedonhang = pdo_query_one($sql);
    return $onedonhang;
}
function update_diachi($dcnh_hovaten, $dcnh_sdt, $dcnh_diachi, $dcnh_id)
{
    // var_dump($dcnh_hovaten);
    $sql = "update diachinhanhang set dcnh_hovaten='" . $dcnh_hovaten . "', dcnh_sdt='" . $dcnh_sdt . "', 
    dcnh_diachi='" . $dcnh_diachi . "' where dcnh_id=" . $dcnh_id;
    pdo_execute($sql);

    $sql_dcnh = "select * from diachinhanhang where dcnh_id='" . $dcnh_id . "'";
    $dc_capnhat = pdo_query_one($sql_dcnh);
    // var_dump($dc_capnhat);
    return $dc_capnhat;
}

function update_trangthaidonhang($id)
{
    $trangthaimoi = "Đã hủy";
    $sql = "update donhang set dh_trangthaidonhang='" . $trangthaimoi . "' where dh_id=" . $id;
    pdo_execute($sql);
}
function loadall_donhang()
{
    if (isset($_SESSION['nguoidung']) && $_SESSION['nguoidung']['user_hovaten']) {
        $user_id = $_SESSION["nguoidung"]["user_id"];
        // var_dump($user_id);
        $sql = "select dh.dh_id, dh.dh_ngaytao, dh.dh_tongtien, dh.dh_thanhtoan, u.user_hovaten, dcnh.dcnh_sdt, dcnh.dcnh_diachi, dh.dh_trangthaidonhang";
        $sql .= " FROM donhang dh";
        $sql .= " JOIN user u ON dh.user_id = u.user_id";
        $sql .= " JOIN diachinhanhang dcnh ON u.dcnh_id = dcnh.dcnh_id";
        $sql .= " WHERE u.user_id =" . $user_id;
        // var_dump($sql);
        $listdonhang = pdo_query($sql);
        return $listdonhang;
    }
}
