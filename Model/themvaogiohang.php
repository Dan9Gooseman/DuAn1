<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

$btsp_id = isset($_GET['btsp_id']) ? $_GET['btsp_id'] : '';
$soluong = isset($_GET['soluong']) ? $_GET['soluong'] : '';
$response1 = array();
if ($btsp_id !== '' && $soluong !== '') {
    if (isset($_SESSION['cart'][$btsp_id])) {
        $_SESSION['cart'][$btsp_id] += $soluong;
        // echo json_encode("Đã cộng thêm số lượng");
        $response1 = array('message' => "Đã cộng thêm số lượng");
    } else {
        $_SESSION['cart'][$btsp_id] = $soluong;
        // echo json_encode("Đã thêm vào giỏ hàng");
        $response1 = array('message' => "Đã thêm vào giỏ hàng");
    }
} else {
    // echo json_encode("Invalid data");
    $response1 = array('message' => "Invalid data");
}
echo json_encode($response1);
?>
