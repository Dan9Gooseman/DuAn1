<div class="outer-container">
    <div class="inner-container" id="container">
        <div class="form-container ">
            <form action="index.php?act=luutk" method="post">
                <div class="row mb10">
                    Tên Đăng nhập
                    <input type="text" name="user_hovaten">
                </div>
                <div class="row mb10">
                    Email
                    <input type="email" name="user_email">
                </div>
                <div class="row mb10">
                    Mật khẩu
                    <input type="password" name="user_password">
                </div>
                <div class="row mb10">
                    <input type="submit" value="Đăng ký" name="luutk">
                </div>
            </form>
            <h2 class="thongbao">
                <?php
                if (isset($thongbao) && ($thongbao != "")) {

                    echo $thongbao;
                }
                ?>
            </h2>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-right">
                    <h1>ĐĂNG KÝ TÀI KHOẢN</h1>
                    <p>
                        Đăng ký với thông tin cá nhân của bạn để sử dụng tất cả các tính
                        năng của trang web
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>