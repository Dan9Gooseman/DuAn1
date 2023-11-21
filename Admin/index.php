<?php
include "header.php";

include "model/pdo.php";

include "model/thuonghieu.php";
include "model/danhmuc.php";
include "model/dungtich.php";
include "model/sanpham.php";
include "model/bienthesanpham.php";
include "model/donhang.php";
include "model/donhangchitiet.php";
include "model/diachinhanhang.php";
include "model/taikhoan.php";
include "model/binhluan.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
            // CN TRANG DM
        case 'adddm':
            //kiem tra nguoi dung cos kich khong
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $name_dm = $_POST['name_dm'];
            }
            include "danhmuc/add.php";
            break;
        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'xoadm':
            break;
            // CN DUNG TICH
        case 'adddt':
            include "dungtich/add.php";
            break;
        case 'listdt':
            $listdungtich = loadall_dungtich();
            include "dungtich/list.php";
            break;
        case 'xoadt':
            break;
            // CN TRANG TH
        case 'addth':
            include "thuonghieu/add.php";
            break;
        case 'listth':
            $listthuonghieu = loadall_thuonghieu();
            include "thuonghieu/list.php";
            break;
        case 'xoath':
            break;
            // CN TRANG BL
        case 'listbl':
            $sql = "select * from binhluan order by bl_id";
            $listbinhluan = pdo_query($sql);
            include "binhluan/list.php";
            break;
            // CN TRANG TK
        case 'xoabl':
            break;
        case 'listtk':
            $listuser = loadall_user();
            include "taikhoan/list.php";
            break;
        case 'xoatk':
            break;
            // CN TRANG SP
        case 'addsp':
            include "sanpham/add.php";
            break;
        case 'listsp':
            $listsanpham = loadall_sanpham();
            include "sanpham/list.php";
            break;
        case 'xoasp':
            break;
            //CN TRANG BIEN THE SAN PHAM
        case 'addbtsp':
            include "bienthesanpham/add.php";
            break;
        case 'listbtsp':
            $listbienthesanpham = loadall_bienthesanpham();
            include "bienthesanpham/list.php";
            break;
        case 'xoabtsp':
            break;
            //CN TRANG DON HANG
        case 'listdonhang':
            $listdonhang = loadall_donhang();
            include "donhang/list.php";
            break;
            //CN TRANG DON HANG
        case 'listdcnh':
            $listdcnh = loadall_dcnh();
            include "diachinhanhang/list.php";
            break;
        case 'listdhct':
            $listdhct = loadall_dhct();
            include "donhangchitiet/list.php";
            break;
        default:
            include  "home.php";
            break;
    }
} else {
    include  "home.php";
}
include "footer.php";
