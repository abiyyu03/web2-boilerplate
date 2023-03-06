<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body class="d-flex flex-column min-vh-100">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">MyApp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Grafik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Data</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->

    <!-- contain -->
    <div class="container mb-4">
        <div class="mt-4 mb-1 text-center">
            <h3>Data Penduduk Negara Konoha Berdasarkan Pekerjaan Tahun 2021</h3>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="card border-4 bg-success text-white border border-success border-top-0 border-bottom-0 border-end-0 mt-4 shadow">
                    <div class="card-body">
                        <div class=" d-flex justify-content-between">
                            <div class=" ">
                                <p class="card-text fw-bold mb-1">Total Data</p>
                                <h2 class="card-title fw-light">1.900.000</h2>
                            </div>
                            <div class=" ">
                                <i class="fa-solid fa-percentage fa-4x text-white text-opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="card border-4 border bg-primary border-primary text-white border-top-0 border-bottom-0 border-end-0 mt-4 shadow">
                    <div class="card-body">
                        <div class=" d-flex justify-content-between">
                            <div class=" ">
                                <p class="card-text fw-bold mb-1">Pekerja</p>
                                <h2 class="card-title fw-light">1.000.000</h2>
                            </div>
                            <div class=" ">
                                <i class="fa-solid fa-person-digging fa-4x text-white text-opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="card border-4 border border-success border-top-0 border-bottom-0 border-end-0 mt-4 shadow">
                    <div class="card-body">
                        <div class=" d-flex justify-content-between">
                            <div class=" ">
                                <p class="card-text fw-bold mb-1">Jenis Pekerjaan</p>
                                <h2 class="card-title fw-light">74</h2>
                            </div>
                            <div class=" ">
                                <i class="fa-solid fa-briefcase fa-4x text-success text-opacity-50"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="card border-4 border border-success border-top-0 border-bottom-0 border-end-0 mt-4 shadow">
                    <div class="card-body">
                        <div class=" d-flex justify-content-between">
                            <div class=" ">
                                <p class="card-text fw-bold mb-1">Kota/Kabupaten</p>
                                <h2 class="card-title fw-light">123</h2>
                            </div>
                            <div class=" ">
                                <i class="fa-regular fa-building fa-4x text-success text-opacity-50"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="card border-4 border border-primary border-top-0 border-bottom-0 border-end-0 mt-4 shadow">
                    <div class="card-body">
                        <div class=" d-flex justify-content-between">
                            <div class=" ">
                                <p class="card-text fw-bold mb-1">Kecamatan</p>
                                <h2 class="card-title fw-light">544</h2>
                            </div>
                            <div class=" ">
                                <i class="fa-solid fa-city fa-4x text-primary text-opacity-50"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="card border-4 border border-primary border-top-0 border-bottom-0 border-end-0 mt-4 shadow">
                    <div class="card-body">
                        <div class=" d-flex justify-content-between">
                            <div class=" ">
                                <p class="card-text fw-bold mb-1">Kelurahan</p>
                                <h2 class="card-title fw-light">1.231</h2>
                            </div>
                            <div class=" ">
                                <i class="fa-solid fa-tree-city fa-4x text-primary text-opacity-50"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
    <!-- end of contain -->

    <!-- footer -->
    <footer class="footer bottom-0 text-center mt-auto bg-dark"> 
        <div class="mx-4 mt-3">
            <p class="small text-white">
                CopyLeft 20232 - created with <i class="fas fa-heart text-danger"></i> by you, yes you !!
            </p>
        </div>
    </footer>
    <!-- end of footer -->
</body>
</html>
