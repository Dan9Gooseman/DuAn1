<?php
include "header.php";

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
            include "danhmuc/list.php";
            break;
        case 'adddt':
            include "dungtich/add.php";
            break;
        case 'listdt':
            include "dungtich/list.php";
            break;
            // CN TRANG TH
        case 'addth':
            include "thuonghieu/add.php";
            break;
        case 'listth':
            include "thuonghieu/list.php";
            break;
            // CN TRANG BL
        case 'listbl':
            include "binhluan/list.php";
            break;
            // CN TRANG TK
        case 'listtk':
            include "taikhoan/list.php";
            break;
            // CN TRANG SP
        case 'addsp':
            include "sanpham/add.php";
            break;
        case 'listsp':
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
