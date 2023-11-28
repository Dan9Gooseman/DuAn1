<script src="https://www.gstatic.com/charts/loader.js"></script>
<div class="boxcenter">
<div id="myChart" style="width:100%;height:auto;">
</div>
<script>
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        // Set Data
        var data = google.visualization.arrayToDataTable([
            ['SẢN PHẨM', 'SỐ LƯỢNG BIẾN THỂ'],
            <?php
            $tongdm = count($listthongke);
            $i = 1;
            foreach ($listthongke as $thongke) {
                extract($thongke);
                if ($i == $tongdm) $dauphay = "";
                else $dauphay = ",";
                echo "['" . $thongke['sp_ten'] . "'," . $thongke['countsp'] . "]" . $dauphay;
                $i += 1;
            }
            ?>
        ]);

        // Set Options
        const options = {
            title: 'BIỂU ĐỒ THỐNG KÊ SẢN PHẨM',
            is3d: true
        };

        // Draw
        const chart = new google.visualization.PieChart(document.getElementById('myChart'));
        chart.draw(data, options);

    }
</script>
