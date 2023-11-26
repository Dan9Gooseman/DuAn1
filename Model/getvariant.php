<?php
$servername = "localhost";
$dbname = "duan1";
$username = "root";
$password = "vertrigo";
$port = 3308;

$conn = new PDO("mysql:host=$servername;dbname=$dbname;port=$port", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sp_id = !empty($_GET['sp_id']) ? $_GET['sp_id'] : "";
$dungtich = !empty($_GET['dungtich']) ? $_GET['dungtich'] : "";
// $dungtich = (string)$_GET['dungtich'];
$sql = "select btsp.btsp_id, btsp.btsp_ten, btsp.btsp_soluongconlai,btsp.btsp_giatien , dt.dt_dungtich
                    FROM sanpham sp
                    inner JOIN bienthesanpham btsp ON sp.sp_id = btsp.sp_id
                    inner JOIN danhmuc dm ON btsp.dm_id = dm.dm_id
                    inner JOIN thuonghieu th ON btsp.th_id = th.th_id
                    inner JOIN dungtich dt ON btsp.dt_id = dt.dt_id
                    WHERE sp.sp_id = '$sp_id' and dt.dt_dungtich = '$dungtich' and sp.is_active = 1 AND dm.is_active = 1 AND th.is_active = 1 AND dt.is_active = 1";
$stmt = $conn->prepare($sql);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$response = array();

if ($row) {
    $response['btsp_id'] = $row['btsp_id'];
    $response['btsp_ten'] = $row['btsp_ten'];
    $response['btsp_soluongconlai'] = $row['btsp_soluongconlai'];
    $response['btsp_giatien'] = $row['btsp_giatien'];
    $response['dt_dungtich'] = $row['dt_dungtich'];
    echo json_encode($response);
} 
// else {
//     echo json_encode(new stdClass());
// }
?>