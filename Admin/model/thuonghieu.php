<?php
function add_thuonghieu($thuonghieu_th)
{
    $sql = "insert into thuonghieu(th_thuonghieu) value('$thuonghieu_th') ";
    pdo_execute($sql);
}
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
