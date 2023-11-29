<?php
function loadall_bienthesanpham()
{
    $sql = "select * from bienthesanpham order by btsp_id desc ";

    $listbienthesanpham = pdo_query($sql);
    return $listbienthesanpham;
}
function add_btsp($name_btsp, $sl_btsp, $price_btsp, $sp_id, $th_id, $dt_id, $dm_id)
{
    $sql = "insert into bienthesanpham(btsp_ten,btsp_soluongconlai,btsp_giatien,sp_id,th_id,dt_id,dm_id) value('$name_btsp', '$sl_btsp', '$price_btsp','$sp_id', '$th_id', '$dt_id', '$dm_id') ";
    pdo_execute($sql);
}
function delete_btsp($id)
{
    $sql = "delete from bienthesanpham where btsp_id=" . $id;
    pdo_execute($sql);
}

function loadone_bienthesanpham($id)
{
    $sql = "select * from bienthesanpham where btsp_id=" . $id;
    $btsp = pdo_query_one($sql);
    return $btsp;
}
function  update_bienthesanpham($id,$btsp_ten, $btsp_gia, $btsp_soluong, $sp_id, $th_id, $dt_id, $dm_id){
    $sql = "update bienthesanpham set btsp_ten='" . $btsp_ten . "',btsp_soluongconlai='".$btsp_soluong."',btsp_giatien='".$btsp_gia."',sp_id='".$sp_id."',th_id='".$th_id."',dt_id='".$dt_id."',dm_id='".$dm_id."' where btsp_id=" . $id;
    pdo_execute($sql);
}