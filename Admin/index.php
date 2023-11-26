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
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $danhmuc_dm = $_POST['danhmuc_dm'];
                $on_off=$_POST['on_off'];
                add_danhmuc($danhmuc_dm,$on_off);
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
                $dm_id = $_POST['dm_id'];
                update_danhmuc($dm_id, $danhmuc_dm);
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
<<<<<<< HEAD
=======
        case 'updatedt':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $dt_dungtich = $_POST['dt_dungtich'];
                $id = $_POST['id'];
                update_dungtich($id, $dt_dungtich);
            }
            $listdungtich = loadall_dungtich();
            include "dungtich/list.php";
            break;
>>>>>>> 4605b8b58af363b60251878b700a7f5e486bd9a3
        case 'suadt':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dt = loadone_dungtich($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
<<<<<<< HEAD
            include "dungtich/update.php";
            break;
        case 'updatedt':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $name = $_POST['name'];
                $id = $_POST['id'];
                update_dungtich($id, $name);
            }
            $listdungtich = loadall_dungtich();
            include "dungtich/list.php";
=======
            include "dungtich/upload.php";
>>>>>>> 4605b8b58af363b60251878b700a7f5e486bd9a3
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
        case 'suath':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $th = loadone_thuonghieu($_GET['id']);
            }
<<<<<<< HEAD
            $listthuonghieu = loadall_thuonghieu();
            include 'thuonghieu/upload.php';
=======
            $listthuonghieu = loadall_thuonghieu(0);
            include "thuonghieu/upload.php";
            break;
        case 'updateth':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $name = $_POST['name'];
                $id = $_POST['id'];
                update_thuonghieu($id, $name);
            }
            $listthuonghieu = loadall_thuonghieu();
            include 'thuonghieu/list.php';
>>>>>>> 4605b8b58af363b60251878b700a7f5e486bd9a3
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
        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sp = loadone_sanpham($_GET['id']);
            }
            $listsanpham = loadall_sanpham(0);
            include "sanpham/upload.php";
            break;
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $mota = $_POST['mota'];
                update_sanpham($id, $name, $mota);
            }
            $listsanpham = loadall_sanpham(0);
            include 'sanpham/list.php';
            break;
            //CN TRANG BIEN THE SAN PHAM
        case 'addbtsp':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
<<<<<<< HEAD
                $btsp_id = $_POST['btsp_id'];
                $btsp_ten = $_POST['btsp_ten'];
                $btsp_giatien = $_POST['btsp_giatien'];
                $btsp_soluongconlai = $_POST['btsp_soluongconlai'];
                add_bienthesanpham($btsp_giatien,$btsp_soluongconlai,$btsp_ten,$btsp_id);
                $thongbao = "THêm thành công";
            }
            $listbienthesanpham = loadall_bienthesanpham();
=======
                $sp_id = $_POST['sp_id'];
                $th_id = $_POST['th_id'];
                $dt_id = $_POST['dt_id'];
                $dm_id = $_POST['dm_id'];
                $name_btsp = $_POST['name_btsp'];
                $price_btsp = $_POST['price_btsp'];
                $sl_btsp = $_POST['sl_btsp'];
                add_btsp($name_btsp, $sl_btsp, $price_btsp, $sp_id, $th_id, $dt_id, $dm_id);
                $thongbao = "THêm thành công";
            }
>>>>>>> 4605b8b58af363b60251878b700a7f5e486bd9a3
            include "bienthesanpham/add.php";
            break;
        case 'listbtsp':
            $listbienthesanpham = loadall_bienthesanpham();
            include "bienthesanpham/list.php";
            break;
        case 'xoabtsp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_btsp($_GET['id']);
            }
            $listbienthesanpham = loadall_bienthesanpham();
            include "bienthesanpham/list.php";
            break;
        case 'suabtsp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $btsp = loadone_bienthesanpham($_GET['id']);
            }
            $listbienthesanpham = loadall_bienthesanpham(0);
            include "bienthesanpham/upload.php";
            break;
        case 'updatebtsp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $sp1_id = $_POST['sp1_id'];
                $th1_id = $_POST['th1_id'];
                $dt1_id = $_POST['dt1_id'];
                $dm1_id = $_POST['dm1_id'];
                $name_btsp = $_POST['name_btsp'];
                $price_btsp = $_POST['price_btsp'];
                $sl_btsp = $_POST['sl_btsp'];
                update_bienthesanpham($id,$name_btsp, $sl_btsp, $price_btsp, $sp1_id, $th1_id, $dt1_id, $dm1_id);
            }
            $listbienthesanpham = loadall_bienthesanpham(0);
            include 'bienthesanpham/list.php';
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
