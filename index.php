<?php
// include "model/pdo.php";
// include "model/pdo_product.php";
// include "model/pdo_type.php";
include "view/header.php";
// $all_product = load_all_product();
// $all_type = load_all_type();
// $top10_product = load_top10_product();

// if(isset($_GET['act'])&&($_GET['act']!="")){
//     $act=$_GET['act'];
//     switch($act){
//         case "products":
//             if(isset($_POST['keyword']) &&  $_POST['keyword'] != 0 ){
//                 $kyw = $_POST['keyword'];
//             }else{
//                 $keyword = "";
//             }
//             if(isset($_GET['typeid']) && ($_GET['typeid']>0)){
//                 $typeid=$_GET['typeid'];
//             }else{
//                 $typeid=0;
//             }
//             $all_product=load_all_product($keyword,$typeid);
//             $type_name= load_name_type($typeid);
//             include "view/sanpham.php";
//             break;
//         case "productdetail":
//             if(isset($_POST['guibinhluan'])){
//                 insert_comment($_POST['idpro'], $_POST['noidung']);
//             }
//             if(isset($_GET['idsp']) && $_GET['idsp'] > 0){
//                 $sanpham = loadone_sanpham($_GET['idsp']);
//                 $sanphamcl = load_sanpham_cungloai($_GET['idsp'], $sanpham['iddm']);
//                 $binhluan = loadall_binhluan($_GET['idsp']);
//                 include "view/chitietsanpham.php";
//             }else{
//                 include "view/home.php";            
//             }
//             break;
        
//     }
// }else{
//     include "view/home.php";
// }

include "view/footer.php";
?>