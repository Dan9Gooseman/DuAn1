<?php
//Sản phẩm mới
    function pdo_top10_new(){
        $sql = "select
                    s.*, b.btsp_id,
                    MIN(b.btsp_giatien) AS min_giatien,
                    MAX(b.btsp_giatien) AS max_giatien
                FROM
                    sanpham s
                JOIN
                    bienthesanpham b ON s.sp_id = b.sp_id
                GROUP BY
                    s.sp_id
                ORDER BY
                    s.sp_id DESC
                LIMIT 0, 8;";
        $top10_spnew = pdo_query($sql);
        return $top10_spnew;
    }

//Sản phẩm mua nhiều
    function pdo_top10_buy(){
        $sql = "select
                    s.*,
                    MIN(b.btsp_giatien) AS min_giatien,
                    MAX(b.btsp_giatien) AS max_giatien
                FROM
                    sanpham s
                JOIN
                    bienthesanpham b ON s.sp_id = b.sp_id
                GROUP BY
                    s.sp_luotmua
                ORDER BY
                    s.sp_luotmua DESC
                LIMIT 0, 8;";
        $top10_buy = pdo_query($sql);
        return $top10_buy;
    }
?>