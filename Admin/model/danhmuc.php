<?php
function add_danhmuc($danhmuc_dm,$on_off)
{
    $sql = "insert into danhmuc(dm_danhmuc,is_active) value('$danhmuc_dm','$on_off') ";
    pdo_execute($sql);
}

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

function loadone_danhmuc($id)
{
    $sql = "select * from danhmuc where dm_id=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($dm_id, $dm_danhmuc)
{
    $sql = "update danhmuc set dm_danhmuc='" . $dm_danhmuc . "' where dm_id=" . $dm_id;
    pdo_execute($sql);
}
