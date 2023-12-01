<div class="container-fluid bgc">
    <div class="container-fluid margin">
        <h3 class="section-title-center">
            <b></b>
            <span>
                <?php
                foreach($all_danhmuc as $dm){
                    if($dm_id == $dm['dm_id']){
                        echo $dm['dm_danhmuc'];
                    } 
                }
                ?>
            </span>
            <b></b>
        </h3>
    </div>
    <div class="product-container">
        <div class="product">
            <?php
            if (empty($sp_dm)) {
                echo 'Hiện tại chưa có sản phẩm thuộc danh mục này';
            } else {
                foreach ($sp_dm as $sp) {
                    extract($sp);
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
            }
            ?>
        </div>
    </div>
</div>