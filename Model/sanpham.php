<?php
//Sản phẩm mới
    function pdo_top10_new(){
        $sql = "select
                    s.*, b.btsp_id,
                    MIN(b.btsp_giatien) AS min_giatien,
                    MAX(b.btsp_giatien) AS max_giatien
                FROM sanpham s
                JOIN bienthesanpham b ON s.sp_id = b.sp_id
                where s.is_active = 1
                GROUP BY s.sp_id
                ORDER BY s.sp_id DESC
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
                FROM sanpham s
                JOIN bienthesanpham b ON s.sp_id = b.sp_id
                where s.is_active = 1
                GROUP BY s.sp_luotmua
                ORDER BY s.sp_luotmua DESC
                LIMIT 0, 8;";
        $top10_buy = pdo_query($sql);
        return $top10_buy;
    }

//Lấy sản phẩm theo danh mục
    function pdo_sanpham_theo_danhmuc($dm_id){
        $sql = "select s.*, MIN(b.btsp_giatien) AS min_giatien, MAX(b.btsp_giatien) AS max_giatien, d.dm_danhmuc
                from sanpham s 
                inner join bienthesanpham b on s.sp_id = b.sp_id 
                inner join danhmuc d on b.dm_id = d.dm_id 
                inner JOIN thuonghieu th ON b.th_id = th.th_id
                inner JOIN dungtich dt ON b.dt_id = dt.dt_id
                where d.dm_id = '$dm_id' and s.is_active = 1 AND d.is_active = 1 AND th.is_active = 1 AND dt.is_active = 1
                group by s.sp_id";
        $sp_dm = pdo_query($sql);
        return $sp_dm;
    }
//lấy chi tiết sản phẩm 
    function pdo_chitietsanpham($sp_id){
        $sql = "SELECT sp.sp_id, sp.sp_ten, sp.sp_mota, sp.sp_img, MIN(btsp.btsp_giatien) AS min_giatien, MAX(btsp.btsp_giatien) AS max_giatien, th.th_thuonghieu
                FROM sanpham sp
                inner JOIN bienthesanpham btsp ON sp.sp_id = btsp.sp_id
                inner JOIN danhmuc dm ON btsp.dm_id = dm.dm_id
                inner JOIN thuonghieu th ON btsp.th_id = th.th_id
                inner JOIN dungtich dt ON btsp.dt_id = dt.dt_id
                WHERE sp.sp_id = '$sp_id' and sp.is_active = 1 AND dm.is_active = 1 AND th.is_active = 1 AND dt.is_active = 1";
        $chitietsanpham = pdo_query($sql);
        return $chitietsanpham;
    }
    function pdo_dungtich($sp_id){
        $sql = "select dt.dt_id, dt.dt_dungtich
                FROM sanpham sp
                inner JOIN bienthesanpham btsp ON sp.sp_id = btsp.sp_id
                inner JOIN danhmuc dm ON btsp.dm_id = dm.dm_id
                inner JOIN thuonghieu th ON btsp.th_id = th.th_id
                inner JOIN dungtich dt ON btsp.dt_id = dt.dt_id
                WHERE sp.sp_id = '$sp_id' and sp.is_active = 1 AND dm.is_active = 1 AND th.is_active = 1 AND dt.is_active = 1";
        $dungtich = pdo_query($sql);
        return $dungtich;
    }
    
//lấy bình luận sản phẩm
    function pdo_binhluansanpham($sp_id){
        $sql = "select bl.bl_noidung, bl.bl_ngaytao, u.user_hovaten
                FROM user u
                inner JOIN binhluan bl ON u.user_id = bl.user_id
                inner JOIN sanpham sp ON bl.sp_id = sp.sp_id
                WHERE sp.sp_id = '$sp_id' and sp.is_active = 1";
        $binhluansanpham = pdo_query($sql);
        return $binhluansanpham;
    }
    function pdo_giohangsanpham(){
        $cartlistitem = array();
        foreach($_SESSION['cart'] as $btsp_id => $soluong){
            $sql = "select btsp_id, btsp_ten, btsp_giatien from bienthesanpham where btsp_id = '$btsp_id'";
            $item = pdo_query_assoc($sql);
            if($item){
                $cartlistitem[] = array_merge($item, array('soluong' => $soluong));
            }
        }
        return $cartlistitem;
    }
?>