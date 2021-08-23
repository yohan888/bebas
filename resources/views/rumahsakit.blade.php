<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css"/>

    <title>Satgas Salatiga</title>
</head>
<body>
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
                    <li><a class="dropdown-item" href="">Rumah Sakit</a></li>
                </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tentangkami" style="color:white">Tentang kami</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
            <div class="container" style="margin-top: 4%">
            <h2 style="margin-bottom: -1%">Daftar RS. Kota Salatiga</h2>
                <div class="table-responsive"><br><br>
                    <table class="table table-striped" style="font-family: arial, sans-serif; border-collapse: collapse; width: 100%">
                        <thead class="thead-dark">
                            <tr style="border: 1px solid #dddddd; text-align: left; padding: 8px">
                                <th scope="col">No.</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Telepon</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                        <?php
                            for($i=0; $i<count($data); $i++){
                                echo "<tr style='border: 1px solid #dddddd; text-align: left; padding: 8px'>";
                                echo "<td>".($i+1)."</td>";
                                echo "<td>".$data[$i]['nama']."</td>";
                                echo "<td>".$data[$i]['alamat']."</td>";
                                echo "<td>".$data[$i]['telepon']."</td>";
                                echo "</tr>";
                            } 
                        ?>
                        </tbody>
                    </table><br><br><br>
                </div>
            </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

</body>
</html>