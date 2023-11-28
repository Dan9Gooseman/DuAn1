    <footer style="margin-top: 30px;">
        <div class="holder-row">
            <div class="holder-col">
                <p class="p-text">MenHair là hệ thống cửa hàng chuyên về các sản phẩm chăm sóc tóc nam hàng đầu tại Châu Âu. Đảm bảo mái tóc đẹp là nhiệm vụ của chúng tôi.</p>
            </div>
            <div class="holder-col">
                <h2>Về chúng tôi</h2>
                <p><i class="fa-sharp fa-solid fa-location-pin"></i> FPT Polytechnic, Tòa nhà, P. Trịnh Văn Bô, Nam Từ Liêm, Hà Nội 100000. </p>
                <p><i class="fa-solid fa-phone-flip"></i> 0912.345.678</p>
                <p><i class="fa-solid fa-envelope"></i> contact.menhair@gmail.com</p>
            </div>
            <div class="holder-col">
                <h2>Trợ giúp</h2>
                <a href="#">Sự nghiệp</a>
                <a href="#">Cửa hàng</a>
                <a href="#">Địa chỉ</a>
                <a href="#">Liên hệ</a>
            </div>
            <div class="holder-col">
                <h2>Thông tin</h2>
                <a href="#">Về cửa hàng</a>
                <a href="#">Sản phẩm mới nhất</a>
                <a href="#">Mã giảm giá</a>
                <a href="#">Sản phẩm giảm giá</a>
            </div>
            <!-- <div class="holder-col">
                <div>
                    <a href="#"><i class="fa-brands fa-facebook-f fa-2xl" style="color: #000000;"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter fa-2xl" style="color: #000000;"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram fa-2xl" style="color: #000000;"></i></a>
                </div>
            </div> -->
        </div>
    </footer>
    <script src="https://kit.fontawesome.com/01804f5b6a.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <?php

    if (isset($_GET['act']) && ($_GET['act'] != "")) {
        $act = $_GET['act'];
        switch ($act) {
            case "dangnhap":
                echo '<link rel="stylesheet" href="assets/js/dangkydangnhap.js">';
                break;
            case "chitietsanpham":
                if (isset($_GET['sp_id']) && ($_GET['sp_id'] > 0)) {
                    echo '<Script src="assets/js/dangkydangnhap.js"></Script>';
                }
        }
    } else {
        echo '<link rel="stylesheet" href="assets/js/home.js">';
    }
    ?>

    </body>

    </html>