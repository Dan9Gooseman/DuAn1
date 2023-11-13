document.addEventListener("DOMContentLoaded", function () {
  var luudc = document.getElementById("luudc");

  if (luudc) {
    luudc.addEventListener("click", function () {
      // Replace "/duong-dan-cua-trang-ca-nhan" with the actual path to your personal profile page
      window.location.href = "../../trangcanhan/trangcanhan.html";
    });
  }
});
