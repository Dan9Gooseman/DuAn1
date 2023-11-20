<?php

function loadall_danhmuc()
{
    $sql = "select * from danhmuc order by dm_id";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
