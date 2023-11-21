<?php
function loadall_user()
{
    $sql = "select * from user order by user_id";
    $listuser = pdo_query($sql);
    return $listuser;
}
