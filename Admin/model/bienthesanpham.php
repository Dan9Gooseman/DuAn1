<?php
function loadall_bienthesanpham()
{
    $sql = "select * from bienthesanpham order by btsp_id";

    $listbienthesanpham = pdo_query($sql);
    return $listbienthesanpham;
}
<<<<<<< HEAD
function add_bienthesanpham($btsp_giatien,$btsp_soluongconlai,$btsp_ten){
    $sql="insert into bienthesanpham(btsp_giatien,btsp_soluongconlai,btsp_ten) value('$btsp_giatien','$btsp_soluongconlai','$btsp_ten')";
    pdo_execute($sql);
}

=======
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
function update_bienthesanpham($id,$name_btsp, $sl_btsp, $price_btsp, $sp1_id, $th1_id, $dt1_id, $dm1_id)
{
    $sql = "update bienthesanpham set btsp_ten='" . $name_btsp . "',btsp_soluongconlai='".$sl_btsp."',btsp_giatien='".$price_btsp."',sp_id='".$sp1_id."',th_id='".$th1_id."',dt_id='".$dt1_id."',dm_id='".$dm1_id."' where btsp_id=" . $id;
    pdo_execute($sql);
}
>>>>>>> 4605b8b58af363b60251878b700a7f5e486bd9a3
