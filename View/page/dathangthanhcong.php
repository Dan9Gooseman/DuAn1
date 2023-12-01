<?php
if (isset($_SESSION['dathangthanhcong'])) {
    echo '<div>Cảm ơn bạn đã đặt hàng';
    echo '<a href="index.php">Về trang chủ</a>';
    unset($_SESSION['dathangthanhcong']);
} else {
    header("Location: index.php");
    exit(); // Ensure that the script stops executing after redirection
}

?>