<?php
function loadall_donhang()
{

    $sql=" select dh.dh_id, dh.dh_ngaytao, dh.dh_tongtien, dh.dh_thanhtoan, u.user_hovaten, dcnh.dcnh_sdt , dcnh.dcnh_diachi, dh.dh_trangthaidonhang";
    $sql.=" from donhang dh";
    $sql.=" JOIN user u on dh.user_id = u.user_id";
    $sql.=" JOIN diachinhanhang dcnh on u.dcnh_id = dcnh.dcnh_id";
    $listdonhang = pdo_query($sql);
    return $listdonhang;
}
function loadone_donhang($id)
{
    $sql = "select * from donhang where dh_id=" . $id;
    $dh = pdo_query_one($sql);
    return $dh;
}
function update_trangthai($id,$trangthai)
{
    $sql = "update donhang set dh_trangthaidonhang='" . $trangthai . "' where dh_id=" . $id;
    pdo_execute($sql);
}
