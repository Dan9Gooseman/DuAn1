<?php
// include page
include "View/header.php";
// include model
include "model/pdo.php";


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
                extract($onesp);
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
