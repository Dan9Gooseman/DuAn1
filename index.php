<?php
session_start();
ob_start();
// include model
require_once "model/pdo.php";
require_once "model/sanpham.php";
require_once "model/danhmuc.php";
require_once "Model/user.php";
//preload
$top10_new = pdo_top10_new();
$top10_buy = pdo_top10_buy();
$all_danhmuc = pdo_all_danhmuc();
// var_dump($all_danhmuc);
// include page
include "View/header.php";
include "Global/global.php";

// ktra trang nguoi dung dang xem
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'dathangthanhcong':
            include 'view/page/dathangthanhcong.php';
            break;
        case 'giohang':
            if (isset($_SESSION['cart'])) {
                // var_dump($_SESSION['cart']);
                $thongbao = '';
                $cartlistitem = pdo_giohangsanpham();
                // var_dump($_SESSION['cartitems']);
            } else {
                $thongbao = 'Không có sản phẩm, hãy chọn sản phẩm!';
            }
            include "view/page/giohang.php";
            break;
        case 'thanhtoan':
            include 'view/page/thanhtoan.php';
            break;
        case 'dangky':
            include "view/user/dangky.php";

            break;
        case "luutk":
            if (isset($_POST['luutk']) && ($_POST['luutk'])) {
                $user_hovaten = $_POST['user_hovaten'];
                $user_email = $_POST['user_email'];
                $user_password = $_POST['user_password'];
                insert_user($user_hovaten, $user_email, $user_password);
                $thongbao = "Đã đăng ký thành công";
                include "view/user/dangnhap.php";
            }
            $thongbao = "Đã đăng ký thất bại";
            include "view/user/dangnhap.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user_email = $_POST['user_email'];
                $user_password = $_POST['user_password'];
                $checkuser = checkuser($user_email, $user_password);
                if (is_array($checkuser)) {
                    $_SESSION['nguoidung'] = $checkuser;
                    if ($_SESSION['nguoidung']['user_vaitro'] == 'khachhang') {
                        header('location: index.php');
                    } else {
                        header('location: admin/index.php');
                    }
                    ob_end_clean();
                    exit();
                } else {
                    $thongbao = "Tài khoản không tồn tại";
                }
            }
            include "view/user/dangnhap.php";
            break;
        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $user_email = $_POST['user_email'];
                $checkemail = checkemail($user_email);
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu của bạn là:" . $checkemail['user_password'];
                } else {
                    $thongbao = "Email này không tồn tại";
                }
            }
            include "view/user/quenmk.php";
            break;
        case "hoso":
            if (!empty($_SESSION['nguoidung'])) {
                include "view/user/hoso.php";
            } else {
                header('location:http://localhost:82/DuAn1-master/DuAn1-master/index.php?act=dangnhap');
                exit();
            }
            break;
        case "edit_tk":
            include "view/user/edit_taikhoan.php";
            break;
        case "capnhattk":
            $thongbao = '';
            if (isset($_POST['capnhat_tk']) && ($_POST['capnhat_tk'])) {
                $user_hovaten = $_POST['user_hovaten'];
                $user_email = $_POST['user_email'];
                $user_id = $_POST['user_id'];
                update_user($user_hovaten, $user_email, $user_id);
                $thongbao = "Cập nhật hồ sơ thành công";
                include "view/user/edit_taikhoan.php";
                // var_dump($thongbao);
                // header('location: index.php?act=edit_tk');
            } else {
                include "view/user/edit_taikhoan.php";
            }
            break;
        case "edit_mk":
            include "view/user/edit_mk.php";
            break;
        case "capnhatmk":
            if (isset($_POST['capnhat_mk']) && ($_POST['capnhat_mk'])) {
                $user_password = $_POST['user_password'];
                $user_id = $_POST['user_id'];
                update_userpass($user_password, $user_id);
                $thongbao = "Cập nhật mật khẩu thành công";
                include "view/user/edit_mk.php";
                // var_dump($thongbao);
                // header('location: index.php?act=edit_tk');
            } else {
                include "view/user/edit_mk.php";
            }
            break;
        case "dangxuat":
            session_destroy();
            header('location: index.php');
            break;

        case "chitietsanpham":
            if (isset($_GET['sp_id']) && ($_GET['sp_id'] > 0)) {
                $sp_id = (int)$_GET['sp_id'];
                $chitietsanpham = pdo_chitietsanpham($sp_id);
                $binhluansanpham = pdo_binhluansanpham($sp_id);
                $dungtich = pdo_dungtich($sp_id);
                include "view/page/chitietsanpham.php";
            } else {
                include "view/page/notfound404.php";
            }
            break;
        case "sanpham":
            if (isset($_GET['dm_id']) && ($_GET['dm_id'] > 0)) {
                $dm_id = $_GET['dm_id'];
                $sp_dm = pdo_sanpham_theo_danhmuc($dm_id);
                // $all_danhmuc = pdo_all_danhmuc();
                // var_dump($all_danhmuc);
                include "view/page/sanpham.php";
            } else {
                include "view/page/notfound404.php";
            }
            break;
    }
} else {
    include "View/home.php";
}
include "View/footer.php";
