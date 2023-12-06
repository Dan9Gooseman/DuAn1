<div class="outer-container">
  <div class="inner-container" id="container">
    <div class="form-container ">
      <form action="index.php?act=dangnhap" method="post">
        <div class="row mb10">
          Email
          <input type="email" name="user_email" required>
        </div>
        <div class="row mb10">
          Mật khẩu
          <input type="password" name="user_password" required>
        </div>
        <div class="row mb10">
          <input type="submit" value="Đăng nhập" name="dangnhap">

        </div>
        <p class="thongbao">
          <?php

          if (isset($thongbao) && ($thongbao != "")) {
            echo $thongbao;
          }
          ?>
        </p>
        <a href="index.php?act=quenmk">Quên mật khẩu?</a>
      </form>
    </div>
    <div class="toggle-container">
      <div class="toggle">
        <div class="toggle-panel toggle-right">
          <h1>ĐĂNG NHẬP TÀI KHOẢN</h1>
          <p>
            Nhập thông tin cá nhân của bạn để sử dụng tất cả các tính năng của
            trang web
          </p>
        </div>
      </div>
    </div>
  </div>
</div>