<!-- <?php
echo $_SESSION['nguoidung']['dcnh_id'];
?> -->
<div class="content-trangchu">
    <div class="banner">
        <div class="bn1">
            <img src="assets/banner/main-banner.jpg" style="width:100%;">
        </div>
        <div class="bn2">
            <img src="assets/banner/mini-banner1.jpg" id="loop-banner" style="width:100%;">
        </div>
    </div>
    <div class="product-container">
        <div class="container-fluid margin">
            <h3 class="section-title-center">
                <b></b>
                <span>Phiên bản mới nhất</span>
                <b></b>
            </h3>
        </div>
        <div class="product">
            <?php
            foreach ($top10_new as $new) {
                extract($new);
                $linksp = "index.php?act=chitietsanpham&sp_id=" . $sp_id;
                $anh = $img_path . $sp_img;
                echo '<div class="product-box">
                    <a href="' . $linksp . '" class="a">
                        <img class="product-image a" src="' . $anh . '" alt="Hình ảnh sản phẩm" />
                    </a>
                    <a href="' . $linksp . '" class="a">
                        <h3 class="product-name">' . $sp_ten . '</h3>
                    </a>
                    <a href="' . $linksp . '" class="a">
                        <p class="product-price">' . $min_giatien . ' - ' . $max_giatien . 'đ</p>
                    </a>
                    <a href="index.php?act=chitietsanpham&sp_id=' . $sp_id . '" class="a product-buy">Chọn các tùy chọn</a>
                </div>';
            }
            ?>
        </div>
    </div>
    <div class="banner2">
        <img style="width: 100%;" src="assets\banner\sale.jpg" alt="">
    </div>
    <div class="product-container">
        <div class="container-fluid margin">
            <h3 class="section-title-center">
                <b></b>
                <span>Sản phẩm bán chạy</span>
                <b></b>
            </h3>
        </div>
        <div class="product">
            <?php
            foreach ($top10_buy as $buy) {
                extract($buy);
                $linksp = "index.php?act=chitietsanpham&btsp_id=" . $btsp_id;
                $anh = $img_path . $sp_img;
                echo '<div class="product-box">
                    <a href="' . $linksp . '">
                        <img class="product-image a" src="' . $anh . '" alt="Hình ảnh sản phẩm" />
                    </a>
                    <a href="' . $linksp . '" class="a">
                        <h3 class="product-name">' . $sp_ten . '</h3>
                    </a>
                    <a href="' . $linksp . '" class="a">
                        <p class="product-price">' . $min_giatien . ' - ' . $max_giatien . 'đ</p>
                    </a>
                    <a href="index.php?act=chitietsanpham&sp_id=' . $sp_id . '" class="a product-buy">Chọn các tùy chọn</a>
                </div>';
            }
            ?>
        </div>
    </div>
</div>
<script src="assets/js/home.js"></script>