<?php
include('koneksicovid.php');

$jumlah  = mysqli_query($koneksi, "SELECT active_cases FROM covid_data");
$negara  = mysqli_query($koneksi, "SELECT country FROM covid_data");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>GRAFIK DOUGHNUT "ACTIVE CASES" COVID-19</title>
    <script src="Chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style type="text/css">
        body {
                padding-top: 4%;
            }
        .container {
            width: 35%;
            margin: 15px auto;
        }
    </style>
</head>

<body>
    <center><h2>GRAFIK DOUGHNUT "ACTIVE CASES" COVID-19</h2></center>
    
    <div class="container">
        <canvas id="doughnutchart" width="100" height="100"></canvas>
    </div>

</body>
</html>

<script  type="text/javascript">
var ctx = document.getElementById("doughnutchart").getContext("2d");
var data = {
            labels: [<?php while ($p = mysqli_fetch_array($negara)) { echo '"' . $p['country'] . '",';}?>],
            datasets: [
            {
            data: [<?php while ($p = mysqli_fetch_array($jumlah)) { echo '"' . $p['active_cases'] . '",';}?>],
            backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
					'rgba(255, 159, 64, 0.2)',
					'rgba(234, 214, 77, 0.2)',
					'rgba(75, 192, 192, 0.2)',
                    'rgba(133, 196, 155, 0.2)',
                    'rgba(50, 96, 17, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(20, 4, 160, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 99, 255, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(255, 159, 64, 1)',
					'rgba(234, 214, 77, 1)',
					'rgba(75, 192, 192, 1)',
                    'rgba(133, 196, 155, 1)',
                    'rgba(50, 96, 17, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(20, 4, 160, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 99, 255, 1)'
					],
                    label: 'Presentase Kasus Covid-19',
            }
            ]
            };

            var mydoughnutchart = new Chart(ctx, {
                type: 'doughnut',
                data: data,
                options: {
                    responsive: true
                }
            });

</script>