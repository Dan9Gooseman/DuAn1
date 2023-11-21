<?php
function loadall_dungtich()
{
    $sql = "select * from dungtich order by dt_id";
    $listdungtich = pdo_query($sql);
    return  $listdungtich;
}
function delete_dungtich($id)
{
    $sql = "delete from dungtich where dt_id=" . $id;
    pdo_execute($sql);
}
