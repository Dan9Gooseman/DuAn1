
<?php
function loadall_thongke()
{

    $sql = "SELECT sanpham.sp_ten AS sp_ten,sanpham.sp_id AS sp_id, COUNT(bienthesanpham.btsp_id) AS countsp, MIN(bienthesanpham.btsp_giatien) AS mingiatien, MAX(bienthesanpham.btsp_giatien) AS maxgiatien, AVG(bienthesanpham.btsp_giatien) AS avggiatien";
    $sql .= " FROM bienthesanpham LEFT JOIN sanpham ON sanpham.sp_id = bienthesanpham.sp_id";
    $sql .= " GROUP BY sanpham.sp_id ORDER BY sanpham.sp_id ASC";
    $listthongke = pdo_query($sql);
    return $listthongke;
}
function loadall_sptop()
{
    $sql = " select sanpham.sp_id, sanpham.sp_img, sanpham.sp_ten, sanpham.sp_luotmua from  sanpham order by sp_luotmua desc limit 10 ";
    $listsptop = pdo_query($sql);
    return $listsptop;
}
function doanhthu_30()
{
    $sql = "select sum(dh.dh_tongtien) as tong_tien
            from donhang dh
            where dh.dh_trangthaidonhang = 'Giao Hàng Thành công' and  dh.dh_ngaytao >= CURDATE() - INTERVAL 30 DAY";
    $doanhthu_30 = pdo_query($sql);
    return $doanhthu_30;
}
function doanhthu_theothoigian()
{
    $sql = "SELECT
                YEAR(donhang.dh_ngaytao) AS nam,
                MONTH(donhang.dh_ngaytao) AS thang,
                SUM(donhang.dh_tongtien) AS doanh_thu
            FROM
                donhang
            GROUP BY
                YEAR(donhang.dh_ngaytao),
                MONTH(donhang.dh_ngaytao)
            ORDER BY
                nam, thang";
    $doanhthu_theothoigian = pdo_query($sql);
    return $doanhthu_theothoigian;
}
