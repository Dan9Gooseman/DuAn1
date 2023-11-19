<?php
    function pdo_top10_spnew(){
        $sql = "select b.*, s.sp_img from bienthesanpham b inner join sanpham s on b.sp_id = s.sp_id where 1 order by btsp_id desc limit 0,10";
        $top10_spnew = pdo_query($sql);
        return $top10_spnew;
    }
?>