document.addEventListener("DOMContentLoaded", function () {
  var editButton = document.getElementById("editButton");

  if (editButton) {
    editButton.addEventListener("click", function () {
      // Replace "/duong-dan-cua-trang-sua" with the actual path to your edit page
      window.location.href = "../sua/update.html";
    });
  }
});
