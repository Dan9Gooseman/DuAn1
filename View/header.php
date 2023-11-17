<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="Global/css/header&footer.css">
    <?php

    if (isset($_GET['act']) && ($_GET['act'] != "")) {
        $act = $_GET['act'];
        switch ($act) {
            case "dangnhap":
                echo '<link rel="stylesheet" href="assets/css/dangkydangnhap.css">';
            case "quenmk":
                echo '<link rel="stylesheet" href="assets/css/quenmk.css">';
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
                    <input name="search-bar" type="text" class="form-control shadow-none padding-left radius-1" placeholder="Nhập từ khóa tìm kiếm" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary background radius-2" type="button" id="button-addon2">Tìm
                        kiếm</button>
                </div>
            </div>
            <div class="header-user-cart">
                <div class="user">
                    <a id="custom-btn" class="btn btn-primary" href="index.php?act=dangnhap" role="button">Đăng nhập</a>
                </div>
                <div class="cart">
                    <a href="#">
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
                            <a class="nav-link dropdown-toggle" id="clr-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Danh mục sản phẩm
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="index.php?act=sanpham&danhmuc=daugoi">Dầu gội</a></li>
                                <li><a class="dropdown-item" href="index.php?act=sanpham&danhmuc=dauxa">Dầu xả</a></li>
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
                    <a href="#" id="clr-white">(84) 839565603</a>
                </div>
            </div>
        </nav>
    </div>