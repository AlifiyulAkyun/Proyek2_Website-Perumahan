@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome Back, {{auth()->user()->name}}</h1>
</div>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Green Orchid</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="bd-placeholder-img" width="100%" height="50%" src="{{asset('assets/img/p1.jpg')}}" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#777" />

                <div class="container">

                </div>
            </div>
            <div class="carousel-item">
                <img class="bd-placeholder-img" width="100%" height="50%" src="{{asset('assets/img/p1.jpg')}}" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#777" />

                <div class="container">

                </div>
            </div>
            <div class="carousel-item">
                <img class="bd-placeholder-img" width="100%" height="50%" src="{{asset('assets/img/p1.jpg')}}" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#777" />

                <div class="container">

                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <br>
    <div class="row">

        <div class="col-lg-6">

            <!-- Default Card Example -->
            <div class="card mb-4">
                <div class="card-header m-0 font-weight-bold text-primary">
                Perumahan Green Orchid Residence Malang
                </div>
                <div class="card-body">
                Perumahan Green Orchid Residence dibangun di kawasan yang sangat strategis yaitu di Malang. <br>
                Proyek ini dibangun oleh pengembang ternama yang memiliki kredibilitas yang tinggi dibidang properti. <br>
                Green Orchid Residence dilengkapi dengan berbagai fasilitas yang sangat memanjakan <br>
                dan berdekatan dengan berbagai fasilitas umum dan sosial. <br>
                </div>
            </div>

            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"> Keunggulan Memilih Rumah Dijual di Green Orchid Residence</h6>
                </div>
                <div class="card-body">


                  > Lokasi strategis yaitu di Malang <br>
                  > Harga jual rumah di Green Orchid Residence terjangkau <br>
                  > Memiliki fasilitas beragam untuk menunjang gaya hidup modern<br>
                  > Dekat dengan akses berbagai moda transportasi<br>
                  > Dekat dengan pusat perbelanjaan ternama<br>
                  > Dekat dengan pusat pendidikan<br>
                  > Tersedia promo-promo menarik untuk setiap pembelian<br>
                </div>
            </div>

        </div>

        <div class="col-lg-6">

            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Alamat Perumahan Green Orchid Residence</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                       
                    </div>
                </div>
                <!--Card Body -->
                <div class="card-body"><p>
                Alamat  Green Orchid Residence berada di Mojolangu, Lowokwaru, Malang, Jawa Timur. <br>
                Lokasi proyek ini sangat mudah capai, baik menggunakan kendaraan umum ataupun pribadi.<br>
                Tidak hanya itu, Green Orchid Residence juga berdekatan dengan berbagai moda transportasi umum .<br>
            </p>    
            </div>
            </div>

            <!-- Collapsable Card Example -->
             <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"> Tips Membeli Rumah di Green Orchid</h6>
                </div>
                <div class="card-body">
                  > Perhatikan apakah kondisi bangunan dalam kondisi layak pakai <br>
                  > Cek kelengkapan legalitas yang dimiliki properti tersebut<br>
                  > Perhatikan track record pengembang<br>
                  > Perhatikan aksesibilitas menuju properti<br>
                  > Perhatikan apakah lokasi properti rawan akan bencana, seperti banjir contohnya<br>
                    </div>
                </div>
            </div>

        </div>

    </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->

    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
@endsection