<form action="index.php?act=capnhatmk" method="post">
    <h4>THAY ĐỔI MẬT KHẨU</h4>
    <div class="form1">
        <div class="password">
            <span>Mật khẩu hiện tại (bỏ trống nếu không đổi)</span>
        </div>
        <div class="nut">
            <input type="password" name="pass" value="<?php echo $_SESSION['nguoidung']['user_password'] ?>" />
        </div>
    </div>
    <div class="form1">
        <div class="passwordnew">
            <span>Mật khẩu mới (bỏ trống nếu không đổi)</span>
        </div>
        <div class="nut">
            <input type="password" name="user_password" />
        </div>
    </div>
    <input type="hidden" name="user_id" value="<?php echo $_SESSION['nguoidung']['user_id'] ?>">
    <input type="submit" name="capnhat_mk" value="Lưu thay đổi">
    <h2 class="thongbao">
        <?php
        if (isset($thongbao) && ($thongbao != "")) {

            echo $thongbao;
        }
        ?>
    </h2>
</form>