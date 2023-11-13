function toggleMenu() {
  var menu = document.getElementById("myMenu");
  if (menu.style.display === "block") {
    menu.style.display = "none";
  } else {
    menu.style.display = "block";
  }
}
document.addEventListener("click", function (event) {
  var menu = document.getElementById("myMenu");
  var box = document.getElementById("myBox");

  if (
    event.target !== box &&
    !box.contains(event.target) &&
    !menu.contains(event.target)
  ) {
    menu.style.display = "none";
  }
});
