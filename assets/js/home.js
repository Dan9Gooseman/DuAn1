    var images = ["mini-banner1.jpg", "mini-banner2.jpg", "mini-banner3.jpg"];
    var currentIndex = 0;
    function changeImage() {
        document.getElementById("loop-banner").src = "assets/banner/" + images[currentIndex];
        currentIndex = (currentIndex + 1) % images.length;
    }
    setInterval(changeImage, 2000);