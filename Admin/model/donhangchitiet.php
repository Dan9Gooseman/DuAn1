<?php
function loadall_dhct()
{
    $sql = "select * from donhangchitiet order by dhct_id";
    $listdhct = pdo_query($sql);
    return $listdhct;
}
function list_one($id)
{
    $sql = "select * from donhangchitiet where dh_id=" . $id;
    $one = pdo_query($sql);
    return $one;
}

