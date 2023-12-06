<?php
$servername = "localhost";
$dbname = "duan1";
$username = "root";
$password = "vertrigo";
$port = 3308;

$conn = new PDO("mysql:host=$servername;dbname=$dbname;port=$port", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$tukhoa = !empty($_GET['tukhoa']) ? $_GET['tukhoa'] : "";
if (!empty($tukhoa)) {
    $sql = "select sp.*, MIN(btsp.btsp_giatien) AS min_giatien, MAX(btsp.btsp_giatien) AS max_giatien
                    FROM sanpham sp
                    inner JOIN bienthesanpham btsp ON sp.sp_id = btsp.sp_id
                    inner JOIN danhmuc dm ON btsp.dm_id = dm.dm_id
                    inner JOIN thuonghieu th ON btsp.th_id = th.th_id
                    inner JOIN dungtich dt ON btsp.dt_id = dt.dt_id
                    WHERE sp.sp_ten like '%";
    $sql .= $tukhoa;
    $sql .=         "%' and sp.is_active = 1 AND dm.is_active = 1 AND th.is_active = 1 AND dt.is_active = 1
                    GROUP BY
                    sp.sp_id, sp.sp_ten";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $searchresult = array();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $searchresult[] = array(
            'sp_id' => $row['sp_id'],
            'sp_img' => $row['sp_img'],
            'sp_ten' => $row['sp_ten'],
            'min_giatien' => $row['min_giatien'],
            'max_giatien' => $row['max_giatien']
        );
    }
    // var_dump($searchresult);
    echo json_encode($searchresult);
} 
else{
    $searchresult = '';
    echo json_encode($searchresult);
}
// if ($row) {
//     $response['btsp_id'] = $row['btsp_id'];
//     $response['btsp_ten'] = $row['btsp_ten'];
//     $response['btsp_soluongconlai'] = $row['btsp_soluongconlai'];
//     $response['btsp_giatien'] = $row['btsp_giatien'];
//     $response['dt_dungtich'] = $row['dt_dungtich'];
//     echo json_encode($response);
// } 
// else {
//     echo json_encode(new stdClass());
// }
