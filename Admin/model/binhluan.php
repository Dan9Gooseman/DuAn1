<?php
function loadall_binhluan()
{
    $sql = "select * from binhluan order by bl_id";
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}
