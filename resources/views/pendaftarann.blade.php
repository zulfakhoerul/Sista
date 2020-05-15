 <!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>shotgear</title>
  <link rel="icon" href="img/favicon.png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- animate CSS -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- owl carousel CSS -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <!-- font awesome CSS -->
  <link rel="stylesheet" href="css/all.css">
  <!-- flaticon CSS -->
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/themify-icons.css">
  <link rel="stylesheet" href="css/swiper.min.css">
  <!-- font awesome CSS -->
  <link rel="stylesheet" href="css/magnific-popup.css">
  <!-- swiper CSS -->
  <link rel="stylesheet" href="css/slick.css">
  <!-- style CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <!--::header part start::-->
  <header class="main_menu home_menu">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.html"> <img src="img/logo.png" alt="logo"> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="menu_icon"><i class="fas fa-bars"></i></span>
            </button>

            <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
              <ul class="navbar-nav">
              <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('senitari') }}">Seni Tari</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('pendaftarann') }}">Pendaftaran</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('penyewaan') }}">Penyewaan</a>
                                </li>
                
                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('about') }}">About</a>
                                </li>
              </ul>
            </div>
            <div class="dropdown cart">
              <a class="dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="flaticon-bag"></i>
              </a>
              <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <div class="single_product">
        
                                        </div>
                                    </div> -->
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- Header part end-->

  <!-- breadcrumb start-->
  <section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb_iner text-center">
            <div class="breadcrumb_iner_item">
              <h2>Formulir <br> <span>Pendaftaran Anggota</span></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->

  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map" style="height: 380;"></div>
        <!-- <script>
          function initMap() {
            var uluru = {
              lat: -25.363,
              lng: 131.044
            };
            var grayStyles = [{
                featureType: "all",
                stylers: [{
                    saturation: -90
                  },
                  {
                    lightness: 50
                  }
                ]
              },
              {
                elementType: 'labels.text.fill',
                stylers: [{
                  color: '#ccdee9'
                }]
              }
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
              center: {
                lat: -31.197,
                lng: 150.744
              },
              zoom: 9,
              styles: grayStyles,
              scrollwheel: false
            });
          }
        </script>
        <script
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap">
        </script>
 -->
      </div>


      <div class="row">
        <div class="col-0">
          <h2 class="contact-title">Form Pendaftaran</h2>
          
          <p>Isi data diri anda</p>
          <hr>
        </div>
        <div class="col-lg-20">
        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(\Session::has('alert'))
                                    <div class="alert alert-danger">
                                        <div>{{Session::get('alert')}}</div>
                                    </div>
                                @endif
                                @if(\Session::has('alert-success'))
                                    <div class="alert alert-success">
                                        <div>{{Session::get('alert-success')}}</div>
                                    </div>
                                @endif
          <form action="{{ url ('/pendaftarannPost') }}" method="post" >
          {{ csrf_field() }}
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                <th>Nama Lengkap :</th>
                <input class="form-control" id="nama" name="nama" type="text" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Nama Lengkap'" placeholder='masukan nama lengkap'>
                </div>
              </div>

            

              <div class="col-sm-6">
                <div class="form-group">
                <th>Tanggal Lahir :</th>
                <input class="form-control" name="tanggal_lahir" id="tanggal_lahir" type="date" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Tanggal Lahir'" placeholder=''>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                <th>Alamat :</th>
                <textarea class="form-control w-100" name="alamat" id="alamat" cols="10" rows="3"
                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'masukan alamat'"
                    placeholder='Enter Message'></textarea>                 
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                <th>Tempat Lahir :</th>
                <input class="form-control" name="tempat_lahir" id="tempat_lahir" type="tempat_lahir" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'tempat lahir'" placeholder='masukan tempat lahir'>
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                <th>No. Hp :</th>
                <input class="form-control" name="no_hp" id="no_hp" type="number" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'number'" placeholder='masukan no.hp'>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                <th>Pekerjaan :</th>
                <input class="form-control" name="pekerjaan" id="pekerjaan" type="text" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Pekerjaan'" placeholder='siswa, mahasiswa, dll'>
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                <th>Jenis Kelamin :</th><br>
                 <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki<br>
                 <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
                </div>
              </div>

            <div class="col-6">
                <div class="form-group">
                <th>Pilih Jenis Dance :</th>
                 <p><input type="checkbox" name="jenis_dance" value="tradisional" /> Tradisional dance</p>
                 <p><input type="checkbox" name="jenis_dance" value="modern" /> Modern dance</p>
                 <p><input type="checkbox" name="jenis_dance" value="k-pop" /> K-Pop dance</p>
                 <p><input type="checkbox" name="jenis_dance" value="hip-hop" /> Hip-Hop dance</p>
                 <p><input type="checkbox" name="jenis_dance" value="kontemporer" /> Kontemporer dance</p>
                </div>
              </div>              

              <div class="col-6">
                <div class="form-group">
                <th>E-Mail :</th>
                <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'E-Mail'" placeholder='masukan email'>
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                <th>Password :</th>
                <input class="form-control" name="password" id="password" type="password" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'password'" placeholder='masukan password'>
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                <th>Confirm Password :</th>
                <input class="form-control" name="confirmation" id="confirmation" type="password" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'confirm_password'" placeholder='confirm password'>
                </div>
              </div>

            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button-contactForm btn_2">Daftar</button>
              <button type="reset" class="button-contactForm btn_2">Batal</button>
            </div>
          </form>
        </div>
        <!-- <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Buttonwood, California.</h3>
              <p>Rosemead, CA 91770</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>00 (440) 9865 562</h3>
              <p>Mon to Fri 9am to 6pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>support@colorlib.com</h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->

  <!--::footer_part start::-->
  <footer class="footer-area">
  <div class="container">
            <div class="row justify-content-between">
                
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="single-footer-widget footer_icon">
                        <h4>Contact Info</h4>
                        <p>Krasak Jatibarang-Indramayu, belakang toko Andhika Jaya</p>
                        <ul>
                            <li><a href="#"><i class="ti-mobile"></i>+62 812-2111-2308</a></li>
                            <li><a href="#"><i class="ti-email"></i>chandra@gmail.com</a></li>
                            <li><a href="https://instagram.com/chandradeangelo?igshid=1lttys5fewhxe">
                                <i class="ti-instagram"></i>chandradeangelo</a></li>
                            <!--<li><a href="#"><i class="ti-world"></i> ariclawyerfirm.com</a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="single-footer-widget footer_3">
                        <h4>Instagram</h4>
                        <div class="single-footer-widget footer_icon">
                        <ul>
                            <li><a href="https://instagram.com/angelodancestudio?igshid=1b6tmj9qtp14x">
                                <i class="ti-instagram"></i>angelodancestudio</a></li>
                        </ul>
                        </div>
                        <div class="footer_img">
                            <div class="single_footer_img">
                                <img src="img/footer_img/1.png" alt="">
                                <i class="ti-instagram"></i>
                            </div>
                            <div class="single_footer_img">
                                <img src="img/footer_img/2.png" alt="">
                                <i class="ti-instagram"></i>
                            </div>
                            <div class="single_footer_img">
                                <img src="img/footer_img/3.png" alt="">
                                <i class="ti-instagram"></i>
                            </div>
                            <!--<div class="single_footer_img">
                                <img src="img/footer_img/4.png" alt="">
                                <i class="ti-instagram"></i>
                            </div>-->
                            <div class="single_footer_img">
                                <img src="img/footer_img/5.png" alt="">
                                <i class="ti-instagram"></i>
                            </div>
                            <!--<div class="single_footer_img">
                                <img src="img/footer_img/6.png" alt="">
                                <i class="ti-instagram"></i>
                            </div>-->
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="single-footer-widget footer_2">
                        <h4>Newsletter</h4>
                        <p>Stay updated with our latest trends see heaven so said place fruit.
                        </p>
                        <div class="form-wrap" id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="form-inline">
                                <input class="form-control" name="EMAIL" placeholder="Your Email Address"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                    required="" type="email">
                                <button class="btn btn-default text-uppercase"><i class="ti-angle-right"></i></button>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                        type="text">
                                </div>

                                <div class="info"></div>
                            </form>
                        </div>
                        <div class="social_icon">
                            <a href="#"> <i class="ti-facebook"></i> </a>
                            <a href="#"> <i class="ti-twitter-alt"></i> </a>
                            <a href="https://instagram.com/angelodancestudio?igshid=1b6tmj9qtp14x"> <i class="ti-instagram"></i> </a>
                            <a href="#"> <i class="ti-skype"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="copyright_part_text text-center">
            <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Kelompok 6</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--::footer_part end::-->

  <!-- jquery plugins here-->
  <script src="js/jquery-1.12.1.min.js"></script>
  <!-- popper js -->
  <script src="js/popper.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- easing js -->
  <script src="js/jquery.magnific-popup.js"></script>
  <!-- swiper js -->
  <script src="js/swiper.min.js"></script>
  <!-- swiper js -->
  <script src="js/jquery.filterizr.min.js"></script>
  <!-- particles js -->
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <!-- slick js -->
  <script src="js/slick.min.js"></script>
  <script src="js/swiper.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/contact.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.form.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/mail-script.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
</body>

</html>