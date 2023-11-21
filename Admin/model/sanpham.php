<?php
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
