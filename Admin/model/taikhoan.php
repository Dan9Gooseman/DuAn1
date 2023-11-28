<?php
function loadall_user()
{
    $sql = "select * from user order by user_id";
    $listuser = pdo_query($sql);
    return $listuser;
}
function delete_user($id)
{
    $sql = "delete from user where user_id=" . $id;
    pdo_execute($sql);
}
