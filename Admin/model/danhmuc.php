<?php

function loadall_danhmuc()
{
    $sql = "select * from danhmuc order by dm_id";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function delete_danhmuc($id)
{
    $sql = "delete from danhmuc where dm_id=" . $id;
    pdo_execute($sql);
}
