<?php
include "header.php";

include "../Model/pdo.php";

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
            include 'danhmuc/add.php';
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc(0);
            include "danhmuc/list.php";
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
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_dungtich($_GET['id']);
            }
            $listdungtich = loadall_dungtich(0);
            include "dungtich/list.php";
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
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_thuonghieu($_GET['id']);
            }
            $listthuonghieu = loadall_thuonghieu(0);
            include "thuonghieu/list.php";
            break;
            break;
            // CN TRANG BL
        case 'listbl':
            $listbinhluan = loadall_binhluan();
            include "binhluan/list.php";
            break;
        case 'xoabl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_binhluan($_GET['id']);
            }
            $listbinhluan = loadall_binhluan(0);
            include "binhluan/list.php";
            break;
            // CN TRANG TK
        case 'listtk':
            $listuser = loadall_user();
            include "taikhoan/list.php";
            break;
        case 'xoauser':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_user($_GET['id']);
            }
            $listuser = loadall_user(0);
            include "taikhoan/list.php";
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
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadall_sanpham();
            include "sanpham/list.php";
            break;
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
