<?php
function loadall_bienthesanpham()
{
    $sql = "select * from bienthesanpham order by btsp_id";

    $listbienthesanpham = pdo_query($sql);
    return $listbienthesanpham;
}
