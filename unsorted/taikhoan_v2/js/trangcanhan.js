document.addEventListener("DOMContentLoaded", function () {
  var donHangElement = document.getElementById("donhang");
  var thongTinElement = document.getElementById("thongtin");
  var capNhatElement = document.getElementById("capnhat");

  if (donHangElement) {
    donHangElement.addEventListener("click", function () {
      // Replace "/duong-dan-cua-trang-don-hang" with the actual path to your order page
      window.location.href = "../donhang/thongtindonhang.html";
    });
  }

  if (thongTinElement) {
    thongTinElement.addEventListener("click", function () {
      // Replace "/duong-dan-cua-trang-thong-tin" with the actual path to your information page
      window.location.href = "../thaydoithongtin/thaydoithongtin.html";
    });
  }

  if (capNhatElement) {
    capNhatElement.addEventListener("click", function () {
      // Replace "/duong-dan-cua-trang-thong-tin" with the actual path to your information page
      window.location.href =
        "../diachinhanhang/diachithanhtoan/diachithanhtoan.html";
    });
  }
});
