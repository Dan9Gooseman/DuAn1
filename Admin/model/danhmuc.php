<?php
function insert_danhmuc($name_dm)
{
    $sql = "insert into danhmuc(dm_danhmuc) value('$name_dm')";
    pdo_execute($sql);
}
function delete_danhmuc($id)
{
    $sql = "delete from danhmuc where dm_id=" . $id;
    pdo_execute($sql);
}
function loadall_danhmuc()
{
    $sql = "select * from danhmuc order by id desc ";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function loadone_danhmuc($id)
{
    $sql = "select * from danhmuc where dm_id=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}
