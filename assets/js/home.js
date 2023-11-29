var images = [];
numberOfImages = 3;
for (var i = 1; i <= numberOfImages; i++) {
    images.push("mini-banner" + i + ".jpg");
}
var currentIndex = 0;
function changeImage() {
    var loopbanner = document.getElementById("loop-banner");
    if(loopbanner != null){
    loopbanner.src = "assets/banner/" + images[currentIndex];
    currentIndex = (currentIndex + 1) % images.length;     
    }

}
setInterval(changeImage, 2000);