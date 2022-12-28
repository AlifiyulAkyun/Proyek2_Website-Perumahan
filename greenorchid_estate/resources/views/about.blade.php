@extends('layouts.main')
@section('container')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Carousel Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">

    

    

<link href="../assets/dist1/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    

 
<main>
<div class="text-center">

<h1>ABOUT US</h1>
<br>
<p class=" lead text-center" style="text-align: justify">Having a strategic place and location, this makes it easier for you to access shopping centers, education and offices</p>

</div><!-- /.col-lg-4 -->


  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="bd-placeholder-img" width="100%" height="100%" src="{{asset('assets/img/p1.jpg')}}"  aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>

        <div class="container">
         
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="{{asset('img/d2.jpg')}}"  aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>

        <div class="container">
        
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="{{asset('img/d3.jpg')}}"  aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>

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


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-15 ">
<br>
<div class="text-center" >
    
<img class="bd-placeholder-img  " src="{{asset('assets/img/logo.png')}}" width="300px"></div>
        <br>
        <p style="text-align: justify; text-indent: 0.5in;">Berada di tengah Kota Malang, Green Orchid Residence memiliki sejumlah keunggulan yang menjadi idaman untuk investasi. Proyek perumahan ini merupakan kawasan mixed use, perpaduan antara hunian, komersil, perkantoran, dan hotel. Dalam Digital Expo (Digitex) Property 2020, Green Orchid Residence, selain sejumlah keunggulan ditawarkan, beragam promo menarik juga siap diberikan kepada pembeli selama pameran.

“Selain berlokasi di pusat kota, harga hunian yang kami tawarkan relatif murah dibanding perumahan lain. Kami juga memberikan promo free canopy untuk unit tertentu.

Fasilitas menarik yang ada di Green Orchid Residence di antaranya dekat dengan seluruh fasilitas dan menjanjikan nilai investasi dalam waktu singkat. Lokasinya di pertemuan Jalan Puncak Borobudur dan Jalan Soekarno-Hatta.

Ada empat tipe hunian yang ditawarkan Green Orchid Residence yaitu Grande, Emeralda, Venosa, dan Aranthera. 

Semua punya keunggulan masing-masing. Salah satunya adalah cluster grande yang dekat club house dan sarana ibadah masjid. Tetapi yang unggulan adalah cluster Emeralda dengan taman tematik venosa. Karena lebih dekat dengan gate oval dan patung kuda.</p>
     
      </div><!-- /.col-lg-4 -->
    

      
    </div><!-- /.row -->

   

    <!-- START THE FEATURETTES -->

     
      <div class="col-md-15">
 
        <img class="bd-placeholder-img" width="100%" height="100%" src="{{asset('assets/img/award.png')}}"  aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>

        
      </div>


      <div class="row">
      <div class="col-lg-15 ">
<br>
<div class="text-center" >
    
<img class="bd-placeholder-img  " src="{{asset('assets/img/logo-company.png')}}" width="400px"></div>
        <br>
        <p style="text-align: justify; text-indent: 0.5in;">Perumahan ini, mendapat penghargaan sebagai The Luxury Green Development Township Concept untuk Kategori Kawasan, Perumahan & Kota Baru. Hebatnya, Green Orchid Residence menerima penghargaan tersebut bersama sejumlah pengembang besar seperti Ciputra Group, Agung Podomoro Group, Modernland maupun Lyman Group.

Presiden Direktur Bumi Nusantara Megah Group, Hendra Hartanto, mengatakan, penghargaan yang diterima pihaknya sangat membanggakan, karena bisa sejajar dengan pengembang-pengembang besar yang sudah memiliki banyak proyek.

"Dengan penghargaan ini, kami akan lebih bersemangat dan berkomitmen untuk mengembangkan Green Orchid Residence sesuai dengan rencana dan menjadi ikon baru di kota Malang.

Green Orchid Residence pada tahap awal akan dikembangkan sebagai proyek mixed use development, perpaduan hunian berupa landed house, vertikal, area perkantoran, komersial hingga hotel dan fasilitas lainnya ini.

"Saat ini, lahan seluas 50 hektar (ha) sudah mulai dikembangkan dari rencana total lahan 100 ha. Desain Green Orchid Residence sendiri, dirancang oleh PTI Architects, konsultan berskala internasional dari Australia dan Sheils Flynn London, Inggris.

Saat ini tengah memasarkan 1.000 unit rumah yang terangkum dalam 6 klaster. Respon dari konsumen sendiri, kata dia, sangat positif dengan telah terjual lebih dari 500 unit.

"Hal ini, karena setiap unit rumah memiliki view yang menawan, yaitu panorama Gunung Arjuna. Lokasinya juga sangat strategis, hanya 20 menit ke Bandara Udara Abdul Rachman Saleh, Malang.

Keunggulan lain perumahan ini,sangat dekat dengan berbagai sarana pendidikan ternama dan berbagai fasilitas umum lainnya. Akses transportasi menuju kawasan perumahan yang memiliki patung kuda mewah sebagai gerbang utama ini, juga sangat mudah.

"Pengembangan properti di Kota Malang yang saat ini kian berkembang, membuat pilihan hunian juga sangat beragam. Keunggulan yang dimiliki Green Orchid Residence sebagai hunian dan investasi, akan semakin diminati dan nilainya meningkat cepat.</p>
     

<div class="col-md-15">

			<div class="section-header">
				<h3>More About Us</h3>
				<p>Passion creates prominent product & service</p>
			</div>
			<div class="row">
								<div class="col-lg-4 col-md-6">
					<div class="more">
						<a href="#" title="Our Team" class="thumbnail">
                        <h3><a>Our Team</a></h3>
							<img src="https://www.greenorchidresidence.com/wp-content/uploads/2022/02/Asset-3@2x.jpg" width="300px">
						</a>
					
					</div>
				</div>
								<div class="col-lg-4 col-md-6">
					<div class="more">
						<a href="#" title="Other Projects" class="thumbnail">
                        <h3><a>Other Projects</a></h3>
							<img src="https://www.greenorchidresidence.com/wp-content/uploads/2022/02/Asset-4@2x.jpg" width="300px">
						</a>
					
					</div>
				</div>
								<div class="col-lg-4 col-md-6">
					<div class="more">
						<a href="#" title="Partners" class="thumbnail">
                        <h3><a>Partners</a></h3>
							<img src="https://www.greenorchidresidence.com/wp-content/uploads/2022/02/Asset-5@2x.jpg" width="300px">
						</a>
						
					</div>
				</div>
							</div>
		</div>
	</section><!-- #more-about -->
</main>
<!-- Footer Start -->
<div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Soekarno Hatta No.36, Kota Malang</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>0341475669</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>www.greenorchidrecidence.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                 
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Quick Links</h5>
                        <a class="btn btn-link text-white-50" href="/about">About Us</a>
                        <a class="btn btn-link text-white-50" href="/posts">Property</a>
                        <a class="btn btn-link text-white-50" href="/facilities">Facilities</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Photo Gallery</h5>
                        <div class="row g-2 pt-2">
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="{{asset('assets/img/g1.jpeg')}}" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="{{asset('assets/img/g2.jpeg')}}" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="{{asset('assets/img/g3.jpeg')}}" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="{{asset('assets/img/g4.jpeg')}}" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="{{asset('assets/img/g5.jpeg')}}" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="{{asset('assets/img/g6.jpeg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Green Orchid official</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">greenorchidrecidence</a>, All Right Reserved. 
							

                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- Footer End -->
 <!-- Back to Top -->
 <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>

@endsection


   
