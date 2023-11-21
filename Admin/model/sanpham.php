<?php
function loadall_sanpham()
{
    $sql = "select * from sanpham order by sp_id";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
