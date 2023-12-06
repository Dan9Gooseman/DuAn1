<?php
function loadall_user()
{
    $sql = "select * from user order by user_id";
    $listuser = pdo_query($sql);
    return $listuser;
}
function delete_user($id)
{
    $sql = "update user set is_active = 0 where user_id=" . $id;
    pdo_execute($sql);
}
