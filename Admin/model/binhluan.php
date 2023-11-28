<?php
function loadall_binhluan()
{
    $sql = "select * from binhluan order by bl_id";
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}

function delete_binhluan($id)
{
    $sql = "delete from binhluan where bl_id=" . $id;
    pdo_execute($sql);
}
