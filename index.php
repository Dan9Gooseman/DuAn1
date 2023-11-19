<?php
// include page
include "View/header.php";
include "Global/global.php";
// include model
require_once "model/pdo.php";
require_once "model/sanpham.php";
//preload
$top10_spnew = pdo_top10_spnew();
var_dump($top10_spnew);

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
    }
} else {
    include "View/home.php";
}
include "View/footer.php";
