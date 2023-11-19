<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CHI TIẾT SẢN PHẨM</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="css/detailProduct - Copy.css" rel="stylesheet" />
</head>

<body>
  <div class="container-fluid my-3">
    <div class="row">
      <div class="col-md-4">
        <div class="">
          <img class="img-fluid" src="https://down-vn.img.susercontent.com/file/sg-11134201-22110-8z55xgq0c6jv64"
            alt="ProductS" />
          <!-- <div class="row my-3">
            <div class="col">
              <img class="w-100" src="https://down-vn.img.susercontent.com/file/sg-11134201-22110-8z55xgq0c6jv64"
                alt="preview" />
            </div>
            <div class="col">
              <img class="w-100" src="https://down-vn.img.susercontent.com/file/sg-11134201-22110-8z55xgq0c6jv64"
                alt="preview" />
            </div>
            <div class="col">
              <img class="w-100" src="https://down-vn.img.susercontent.com/file/sg-11134201-22110-8z55xgq0c6jv64"
                alt="preview" />
            </div>
            <div class="col">
              <img class="w-100" src="https://down-vn.img.susercontent.com/file/sg-11134201-22110-8z55xgq0c6jv64"
                alt="preview" />
            </div>
          </div> -->
        </div>
      </div>
      <div class="col-md-8">
        <div class="container-fluid">
          <h3 class="display-7 word-wrap">tên sản phẩm</h3>
          <div class="flex item-padding item-center-horizontal">
            <div class="price">69.000.000đ</div>
          </div>
          <div>
            <div>Thương hiệu :</div>
          </div>
          <div class="flex flex-column">
            <div class="flex item-center-horizontal margin-top-2">
              <div style="margin: 0 2rem 0.5rem 0">Dung Tích</div>
              <div class="" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check custom-radio" name="btnradio" id="btnradio1" autocomplete="off"
                  checked />
                <label class="btn btn-outline-primary btn-style" for="btnradio1">330ml</label>
                <input type="radio" class="btn-check custom-radio" name="btnradio" id="btnradio4" autocomplete="off" />
                <label class="btn btn-outline-primary btn-style" for="btnradio4">690ml</label>

                <input type="radio" class="btn-check custom-radio" name="btnradio" id="btnradio5" autocomplete="off" />
                <label class="btn btn-outline-primary btn-style" for="btnradio5">1000ml</label>
              </div>
            </div>
            <div class="flex item-center-horizontal margin-top-2">
              <div style="margin: 0 2rem 0.5rem 0">Số lượng</div>
              <div class="flex">
                <button class="btn btn-primary btn-light btn-outline-dark customBtn" id="minus" type="submit">
                  <i class="fa-solid fa-minus"></i>
                </button>
                <input class="customInput" id="num" type="text" min="1" max="100" step="1" value="1" />
                <button class="btn btn-primary btn-light btn-outline-dark customBtn" id="plus" type="submit">
                  <i class="fa-solid fa-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="flex margin-top-2">
            <button class="btn btn-primary btn-style-2">Mua ngay</button>
            <button class="btn btn-primary btn-style-2">
              Thêm vào giỏ hàng
            </button>
          </div>

          <div class="detail-box">
            <h4 class="mota">mô tả sản phẩm</h4>
            <p class="chitiet">Câu “The quick brown fox jumps over the lazy dog.”

              (Tạm dịch là Con cáo nâu nhanh nhẹn nhảy qua con một con chó
              lười bi
              có quen thuộc với bạn không? Trước đây khi sử dụng công thức
              rand,

              Word sẽ tạo câu pangram này (một câu hoặc cụm từ chứa tất cả các
              chữ
              tiếng Anh). Tuy nhiên, nó đã được thay thế bằng đoạn văn bản
              hiện tại
              Office 2007 ra đời.Tuy nhiên nó không biến mất hoàn toàn, bạn có
              thể
              lại câu này bằng cách gõ lệnh sau và nhấn Enter.)</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="comment-container">
    <div class="box-name">
      <h4>Bình luận</h4>
    </div>
    <div class="comment-box">
      <div class="comment">
        <strong>Phạm Văn A</strong>
        <p class="comment-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus, nesciunt dicta.
          Expedita velit minima distinctio, qui dolor aut laborum doloremque autem tempore dolores magnam iste. Odit
          dolores recusandae consectetur similique?</p>
        <span>thgian</span>
      </div>
      <div class="comment">
        <strong>Phạm Văn A</strong>
        <p class="comment-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus, nesciunt dicta.
          Expedita velit minima distinctio, qui dolor aut laborum doloremque autem tempore dolores magnam iste. Odit
          dolores recusandae consectetur similique?</p>
        <span>thgian</span>
      </div>
      <div class="comment">
        <strong>Phạm Văn A</strong>
        <p class="comment-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus, nesciunt dicta.
          Expedita velit minima distinctio, qui dolor aut laborum doloremque autem tempore dolores magnam iste. Odit
          dolores recusandae consectetur similique?</p>
        <span>thgian</span>
      </div>
      <div class="comment">
        <strong>Phạm Văn A</strong>
        <p class="comment-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus, nesciunt dicta.
          Expedita velit minima distinctio, qui dolor aut laborum doloremque autem tempore dolores magnam iste. Odit
          dolores recusandae consectetur similique?</p>
        <span>thgian</span>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/01804f5b6a.js" crossorigin="anonymous"></script>
  <script src="js/detailProduct.js"></script>
</body>

</html>