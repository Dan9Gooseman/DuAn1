<?php
session_start();
if(!empty($_SESSION['nguoidung'])){
    // echo $_SESSION['nguoidung']['user_vaitro'];
    if($_SESSION['nguoidung']['user_vaitro'] == 'khachhang'){
        header('location: ../index.php');
    }
}else{
    header('location: ../index.php');
}
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
include "model/thongke.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
            // CN TRANG DM
        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $dm_danhmuc = $_POST['dm_danhmuc'];
                $on_off=$_POST['on_off'];
                add_danhmuc($dm_danhmuc,$on_off);
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
                $on_off=$_POST['on_off'];
                $danhmuc_dm = $_POST['danhmuc_dm'];
                $id = $_POST['id'];
                update_danhmuc($id, $danhmuc_dm,$on_off);
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
            // CN DUNG TICH
        case 'adddt':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $dungtich_dt = $_POST['dungtich_dt'];
                $on_off=$_POST['on_off'];
                add_dungtich($dungtich_dt,$on_off);
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
        case 'updatedt':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $dt_dungtich = $_POST['dt_dungtich'];
                $id = $_POST['id'];
                $on_off=$_POST['on_off'];
                update_dungtich($id, $dt_dungtich,$on_off);
            }
            $listdungtich = loadall_dungtich();
            include "dungtich/list.php";
            break;
        case 'suadt':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dt = loadone_dungtich($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "dungtich/upload.php";
            break;
            // CN TRANG TH
        case 'addth':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $thuonghieu_th = $_POST['thuonghieu_th'];
                $on_off=$_POST['on_off'];
                add_thuonghieu($thuonghieu_th,$on_off);
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
            $listthuonghieu = loadall_thuonghieu(0);
            include "thuonghieu/upload.php";
            break;
        case 'updateth':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $name = $_POST['name'];
                $on_off=$_POST['on_off'];
                $id = $_POST['id'];
                update_thuonghieu($id, $name,$on_off);
            }
            $listthuonghieu = loadall_thuonghieu();
            include 'thuonghieu/list.php';
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
                $on_off=$_POST['on_off'];
                $mota_sp = $_POST['mota_sp'];
                $img = $_FILES['img_sp']['name'];
                $target_dir = "../assets/uploads/";
                $target_file = $target_dir . basename($_FILES["img_sp"]["name"]);
                if (move_uploaded_file($_FILES["img_sp"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                add_sanpham($sanpham_sp, $mota_sp, $img,$on_off);
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
                $on_off=$_POST['on_off'];
                update_sanpham($id, $name, $mota,$on_off);
            }
            $listsanpham = loadall_sanpham(0);
            include 'sanpham/list.php';
            break;
            //CN TRANG BIEN THE SAN PHAM
        case 'addbtsp':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
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
            $listdanhmuc = loadall_danhmuc_active();
            $listdungtich = loadall_dungtich_active();
            $listsanpham = loadall_sanpham_active();
            $listthuonghieu = loadall_thuonghieu_active();
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
            $listdanhmuc = loadall_danhmuc();
            $listdungtich = loadall_dungtich();
            $listsanpham = loadall_sanpham(0);
            $listthuonghieu = loadall_thuonghieu();
            $listbienthesanpham = loadall_bienthesanpham(0);
            include "bienthesanpham/upload.php";
            break;
        case 'updatebtsp':
            if (isset($_POST['thaydoi']) && ($_POST['thaydoi'])) {
                $id = $_POST['id'];
                $btsp_ten = $_POST['btsp_ten'];
                $btsp_gia = $_POST['btsp_gia'];
                $btsp_soluong = $_POST['btsp_soluong'];
                $sp_id = $_POST['sp_id'];
                $th_id = $_POST['th_id'];
                $dt_id = $_POST['dt_id'];
                $dm_id = $_POST['dm_id'];
                update_bienthesanpham($id,$btsp_ten, $btsp_gia, $btsp_soluong, $sp_id, $th_id, $dt_id, $dm_id);
            }
            $listdanhmuc = loadall_danhmuc();
            $listdungtich = loadall_dungtich();
            $listsanpham = loadall_sanpham(0);
            $listthuonghieu = loadall_thuonghieu();
            $listbienthesanpham = loadall_bienthesanpham(0);
            include 'bienthesanpham/list.php';
            break;
            //CN TRANG DON HANG
        case 'listdonhang':
            $listdonhang = loadall_donhang();
            include "donhang/list.php";
            break;
        case 'suatrangthai':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dh = loadone_donhang($_GET['id']);
            }
            $listdonhang = loadall_donhang(0);
            include "donhang/update.php";
            break;
            case 'updatetrangthai':
                if (isset($_POST['thaydoi']) && ($_POST['thaydoi'])) {
                    $id = $_POST['id'];
                    $trangthai=$_POST['trangthai'];
                    update_trangthai($id,$trangthai);
                }
                $listdonhang = loadall_donhang();
                include "donhang/list.php";
                break;

        case 'listdcnh':
            $listdcnh = loadall_dcnh();
            include "diachinhanhang/list.php";
            break;
             //CN TRANG DON HANG CHI TIET
        case 'listdhct':
            $listdhct = loadall_dhct();
            include "donhangchitiet/list.php";
            break;
        case 'list_one':
            if (isset($_GET['iddh']) && ($_GET['iddh'] > 0)) {
                $id=$_GET['iddh'];
                $one=list_one($id);
                include  "donhangchitiet/list_one.php";
            } else{
            include  "home.php";
            }
            break;
        //CN TRANG THONG KE
        case 'thongke':
            $listthongke = loadall_thongke();
            include "thongke/list.php";
            break;
        case 'bieudo':
            $listthongke = loadall_thongke();
            include "thongke/bieudo.php";
            break;
        default:
            include  "home.php";
            break;
    }
} else {
    include  "home.php";
}
include "footer.php";
