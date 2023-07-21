<?php
require_once 'db_connection.php';

// Fetch data from the database
$sql = "SELECT country, COUNT(*) AS count FROM users GROUP BY country";
$result = mysqli_query($conn, $sql);

// Prepare data for the chart
$data = array();
while ($row = mysqli_fetch_array($result)) {
    $data[] = array($row["country"], (int)$row["count"]);
}

// Convert data to JSON format
$jsonData = json_encode($data);
?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages': ['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Country', 'Num of peoples'],
            <?php
            $sql = "SELECT country, COUNT(*) AS count FROM users GROUP BY country";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
              echo "['".$row["country"]."', ".$row["count"]."],";
            }
          ?>
        ]);

        var options = {
            title: 'Country Analysis'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
</script>
