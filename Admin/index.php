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
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $danhmuc_dm = $_POST['danhmuc_dm'];
                add_danhmuc($danhmuc_dm);
                $thongbao = "THêm thành công";
            }
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
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/upload.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $danhmuc_dm = $_POST['danhmuc_dm'];
                $id = $_POST['id'];
                update_danhmuc($id, $danhmuc_dm);
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
            // CN DUNG TICH
        case 'adddt':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $dungtich_dt = $_POST['dungtich_dt'];
                add_dungtich($dungtich_dt);
                $thongbao = "THêm thành công";
            }
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
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $thuonghieu_th = $_POST['thuonghieu_th'];
                add_thuonghieu($thuonghieu_th);
                $thongbao = "THêm thành công";
            }
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
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $sanpham_sp = $_POST['sanpham_sp'];
                $mota_sp = $_POST['mota_sp'];
                $img = $_FILES['img_sp']['name'];
                $target_dir = "1/";
                $target_file = $target_dir . basename($_FILES["img_sp"]["name"]);
                if (move_uploaded_file($_FILES["img_sp"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                add_sanpham($sanpham_sp, $mota_sp, $img);
                $thongbao = "THêm thành công";
            }
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
