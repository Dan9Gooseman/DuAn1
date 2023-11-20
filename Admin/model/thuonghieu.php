<?php
function loadall_thuonghieu()
{
    $sql = "select * from thuonghieu order by th_id";
    $listthuonghieu = pdo_query($sql);
    return $listthuonghieu;
}
