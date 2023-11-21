<?php
function loadall_thuonghieu()
{
    $sql = "select * from thuonghieu order by th_id";
    $listthuonghieu = pdo_query($sql);
    return $listthuonghieu;
}
function delete_thuonghieu($id)
{
    $sql = "delete from thuonghieu where th_id=" . $id;
    pdo_execute($sql);
}
