<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Dashboard: Student</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="./css/bootstrap-theme.css" rel="stylesheet"> -->
    <link href="./css/elegant-icons-style.css" rel="stylesheet" />
    <link hrefs="./css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/owl.carousel.css" type="text/css">
    <link href="./css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <link href="./css/widgets.css" rel="stylesheet">
    <link href="./css/indexstyle.css" rel="stylesheet">
    <!-- <link href="./css/style-responsive.css" rel="stylesheet" /> -->
    <link href="./css/xcharts.min.css" rel=" stylesheet">
    <link href="./css/jquery-ui-1.10.4.min.css" rel="stylesheet">
</head>
<body>

    <?php
    include 'header.php';
    $username = $_SESSION["username"];
    $result   = mysqli_query($mysqli, "SELECT * FROM doctors WHERE login = '$username'");
    $res  = mysqli_fetch_array($result);
    $name = $res["name"];
?>

    <nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img src="./img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Wireless Patient Monitoring 
  </a>
</nav>



<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script src="./js/jquery.js"></script>
<script src="./js/jquery-ui-1.10.4.min.js"></script>
<script src="./js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="./js/jquery-ui-1.9.2.custom.min.js"></script>
<!-- bootstrap -->
<script src="./js/bootstrap.min.js"></script>
<!-- nice scroll -->

<!-- <script src="./js/charts.js"></script> -->
</br>
<div class="container col-md-5">
<div class="card card-custom bg-white border-white border-0">
          <div class="card-custom-img" style="background-image: url(./img/card_back.jpg);"></div>
          <div class="card-custom-avatar">
            <img class="img-fluid" src="./img/card.jpg" alt="Avatar" />
          </div>
          <div class="card-body" style="overflow-y: auto">
            <h4 class="card-title"><?php echo $name ?></h4>
            <p class="card-text"> Welcome <?php echo $name ?></p>
          </div>
          <div class="card-footer" style="background: inherit; border-color: inherit;">
            <a href="#" class="btn btn-primary">Option</a>
            <a href="#" class="btn btn-outline-primary">Other option</a>
          </div>
        </div>
</div>
</br>
<div class="container">
    <div class="row">
        <div class="card card-custom bg-white border-white border-0 col-md-5">
            <div class="container">
                </br>
            <h3>Patent 1</h3>
            <canvas id="myChart" width="400" height="300" ></canvas>
                <br>
            </div>
        </div>
        <div class="col-md-2"></div>
        <div class="card card-custom bg-white border-white border-0 col-md-5"">
            <div class="container">
                <br>
            <h3>Patent 2</h3>
            <canvas id="myChart2" width="400" height="300" ></canvas>
                <br>
            </div>
        </div>

    </div>
</div>
</br>
</br>
</br>
<script type="text/javascript">
    var Patent_1_temp = [];
    var Patent_1_Oxygen = [];
    var Patent_1_tm = [];

</script>
<?php 
    $dataset   = mysqli_query($mysqli, "SELECT * FROM data WHERE patent_Id = '1'");
    while ($datarow = mysqli_fetch_array($dataset,MYSQLI_ASSOC)) {
        // print_r($datarow);
        $tmp = explode(" ",$datarow['time'])[1];
        echo explode(":",$tmp)[0];
        // echo $tmp;

?>

        <script type="text/javascript">
            var str = <?php echo explode(":",$tmp)[0] ?> +" "+ <?php echo  explode(":",$typemp)[1] ?>;
            console.log(str);
            Patent_1_temp.push(<?php echo $datarow['temperature']; ?>);
            Patent_1_Oxygen.push(<?php echo $datarow['heartbeat'];?>);
            Patent_1_tm.push(str)
        </script>
        <!-- echo $datarow['heartbeat']; -->
        
    <?php
    }
?>

<script>
    console.log(Patent_1_tm);
var ctx = document.getElementById("myChart").getContext('2d');
ctx.width="800";
ctx.height="450";



var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: Patent_1_tm,
        datasets: [{
            label: 'Temperature',
            data: Patent_1_temp,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
            ],
            borderColor: [
                'rgba(255,99,132,1)',
            ],
            borderWidth: 1
        },
        {
            label: 'Heart Rate',
            data: Patent_1_Oxygen,
            backgroundColor: [
                'rgb(142,94,162,0.2)',
            ],
            borderColor: [
                '#8e5ea2',
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: false,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
<script>
var ctx = document.getElementById("myChart2").getContext('2d');
ctx.width="800";
ctx.height="450";
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: 'Oxygen',
            data: [7, 4, 1, 6, 5, 9],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
            ],
            borderColor: [
                'rgba(255,99,132,1)',
            ],
            borderWidth: 1
        },
        {
            label: 'Heart Rate',
            data: [8, 7, 9, 2, 4, 5],
            backgroundColor: [
                'rgb(142,94,162,0.2)',
            ],
            borderColor: [
                '#8e5ea2',
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: false,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
</body>

</html>



