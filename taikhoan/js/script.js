document.addEventListener("DOMContentLoaded", function () {
  var donHangElement = document.getElementById("donhang");
  var thongTinElement = document.getElementById("thongtin");
  var capNhatElement = document.getElementById("capnhat");

  if (donHangElement) {
    donHangElement.addEventListener("click", function () {
      // Replace "/duong-dan-cua-trang-don-hang" with the actual path to your order page
      window.location.href = "../donhang/donhang.html";
    });
  }

  if (thongTinElement) {
    thongTinElement.addEventListener("click", function () {
      // Replace "/duong-dan-cua-trang-thong-tin" with the actual path to your information page
      window.location.href = "../thongtin/thongtin.html";
    });
  }

  if (capNhatElement) {
    capNhatElement.addEventListener("click", function () {
      // Replace "/duong-dan-cua-trang-thong-tin" with the actual path to your information page
      window.location.href = "../diachi/home/diachi.html";
    });
  }
});
