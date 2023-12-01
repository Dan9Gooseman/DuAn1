<?php
function insert_user($user_hovaten, $user_email, $user_password)
{
    $sql = "insert into user(user_hovaten,user_email,user_password) values('$user_hovaten','$user_email','$user_password')";
    pdo_execute($sql);
}
function update_user($user_hovaten, $user_email, $user_id)
{
    $sql = "update user set user_hovaten='" . $user_hovaten . "', user_email='" . $user_email . "' where user_id=" . $user_id;
    pdo_execute($sql);
}
function update_userpass($user_password, $user_id)
{
    $sql = "update user set user_password='" . $user_password . "' where user_id=" . $user_id;
    pdo_execute($sql);
}
function checkuser($user_email, $user_password)
{
    $sql = "select * from user where user_email='" . $user_email . "' AND user_password='" . $user_password . "'";
    $tk = pdo_query_one($sql);
    return  $tk;
}
function checkemail($user_email)
{
    $sql = "select * from user where user_email='" . $user_email . "'";
    $sp = pdo_query_one($sql);
    return  $sp;
}
function diachinhanhang(){
    $user_id = $_SESSION['nguoidung']['user_id'];
    $sql = "select d.*, u.user_id,u.user_email 
            from diachinhanhang d
            join user u on d.dcnh_id = u.dcnh_id
            where u.user_id = '$user_id'";
    $diachinhanhang = pdo_query_one($sql);
    return $diachinhanhang;
    
}
