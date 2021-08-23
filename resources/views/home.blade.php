<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css"/>

    <title>Satgas Salatiga</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <div class="container">
            <a class="navbar-brand" href="" style="color:white"><img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Lambang_Kota_Salatiga.png" width="40px"> Satgas Salatiga</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="" style="color:white">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"  style="color:white">
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

    <div class="jumbotron">
        <div class="container">
        <h1 class="display-4"><span class="font-weight-bold">Satgas Covid Salatiga</span></h1>
        <p></p>
            <hr class="my-4">
            <p class="lead">Selamat Datang di Website Satgas Covid Salatiga &#128521;</p>
            <a class="btn btn-Success btn-lg font-weight-bold" href="/covid" role="button">LIHAT DATA COVID</a><br>
            <a class="btn btn-Success btn-lg font-weight-bold" href="/rumahsakit" role="button">LIHAT DAFTAR RS SALATIGA</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

</body>
</html>