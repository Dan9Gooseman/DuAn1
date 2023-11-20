<?php
function loadall_dungtich()
{
    $sql = "select * from dungtich order by dt_id";
    $listdungtich = pdo_query($sql);
    return  $listdungtich;
}
