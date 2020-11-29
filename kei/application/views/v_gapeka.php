<?php
$koneksi = mysqli_connect("localhost", "root", "", "kei");
$nama_stasiun = mysqli_query($koneksi, "SELECT nama_stasiun FROM transport WHERE no_kereta=$no_kereta  order by id_transport asc");
$tiba = mysqli_query($koneksi, "SELECT tiba FROM transport WHERE no_kereta=$no_kereta order by id_transport asc");
$nama_kereta = mysqli_query($koneksi, "SELECT distinct nama_kereta FROM transport WHERE no_kereta=$no_kereta");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Gapeka</title>
</head>

<body>
    <div class="container">
        <canvas id="myChart" width="1200" height="400"></canvas>
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [<?php while ($b = mysqli_fetch_array($nama_stasiun)) {
                                    echo '"' . $b['nama_stasiun'] . '",';
                                } ?>],
                    datasets: [{
                        label: [<?php while ($b = mysqli_fetch_array($nama_kereta)) {
                                    echo '"' . $b['nama_kereta'] . '",';
                                } ?>],
                        data: [<?php while ($p = mysqli_fetch_array($tiba)) {
                                    echo '"' . $p['tiba'] . '",';
                                } ?>],
                        backgroundColor: [
                            'rgba(0, 0, 0, 0)',
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>
    </div>
</body>

</html>