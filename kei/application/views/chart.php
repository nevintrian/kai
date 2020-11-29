<?php
//koneksi
$koneksi = new mysqli('localhost', 'root', '', 'kei');

//untuk mengambil nilai nama_stasiun solo
$sql_solo = "select nama_stasiun from transport where nama_kereta='wir santoso'";
$query_solo = mysqli_query($koneksi, $sql_solo);

//untuk mengambil berangkat dari januari sampai juni
$sql_label = "select * from transport Group by berangkat order by id ";
$query_label = mysqli_query($koneksi, $sql_label);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>chart</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</head>

<body>
  <div class="t" style="width:600px;background-color:skyblue">
    <center>
      <h3 style="padding:10px">Chart nama_stasiun Beras Antar nama_kereta</h3>
    </center>
    <canvas id="nama_keretaChart"></canvas>
  </div>
  <script>
    var nama_keretaCanvas = document.getElementById("nama_keretaChart");

    Chart.defaults.global.defaultFontFamily = "Lato";
    Chart.defaults.global.defaultFontColor = "black";
    Chart.defaults.global.defaultFontSize = 12;

    var dataFirst = {
      label: "Wir Santoso",
      data: [<?php foreach ($query_solo as $key) {
                echo  '"' . $key['nama_stasiun'] . '",';
              } ?>],
      lineTension: 0.3,
      fill: false,
      borderColor: 'red',
      backgroundColor: 'transparent',
      pointBorderColor: 'red',
      pointBackgroundColor: 'red',
      pointRadius: 5,
      pointHoverRadius: 7,
      pointHitRadius: 7,
      pointBorderWidth: 2,
      pointStyle: 'rect'
    };

    var nama_keretaData = {
      labels: [<?php foreach ($query_label as $key) {
                  echo  '"' . $key['berangkat'] . '",';
                } ?>],
      datasets: [dataFirst, dataSecond, datathird, four]
    };

    var chartOptions = {
      legend: {
        display: true,
        position: 'top',
        labels: {
          boxWidth: 80,
          fontColor: 'black'
        }
      },
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true,
            userCallback: function(label, index, labels) {
              // when the floored value is the same as the value we have a whole number
              if (Math.floor(label) === label) {
                return label;
              }

            },
          }
        }],
        xAxes: [{
          ticks: {
            autoSkip: false,
            maxRotation: 90,
            minRotation: 0,
          }
        }]

      },


    };

    var lineChart = new Chart(nama_keretaCanvas, {
      type: 'line',
      data: nama_keretaData,
      options: chartOptions
    });
  </script>
</body>

</html>