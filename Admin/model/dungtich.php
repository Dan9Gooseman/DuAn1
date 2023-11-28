<?php
function add_dungtich($dungtich_dt,$on_off)
{
    $sql = "insert into dungtich(dt_dungtich, is_active) value('$dungtich_dt','$on_off') ";
    pdo_execute($sql);
}
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
function loadone_dungtich($id)
{
    $sql = "select * from dungtich where dt_id=" . $id;
    $dt = pdo_query_one($sql);
    return $dt;
}
function update_dungtich($id, $dt_dungtich,$on_off)
{
    $sql = "update dungtich set dt_dungtich='" . $dt_dungtich . "', is_active='". $on_off ."' where dt_id=" . $id;
    pdo_execute($sql);
}
