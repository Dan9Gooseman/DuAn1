<?php
if (isset($_SESSION['dathangthanhcong'])) {
    echo'<div class="success">
            <h1>Cảm ơn bạn đã đặt hàng</h1>
            <a href="index.php">Quay về trang chủ</a>
        </div>';
    unset($_SESSION['dathangthanhcong']);
} else {
    header("Location: index.php");
    exit(); // Ensure that the script stops executing after redirection
}

?>
