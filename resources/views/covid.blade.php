<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css"/>
    <script src="{{asset('js/chart.js')}}" type="text/javascript"></script>

    <title>Satgas Salatiga</title>
</head>
<body>
    <style type="text/css">
		body{
			font-family: roboto;
		}
	</style>
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <div class="container">
            <a class="navbar-brand" href="/" style="color:white"><img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Lambang_Kota_Salatiga.png" width="40px"> Satgas Salatiga</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/" style="color:white">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"  style="color:white">
                    Informasi
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="/covid">Covid</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="/rumahsakit">Rumah Sakit</a></li>
                </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tentangkami" style="color:white">Tentang kami</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <center style="margin-top:4%">
        <h3>Data Positif Salatiga</h3>
        <br>
        <div style="width: 600px;height: 500px">
            <canvas id="myChart"></canvas>
        </div>

        <h3>Data ODP Salatiga</h3>
        <br>
        <div style="width: 600px;height: 500px">
            <canvas id="myChart2"></canvas>
        </div>

        <h3>Data PDP Salatiga</h3>
        <br>
        <div style="width: 600px;height: 500px">
            <canvas id="myChart3"></canvas>
        </div>

        <h3>Data Sembuh Salatiga</h3>
        <br>
        <div style="width: 600px;height: 500px">
            <canvas id="myChart4"></canvas>
        </div>

        <script>
            var ctx = document.getElementById("myChart").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [
                        <?php
                            $tahun;
                            for ($i=0; $i < count($data); $i++) { 
                                echo '"'.$data[$i]['tahun'].'",';
                                $tahun = $data[$i]['tahun'];
                            }    
                            echo ++$tahun;
                        ?>
                    ],
                    datasets: [{
                        
                        data: [
                            <?php
                                for($i=0; $i<count($data); $i++){
                                    echo $data[$i]['positif'].',';
                                }
                                echo $avg;
                            ?>,
                        ],
                        backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        ],
                        borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(153, 102, 255, 1)',
                        ],
                        borderWidth: 1
                    }],
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });

            var ctx = document.getElementById("myChart2").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [
                        <?php
                            $tahun;
                            for ($i=0; $i < count($data); $i++) { 
                                echo '"'.$data[$i]['tahun'].'",';
                                $tahun = $data[$i]['tahun'];
                            }    
                            echo ++$tahun;
                        ?>
                    ],
                    datasets: [{
                        
                        data: [
                            <?php
                                for($i=0; $i<count($data); $i++){
                                    echo $data[$i]['odp'].',';
                                }
                                echo $avg;
                            ?>,
                        ],
                        backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        ],
                        borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(153, 102, 255, 1)',
                        ],
                        borderWidth: 1
                    }],
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });

            var ctx = document.getElementById("myChart3").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [
                        <?php
                            $tahun;
                            for ($i=0; $i < count($data); $i++) { 
                                echo '"'.$data[$i]['tahun'].'",';
                                $tahun = $data[$i]['tahun'];
                            }    
                            echo ++$tahun;
                        ?>
                    ],
                    datasets: [{
                        
                        data: [
                            <?php
                                for($i=0; $i<count($data); $i++){
                                    echo $data[$i]['pdp'].',';
                                }
                                echo $avg;
                            ?>,
                        ],
                        backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        ],
                        borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(153, 102, 255, 1)',
                        ],
                        borderWidth: 1
                    }],
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });

            var ctx = document.getElementById("myChart4").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [
                        <?php
                            $tahun;
                            for ($i=0; $i < count($data); $i++) { 
                                echo '"'.$data[$i]['tahun'].'",';
                                $tahun = $data[$i]['tahun'];
                            }    
                            echo ++$tahun;
                        ?>
                    ],
                    datasets: [{
                        
                        data: [
                            <?php
                                for($i=0; $i<count($data); $i++){
                                    echo $data[$i]['sembuh'].',';
                                }
                                echo $avg;
                            ?>,
                        ],
                        backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        ],
                        borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(153, 102, 255, 1)',
                        ],
                        borderWidth: 1
                    }],
                },
                options: {
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
        </center>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

</body>
</html>