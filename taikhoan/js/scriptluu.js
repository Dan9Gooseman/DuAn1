document.addEventListener("DOMContentLoaded", function () {
  var luu = document.getElementById("luu");

  if (luu) {
    luu.addEventListener("click", function () {
      // Replace "/duong-dan-cua-trang-ca-nhan" with the actual path to your personal profile page
      window.location.href = "../giaodien/index.html";
    });
  }
});
