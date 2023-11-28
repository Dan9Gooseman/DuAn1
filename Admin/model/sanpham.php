<?php
function add_sanpham($sanpham_sp, $mota_sp, $img,$on_off)
{
    $sql = "insert into sanpham(sp_ten,sp_mota,sp_img,is_active) value('$sanpham_sp','$mota_sp','$img','$on_off') ";
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
function loadone_sanpham($id)
{
    $sql = "select * from sanpham where sp_id=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_sanpham($id, $name, $mota,$on_off)
{
    $sql = "update sanpham set sp_ten='" . $name . "', sp_mota='" . $mota . "',is_active='".$on_off."' where sp_id=" . $id;
    pdo_execute($sql);
}
