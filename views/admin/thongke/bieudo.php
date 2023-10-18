<?php
$chartData = load_all_thongke();
$labels = [];
$data = [];

foreach ($chartData as $row) {
    $labels[] = $row['name'];
    $data[] = $row['soluong'];
}

$chartDataJSON = json_encode($data);
?>
    <div style="width: 500px;">
        <canvas id="myChart"></canvas>
        <button id="toggleChartType">Chuyển đổi loại biểu đồ</button>
    </div>

    <script>
        var currentChartType = "pie"; 

        var chartData = {
            labels: <?php echo json_encode($labels); ?>,
            datasets: [{
                data: <?php echo $chartDataJSON; ?>,
                backgroundColor: [
                    'red',
                    'blue',
                    'green',
                    'orange',
                    'purple',
                ]
            }]
        };

        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            type: currentChartType,
            data: chartData,
        });

        document.getElementById('toggleChartType').addEventListener('click', function () {
            if (currentChartType === "pie") {
                currentChartType = "bar"; // Chuyển sang biểu đồ cột
            } else {
                currentChartType = "pie"; // Chuyển lại biểu đồ tròn
            }

            chart.destroy();
            chart = new Chart(ctx, {
                type: currentChartType,
                data: chartData,
            });
        });
    </script>
