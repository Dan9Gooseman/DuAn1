<div class="container-quenmk">
    <div>
        <form class="form-holder" action="index.php?act=quenmk" method="post">
            <p>Quên mật khẩu? Vui lòng nhập tên đăng nhập hoặc địa chỉ email. Bạn sẽ nhận được mật khẩu của mình qua
                email.</p>
            <p class="p">Tên đăng nhập hoặc email</p>
            <input type="email" name="user_email">
            <input type="submit" value="Gửi" name="guiemail">
            <h2 class="thongbao">
                <?php

                if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
                ?>
            </h2>
        </form>
    </div>
</div>