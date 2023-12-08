<div id="result"></div>
<div class="container-fluid my-3">
  <div class="row">
    <div class="col-md-4">
      <div class="">
        <img class="img-fluid" src="<?php echo 'assets/uploads/' . $chitietsanpham[0]['sp_img']; ?>" alt="Ảnh sản phẩm" style="width:60%;" />
      </div>
    </div>
    <div class="col-md-5">

      <form action="" medthod="post">
        <input type="text" name="sp_id" hidden readonly value="<?php echo $sp_id ?>">
        <input type="text" name="btsp_id" id="btspID" hidden readonly>
        <h3 class="display-7 word-wrap" id="tensanpham"><?php echo $chitietsanpham[0]['sp_ten']; ?></h3>
        <div class="flex item-padding item-center-horizontal">
          <div class="price" id="giatien"><?php echo number_format($chitietsanpham[0]['min_giatien']) . '-' . number_format($chitietsanpham[0]['max_giatien']) . ' đ'; ?></div>
        </div>
        <div>
          <div>Thương hiệu : <?php echo $chitietsanpham[0]['th_thuonghieu']; ?></div>
        </div>
        <div class="flex flex-column">
          <div class="flex item-center-horizontal margin-top-2">
            <div style="margin: 0 2rem 0.5rem 0">Dung Tích</div>
            <div class="" role="group" aria-label="Basic radio toggle button group">
              <?php
              foreach ($dungtich as $dt) {
                extract($dt);
                echo '<input type="radio" class="btn-check custom-radio" name="btnradio" id="btnradio' . $dt_id . '" autocomplete="off" value="' . $dt_dungtich . '" />
                          <label class="btn btn-outline-primary btn-style" for="btnradio' . $dt_id . '">' . $dt_dungtich . '</label>';
              }
              ?>
            </div>
            <?php if(isset($_SESSION['error']['note'])){ echo '<p style="color:red;">'. $_SESSION["error"]["note"] .'</p>';} ?>
          </div>
          <div class="flex item-center-horizontal margin-top-2">
            <div style="margin: 0 2rem 0.5rem 0">Số lượng</div>
            <div class="flex">
              <div class="btn btn-primary btn-light btn-outline-dark customBtn" id="minus">
                <i class="fa-solid fa-minus"></i>
              </div>
              <input class="customInput" id="num" name="soluongconlai" type="text" min="1" max="100" step="1" value="1" />
              <div class="btn btn-primary btn-light btn-outline-dark customBtn" id="plus">
                <i class="fa-solid fa-plus"></i>
              </div>
            </div>
            <div style="margin: 0 2rem 0.5rem 1rem;color:gray;" id="soluongconlai"></div>
          </div>
        </div>
        <div class="flex margin-top-2">
          <?php if (empty($_SESSION['nguoidung'])) : ?>
            <button disabled type="submit" value="thêm vào giỏ hàng" name="themvaogiohang" class="btn btn-primary btn-style-2" id="submit1">Hãy đăng nhập để mua hàng</button>
          <?php else : ?>
            <button type="submit" value="thêm vào giỏ hàng" name="themvaogiohang" class="btn btn-primary btn-style-2" id="submit1">Thêm vào giỏ hàng</button>
          <?php endif ?>
        </div>

        <div class="detail-box">
          <h4 class="mota">mô tả sản phẩm</h4>
          <p class="chitiet"><?php echo $chitietsanpham[0]['sp_mota']; ?></p>
        </div>
      </form>

    </div>
    <div class="col-md-3">
      <img src="assets/banner/aside.jpg" style="margin-top:6rem;">
    </div>
  </div>
</div>
<div class="comment-container">
  <div class="box-name">
    <h4>Bình luận</h4>
  </div>
  <div class="comment-box">
    <?php
      $damua = damuahangchua($sp_id);
      if($damua == 'roi') {
      echo '<form method="post" action="" id="myForm">
              <textarea name="new-comment" id="new-comment" cols="500" rows="2" placeholder="Bình luận mới"></textarea>
              <input type="submit" name="submit-comment" value="Thêm bình luận">
            </form>';
      } else {
        echo '<p style="color:white;">Bạn phải đặt mua và nhận được sản phẩm này mới có thể bình luận</p>';
      }
    
    
    foreach ($binhluansanpham as $binhluan) {
      extract($binhluan);
      echo '<div class="comment">
                  <strong>' . $user_hovaten . '</strong>
                  <p class="comment-content">' . $bl_noidung . '</p>
                  <span>' . $bl_ngaytao . '</span>
                </div>';
    }
    ?>
  </div>
</div>
<script src="assets/js/chitietsanpham.js"></script>