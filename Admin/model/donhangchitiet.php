<?php
function loadall_dhct()
{
    $sql = "select * from donhangchitiet order by dhct_id";
    $listdhct = pdo_query($sql);
    return $listdhct;
}
function list_one($id)
{
    $sql = "select dhct.*, btsp.btsp_ten, (btsp_giatien * dhct_soluong) as thanh_tien, sp.sp_img
            from donhangchitiet dhct 
            join bienthesanpham btsp on dhct.btsp_id = btsp.btsp_id 
            join sanpham sp on btsp.sp_id = sp.sp_id 
            where dhct.dh_id=" . $id;
    $one = pdo_query($sql);
    return $one;
}

