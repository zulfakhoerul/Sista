<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sista</title>
    <link rel="icon" href="../img/logo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="../css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="../css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/themify-icons.css">
    <link rel="stylesheet" href="../css/swiper.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="../css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="../css/style.css">

    
    <link rel="stylesheet" href="{{url('fontawesome-free/css/all.min.css')}}">

</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="../img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ url('#') }}"><i class="fas fa-shopping-cart"></i> </a>
                            </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle"  id="navbarDropdownpro"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{Session::get('nama_user')}}
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownpro">
                                    <center>
                                        <a class="dropdown-item" href="{{ url('user/home_user') }}"><i class="fas fa-mask"></i> Kostum & Aksesoris</a>
                                        <a class="dropdown-item" href="{{ url('user/riwayat_sewa') }}"><i class="fas fa-receipt"></i> Riwayat Sewa</a>
                                        <a class="dropdown-item" href="/logoutUser"><i class="fas fa-sign-out-alt"></i> Logout </a>
                                        </center>
                                    </div>
                                </li>

                               
                        </div>
                        <div class="dropdown cart">
                            <!--<a class="dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flaticon-bag"></i>-->
                            </a>
                             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="single_product">
    
                                    </div>
                                </div> 
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
                            <!--<h2>Penyewaan</h2>-->
                            
                            <h2><span>Kostum & Aksesoris</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

  <!--::pricing part start::-->
  <div class="col-md-12 mt-3">
                    <div class="card" >
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mt-5">
                                    <img src="../img/gallery/tari1.jpeg" class="rounded mx-auto d-block" width="500">
                                </div>
                                <div class="col-md-6 mt-5">
                                    @if(\Session::has('alert'))
                                        <div class="alert alert-danger" align="center">
                                            <div>{{Session::get('alert')}}</div>
                                        </div>
                                    @endif
                                    <h2>Kostum</h2>
                                    <table class="table">
                                    <form action="">
                                        <thead>
                                            <tr>
                                                <td><strong>Nama Penyewa</strong></td>
                                                <td width="15px">:</td>
                                                <td><input type="text" name="nama_penyewa" class="form-control" required></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Email</strong> </td>
                                                <td width="15px">:</td>
                                                <td><input type="text" name="nama_penyewa" class="form-control" required></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Tanggal Sewa</strong> </td>
                                                <td width="15px">:</td>
                                                <td><input class="form-control" name="tanggal_lahir" id="tanggal_lahir" type="date" onfocus="this.placeholder = ''"
                                                    onblur="this.placeholder = 'Tanggal Lahir'" placeholder=''>
                                            </tr>
                                            <tr>
                                                <td><strong>Tanggal Pengembalian</strong> </td>
                                                <td width="15px">:</td>
                                                <td><input class="form-control" name="tanggal_lahir" id="tanggal_lahir" type="date" onfocus="this.placeholder = ''"
                                                    onblur="this.placeholder = 'Tanggal Lahir'" placeholder=''>
                                            </tr>
                                            <tr>
                                                <td><strong>Jumlah Sewa</strong> </td>
                                                <td width="15px">:</td>
                                                <td><input type="text" name="nama_penyewa" class="form-control" required> </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Total Harga</strong> </td>
                                                <td width="15px">:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Foto KTP/Identitas Diri</strong></td>
                                                <td width="15px">:</td>
                                                <td><input type="file" id="foto" name="foto" class="form-control-file"><br></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <button type="submit" class="button-contactForm btn_2"><i class="fas fa-cart-plus"></i>  Checkout</button> 
                                                    <td width="15px"></td>
                                                    <td>
                                                        <a href="{{ url('user/home_user') }}" class="button-contactFrom btn_2"> Batal</a>
                                                    </td>
                                                </td>
                                               
                                            </tr>
                                        </thead>
                                    </form>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    <!--::pricing part end::-->


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