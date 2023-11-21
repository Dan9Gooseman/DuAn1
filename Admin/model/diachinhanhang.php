<?php
function loadall_dcnh()
{
    $sql = "select * from diachinhanhang order by dcnh_id";
    $listdcnh = pdo_query($sql);
    return $listdcnh;
}
