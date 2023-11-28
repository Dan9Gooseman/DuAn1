<?php
function loadall_dhct()
{
    $sql = "select * from donhangchitiet order by dhct_id";
    $listdhct = pdo_query($sql);
    return $listdhct;
}
