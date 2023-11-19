<div class="content-trangchu">
    <div class="banner">
        <div class="bn1">
            <img src="assets/banner/main-banner.jpg" style="width:100%;">
        </div>
        <div class="bn2">
            <img src="assets/banner/mini-banner1.jpg" id="loop-banner" style="width:100%;">
        </div>
    </div>
    <div class="pbmn">
        <h1>Phiên Bản Mới Nhất</h1>
    </div>
    <div class="product">
        <?php
        foreach ($top10_spnew as $spnew) {
            extract($spnew);
            $linksp = "index.php?act=chitietsanpham&btsp_id=" . $btsp_id;
            $anh = $img_path . $sp_img;
            echo '<div class="product-box">
                    <a href="' . $linksp .'">
                        <img class="product-image a" src="' . $anh .'" alt="Hình ảnh sản phẩm" />
                    </a>
                    <a href="' . $linksp .'" class="a">
                        <h2 class="product-name">'. $sp_ten .'</h2>
                    </a>
                    <a href="' . $linksp .'" class="a">
                        <p class="product-price">' . $btsp_giatien .'đ</p>
                    </a>
                    <button class="add-to-cart-button">Thêm vào giỏ hàng</button>
                    <button class="buy-now-button">Mua ngay</button>
                </div>';
        }
        ?>
        
    </div>
    <div class="banner2">
        <img style="width: 100%;" src="assets\banner\sale.jpg" alt="">
    </div>
    <div class="pbmn">
        <h1>Danh Sách Sản Phẩm</h1>
    </div>
    <div class="product">
        <div class="product-box">
            <a href="index.php?act=chitietsanpham&sp_id="><img class="product-image a" src="img/anh-my-pham-06.jpg" alt="Hình ảnh sản phẩm" /></a>
            <a href="index.php?act=chitietsanpham&sp_id=" class="a">
                <h2 class="product-name">Tên sản phẩm</h2>
            </a>
            <a href="index.php?act=chitietsanpham&sp_id=" class="a">
                <p class="product-price">Giá tiền: $100</p>
            </a>
            <button class="add-to-cart-button">Thêm vào giỏ hàng</button>
            <button class="buy-now-button">Mua ngay</button>
        </div>
        <div class="product-box">
            <a href="#"><img class="product-image a" src="img/anh-my-pham-06.jpg" alt="Hình ảnh sản phẩm" /></a>
            <a href="" class="a">
                <h2 class="product-name">Tên sản phẩm</h2>
            </a>
            <a href="#" class="a">
                <p class="product-price">Giá tiền: $100</p>
            </a>
            <button class="add-to-cart-button">Thêm vào giỏ hàng</button>
            <button class="buy-now-button">Mua ngay</button>
        </div>
        <div class="product-box">
            <a href="#"><img class="product-image a" src="img/anh-my-pham-06.jpg" alt="Hình ảnh sản phẩm" /></a>
            <a href="" class="a">
                <h2 class="product-name">Tên sản phẩm</h2>
            </a>
            <a href="#" class="a">
                <p class="product-price">Giá tiền: $100</p>
            </a>
            <button class="add-to-cart-button">Thêm vào giỏ hàng</button>
            <button class="buy-now-button">Mua ngay</button>
        </div>
        <div class="product-box">
            <a href="#"><img class="product-image a" src="img/anh-my-pham-06.jpg" alt="Hình ảnh sản phẩm" /></a>
            <a href="" class="a">
                <h2 class="product-name">Tên sản phẩm</h2>
            </a>
            <a href="#" class="a">
                <p class="product-price">Giá tiền: $100</p>
            </a>
            <button class="add-to-cart-button">Thêm vào giỏ hàng</button>
            <button class="buy-now-button">Mua ngay</button>
        </div>
    </div>
</div>
<script src="assets/js/home.js"></script>