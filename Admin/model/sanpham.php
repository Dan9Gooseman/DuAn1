<?php
function add_sanpham($sanpham_sp, $mota_sp, $img)
{
    $sql = "insert into sanpham(sp_ten,sp_mota,sp_img) value('$sanpham_sp','$mota_sp','$img') ";
    pdo_execute($sql);
}
function loadall_sanpham()
{
    $sql = "select * from sanpham order by sp_id";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function delete_sanpham($id)
{
    $sql = "delete from sanpham where sp_id=" . $id;
    pdo_execute($sql);
}
