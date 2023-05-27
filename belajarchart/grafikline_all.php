<?php
include('koneksicovid.php');
$india = mysqli_query($koneksi, "SELECT * FROM covid_data WHERE country='India'");
$japan = mysqli_query($koneksi, "SELECT * FROM covid_data WHERE country='Japan'");
$korsel = mysqli_query($koneksi, "SELECT * FROM covid_data WHERE country='Korea Selatan'");
$turkey = mysqli_query($koneksi, "SELECT * FROM covid_data WHERE country='Turkey'");
$vietnam = mysqli_query($koneksi, "SELECT * FROM covid_data WHERE country='Vietnam'");
$taiwan = mysqli_query($koneksi, "SELECT * FROM covid_data WHERE country='Taiwan'");
$iran = mysqli_query($koneksi, "SELECT * FROM covid_data WHERE country='Iran'");
$indo = mysqli_query($koneksi, "SELECT * FROM covid_data WHERE country='Indonesia'");
$malay = mysqli_query($koneksi, "SELECT * FROM covid_data WHERE country='Malaysia'");
$israel = mysqli_query($koneksi, "SELECT * FROM covid_data WHERE country='Israel'");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>GRAFIK LINE CHART COVID-19</title>
    <script src="Chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style type="text/css">
        body {
                padding-top: 2%;
            }
        .container {
            width: 1400px;
            height: 625px;
            }
    </style>
</head>

<body>

    <center><h2>GRAFIK LINE KASUS COVID-19</h2></center>
    <br>
    <div class="container">
        <canvas id="linechart" width="100" height="100"></canvas>
    </div>

</body>
</html>

<script  type="text/javascript">
var ctx = document.getElementById("linechart").getContext("2d");
var data = {
            labels: ["Total Cases","Total Deaths","Total Recovered","Active Cases","Total Tests"],
            datasets: [
                {
                    label: "India",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#F87474",
                    borderColor: "#F87474",
                    pointHoverBackgroundColor: "#F87474",
                    pointHoverBorderColor: "#F87474",
                    data: [<?php while ($p = mysqli_fetch_array($india)) { echo '"' . $p['total_cases'] . '","' . $p['total_deaths'] . '","' . $p['total_recovered'] . '","' . $p['active_cases'] . '","' . $p['total_tests'] . '",';}?>]
                },
                {
                    label: "Japan",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#F07124",
                    borderColor: "#F07124",
                    pointHoverBackgroundColor: "#F07124",
                    pointHoverBorderColor: "#F07124",
                    data: [<?php while ($p = mysqli_fetch_array($japan)) { echo '"' . $p['total_cases'] . '","' . $p['total_deaths'] . '","' . $p['total_recovered'] . '","' . $p['active_cases'] . '","' . $p['total_tests'] . '",';}?>]
                },
                {
                    label: "Korea Selatan",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#FFC54D",
                    borderColor: "#FFC54D",
                    pointHoverBackgroundColor: "#FFC54D",
                    pointHoverBorderColor: "#FFC54D",
                    data: [<?php while ($p = mysqli_fetch_array($korsel)) { echo '"' . $p['total_cases'] . '","' . $p['total_deaths'] . '","' . $p['total_recovered'] . '","' . $p['active_cases'] . '","' . $p['total_tests'] . '",';}?>]
                },
                {
                    label: "Turkey",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#53BF9D",
                    borderColor: "#53BF9D",
                    pointHoverBackgroundColor: "#53BF9D",
                    pointHoverBorderColor: "#53BF9D",
                    data: [<?php while ($p = mysqli_fetch_array($turkey)) { echo '"' . $p['total_cases'] . '","' . $p['total_deaths'] . '","' . $p['total_recovered'] . '","' . $p['active_cases'] . '","' . $p['total_tests'] . '",';}?>]
                },
                {
                    label: "Vietnam",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#3EC70B",
                    borderColor: "#3EC70B",
                    pointHoverBackgroundColor: "#3EC70B",
                    pointHoverBorderColor: "#3EC70B",
                    data: [<?php while ($p = mysqli_fetch_array($vietnam)) { echo '"' . $p['total_cases'] . '","' . $p['total_deaths'] . '","' . $p['total_recovered'] . '","' . $p['active_cases'] . '","' . $p['total_tests'] . '",';}?>]
                },
                {
                    label: "Taiwan",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#CBE0E3",
                    borderColor: "#CBE0E3",
                    pointHoverBackgroundColor: "#CBE0E3",
                    pointHoverBorderColor: "#CBE0E3",
                    data: [<?php while ($p = mysqli_fetch_array($taiwan)) { echo '"' . $p['total_cases'] . '","' . $p['total_deaths'] . '","' . $p['total_recovered'] . '","' . $p['active_cases'] . '","' . $p['total_tests'] . '",';}?>]
                },
                {
                    label: "Iran",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#29B0D0",
                    borderColor: "#29B0D0",
                    pointHoverBackgroundColor: "#29B0D0",
                    pointHoverBorderColor: "#29B0D0",
                    data: [<?php while ($p = mysqli_fetch_array($iran)) { echo '"' . $p['total_cases'] . '","' . $p['total_deaths'] . '","' . $p['total_recovered'] . '","' . $p['active_cases'] . '","' . $p['total_tests'] . '",';}?>]
                },
                {
                    label: "Indonesia",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#2A516E",
                    borderColor: "#2A516E",
                    pointHoverBackgroundColor: "#2A516E",
                    pointHoverBorderColor: "#2A516E",
                    data: [<?php while ($p = mysqli_fetch_array($indo)) { echo '"' . $p['total_cases'] . '","' . $p['total_deaths'] . '","' . $p['total_recovered'] . '","' . $p['active_cases'] . '","' . $p['total_tests'] . '",';}?>]
                },
                {
                    label: "Malaysia",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#A149FA",
                    borderColor: "#A149FA",
                    pointHoverBackgroundColor: "#A149FA",
                    pointHoverBorderColor: "#A149FA",
                    data: [<?php while ($p = mysqli_fetch_array($malay)) { echo '"' . $p['total_cases'] . '","' . $p['total_deaths'] . '","' . $p['total_recovered'] . '","' . $p['active_cases'] . '","' . $p['total_tests'] . '",';}?>]
                },
                {
                    label: "Israel",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#979193",
                    borderColor: "#979193",
                    pointHoverBackgroundColor: "#979193",
                    pointHoverBorderColor: "#979193",
                    data: [<?php while ($p = mysqli_fetch_array($israel)) { echo '"' . $p['total_cases'] . '","' . $p['total_deaths'] . '","' . $p['total_recovered'] . '","' . $p['active_cases'] . '","' . $p['total_tests'] . '",';}?>]
                }
                ]
        };

var myBarChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: {
            responsive:true,
            maintainAspectRatio: false,
            legend: {
            display: true
            },
            barValueSpacing: 20,
            scales: {
            yAxes: [{
                ticks: {
                    min: 0,
                }
            }],
            xAxes: [{
                    gridLines: {
                        color: "rgba(0, 0, 0, 0)",
                        }
                    }]
            }
        }
        });
</script>