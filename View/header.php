<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="Global/css/header&footer.css">
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-bulma/bulma.css" rel="stylesheet">

    <?php

    if (isset($_GET['act']) && ($_GET['act'] != "")) {
        $act = $_GET['act'];
        switch ($act) {
            case "dangky":
            case "luutk":
                echo '<link rel="stylesheet" href="assets/css/dangkydangnhap.css">';
                break;
            case "dangnhap":
                echo '<link rel="stylesheet" href="assets/css/dangkydangnhap.css">';
                break;
            case "quenmk":
                echo '<link rel="stylesheet" href="assets/css/quenmk.css">';
                break;
            case "hoso":
                echo '<link rel="stylesheet" href="assets/css/trangcanhan.css">';
                break;
            case "lichsudathang":
                echo '<link rel="stylesheet" href="assets/css/lichsudathang.css">';
                break;
            case "diachinhanhang":
                echo '<link rel="stylesheet" href="assets/css/diachithanhtoan.css">';
                break;
            case "suadiachi":
                echo '<link rel="stylesheet" href="assets/css/suadiachi.css">';
                break;
            case "luudiachi":
                echo '<link rel="stylesheet" href="assets/css/suadiachi.css">';
                break;
            case "edit_tk":
                echo '<link rel="stylesheet" href="assets/css/thaydoithongtin.css">';
                break;
            case "capnhattk":
                echo '<link rel="stylesheet" href="assets/css/thaydoithongtin.css">';
                break;
            case "capnhatmk":
                echo '<link rel="stylesheet" href="assets/css/thaydoithongtin.css">';
                break;
            case "edit_mk":
                echo '<link rel="stylesheet" href="assets/css/thaydoithongtin.css">';
                break;
            case "chitietsanpham":
                if (isset($_GET['sp_id']) && ($_GET['sp_id'] > 0)) {
                    echo '<link rel="stylesheet" href="assets/css/chitietsanpham.css">';
                } else {
                    echo '<link rel="stylesheet" href="assets/css/notfound404.css">';
                }
                break;
            case "sanpham":
                if (isset($_GET['dm_id']) && ($_GET['dm_id'] > 0)) {
                    $dm_id = $_GET['dm_id'];
                    echo '<link rel="stylesheet" href="assets/css/sanpham.css">';
                } else {
                    echo '<link rel="stylesheet" href="assets/css/notfound404.css">';
                }
                break;
            case "giohang":
                echo '<link rel="stylesheet" href="assets/css/giohang.css">';
                break;
            case "thanhtoan":
                echo '<link rel="stylesheet" href="assets/css/thanhtoan.css">';
                break;
            case "dathangthanhcong":
                echo '<link rel="stylesheet" href="assets/css/dathangthanhcong.css">';
                break;
        }
    } else {
        echo '<link rel="stylesheet" href="assets/css/home.css">';
    }
    ?>


</head>

<body>
    <div class="header">
        <div class="header-address">
            <span>FPT Polytechnic, Tòa nhà, P. Trịnh Văn Bô, Nam Từ Liêm, Hà Nội 100000</span>
        </div>
        <div class="header-main">
            <a href="index.php?act=">
                <img src="Global/images/MenHair.png">
            </a>
            <div class="header-search-bar">
                <div class="input-group relative">
                    <input name="search-bar" type="text" class="form-control shadow-none padding-left radius-1" id="timkiem" placeholder="Nhập từ khóa tìm kiếm" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary background radius-2" type="button" id="button-addon2">Tìm
                        kiếm</button>
                </div>
                <div class="search-result" id="search-result">

                </div>
            </div>
            <div class="header-user-cart">
                <div class="user">
                    <div class="dropdown">
                        <!-- <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false"> -->
                        <!-- Hoang The Nguyen update user -->
                        <?php
                        if (isset($_SESSION['nguoidung']) && $_SESSION['nguoidung']) {
                            echo '<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">Xin chào ' . $_SESSION['nguoidung']['user_hovaten'] . '</button>';
                        } else {
                            echo '<a id="custom-btn" class="btn btn-primary" href="index.php?act=dangnhap" role="button">Đăng nhập</a>
                                <a id="custom-btn" class="btn btn-primary" href="index.php?act=dangky" role="button">Đăng ký</a>';
                        }
                        ?>
                        <!-- </button> -->
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <?php
                            if (isset($_SESSION['nguoidung']) && $_SESSION['nguoidung']['user_hovaten']) {
                            ?>
                                <li><a class="dropdown-item" href="index.php?act=hoso">Hồ sơ</a></li>
                                <li><a class="dropdown-item" href="index.php?act=dangxuat">Đăng xuất</a></li>
                            <?php
                            } else {
                                echo "";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <!-- <a id="custom-btn" class="btn btn-primary" href="index.php?act=dangnhap" role="button">Đăng nhập</a>
                <a id="custom-btn" class="btn btn-primary" href="index.php?act=dangky" role="button">Đăng ký</a> -->
                <div class="cart">
                    <a href="index.php?act=giohang">
                        <i class="fa-solid fa-cart-shopping fa-xl" style="color: #000000;"></i>
                    </a>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg bg-body-custom" id="custom-padding">
            <div class="container-fluid" id="custom-border">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="clr-white" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Danh mục sản phẩm
                            </a>
                            <ul class="dropdown-menu">
                                <?php
                                foreach ($all_danhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    echo '<li><a class="dropdown-item" href="index.php?act=sanpham&dm_id=' . $dm_id . '">' . $dm_danhmuc . '</a></li>';
                                }
                                ?>
                                <!-- <li><a class="dropdown-item" href="index.php?act=sanpham&danhmuc=daugoi">Dầu gội</a></li>
                                <li><a class="dropdown-item" href="index.php?act=sanpham&danhmuc=dauxa">Dầu xả</a></li>
                                <li><a class="dropdown-item" href="index.php?act=sanpham&danhmuc=dauxa">Dầu dưỡng tóc</a></li>
                                <li><a class="dropdown-item" href="index.php?act=sanpham&danhmuc=dauxa">Kem dưỡng tóc</a></li> -->
                                <!-- <li><hr class="dropdown-divider"></li> -->
                            </ul>
                        </li>
                        <li class="nav-item" id="custom-padding-sm">
                            <a class="nav-link" id="clr-white" href="#">Về chúng tôi</a>
                        </li>
                        <li class="nav-item" id="custom-padding-sm">
                            <a class="nav-link" id="clr-white" href="#">Tin tức</a>
                        </li>
                        <li class="nav-item" id="custom-padding-sm">
                            <a class="nav-link" id="clr-white" href="#">Liên hệ</a>
                        </li>
                    </ul>
                    <a href="#" id="clr-white" style="text-decoration: none;">(+84) 0912345678</a>
                </div>
            </div>
        </nav>
    </div>