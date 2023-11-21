<?php
function loadall_donhang()
{
    $sql = "select * from donhang order by dh_id";
    $listdonhang = pdo_query($sql);
    return $listdonhang;
}
