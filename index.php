<?php
// include model
require_once "model/pdo.php";
require_once "model/sanpham.php";
require_once "model/danhmuc.php";
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
        case "dangnhap":

            include "view/user/dangnhap.php";
            break;
        case "quenmk":
            include "view/user/quenmk.php";
            break;
        case "chitietsanpham":
            if (isset($_GET['sp_id']) && ($_GET['sp_id'] > 0)) {
                $sp_id = $_GET['sp_id'];
                // $onesp = loadone_sanpham($sp_id);
                // extract($onesp);
                // $sp_cungloai = load_sanpham_cungloai($sp_id, $dm_id);
                // $updateluotxem = update_luotxem($sp_id, $sp_luotxem);
                include "view/page/chitietsanpham.php";
            }
            else{
                include "view/page/notfound404.php";
            }
            break;
        case "sanpham":
            if (isset($_GET['dm_id']) && ($_GET['dm_id'] > 0)) {
                $dm_id = $_GET['dm_id'];
                $sp_dm = pdo_sanpham_theo_danhmuc($dm_id);
                // var_dump($sp_dm);
                include "view/page/sanpham.php";
            }else{
                include "view/page/notfound404.php";
            }
            break;
    }
} else {
    include "View/home.php";
}
include "View/footer.php";
