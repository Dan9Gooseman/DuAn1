<?php
include "model/pdo.php";
include "header.php";
include "model/taikhoan.php";
include "model/thuonghieu.php";
include "model/binhluan.php";
include "model/dungtich.php";
include "model/danhmuc.php";
include "model/sanpham.php";

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
            // CN DUNG TICH
        case 'adddt':
            include "dungtich/add.php";
            break;
        case 'listdt':
            $listdungtich = loadall_dungtich();
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
            // CN TRANG BL
        case 'listbl':
            $sql = "select * from binhluan order by bl_id";
            $listbinhluan = pdo_query($sql);
            include "binhluan/list.php";
            break;
            // CN TRANG TK
        case 'listtk':
            $listuser = loadall_user();
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
        default:
            include  "home.php";
            break;
    }
} else {
    include  "home.php";
}
include "footer.php";
