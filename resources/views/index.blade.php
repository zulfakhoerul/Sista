<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sista</title>
    <link rel="icon" href="img/logo.png">
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

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
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
                            <a class="dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flaticon-bag"></i>
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

    <!--::banner part start::-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center justify-content-end">
                <div class="col-lg-5">
                    <div class="banner_text text-center">
                        <div class="banner_text_iner"> 
                         <!--<div class="banner_text_iner2">
                                 <h5>Sanggar Tari</h5>
                            <h1>Angelo <span>Dance School</span></h1>
                            <p>UNLIMITED TOTALITY</p>
                           <a href="#" class="btn_1">Login</a>
                            </div>-->

                            <div id="card1">
                                    <div id="card-content">
                                <div id="card-title">
                                    <h2>LOGIN</h2>
                                    <div class="underline-title"></div>
                                </div>
                                </div>
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
                                <form action="{{ url('/loginUserPost') }}" method="post" class="form"> 
                                {{ csrf_field() }}
                                            <label for="user-email" style="padding-top:13px">&nbsp;Email</label>
                                    <input
                                    id="user-email"
                                    class="form-content"
                                    type="email"
                                    name="email"
                                    autocomplete="on"
                                    required />
                                    <div class="form-border"></div>
                                    <label for="user-password" style="padding-top:22px">&nbsp;Password</label>
                                    <input
                                    id="user-password"
                                    class="form-content"
                                    type="password"
                                    name="password"
                                    required />
                                    <div class="form-border"></div>
                                    
                                    <input id="submit-btn" type="submit" name="submit" value="LOGIN" /><br> 
                                    <div>
                                    <center>
                                    <label for="daftar">Ingin Sewa Kostum?</label>
                                    <a class="link"  href="{{ url('user/pendaftaran_user') }}">Daftar</a>
                                    </center>
                                    </div> 
                               </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::banner part start::-->

    <!--::about_us part start::-->
    <section class="about_us padding_top">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8">
                    <div class="about_us_text text-center">
                        <h5>ANGELO GALERY</h5>
                        <h2>Sanggar Tari "Angelo Dance School"</h2>
                        <p></p>
                        <!--<a href="#" class="btn_2">read more</a>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::about_us part end::-->

    <!-- gallery_part part start-->
    
    <!-- gallery_part part end-->

    <!--::our_service part start::-->
    <section class="our_service padding_bottom">
        <div class="container">
        <div class="section-top-border">
				<h3></h3>
				<div class="row gallery-item">
					<div class="col-md-4">
						<a href="img/22.jpeg" class="img-pop-up img-gal gallery_img">
							<div class="single-gallery-image" style="background: url(img/22.jpeg);"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="img/tari1.jpeg" class="img-pop-up img-gal gallery_img">
							<div class="single-gallery-image" style="background: url(img/tari1.jpeg);"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="img/intro_video_bg.jpeg" class="img-pop-up img-gal gallery_img">
							<div class="single-gallery-image" style="background: url(img/intro_video_bg.jpeg);"></div>
						</a>
					</div>
					<div class="col-md-6">
						<a href="img/tari3.jpeg" class="img-pop-up img-gal gallery_img">
							<div class="single-gallery-image" style="background: url(img/tari3.jpeg);"></div>
						</a>
					</div>
					<div class="col-md-6">
						<a href="img/tari4.jpeg" class="img-pop-up img-gal gallery_img">
							<div class="single-gallery-image" style="background: url(img/tari4.jpeg);"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="img/ttt.jpeg" class="img-pop-up img-gal gallery_img">
							<div class="single-gallery-image" style="background: url(img/ttt.jpeg);"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="img/bp.jpeg" class="img-pop-up img-gal gallery_img">
							<div class=" single-gallery-image" style="background: url(img/bp.jpeg);"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="img/123.jpeg" class="img-pop-up img-gal gallery_img">
							<div class="single-gallery-image" style="background: url(img/123.jpeg);"></div>
						</a>
					</div>
				</div>
			</div>
        </div>
    </section>
    <!--::our_service part end::-->

    <!--::review_part part start::-->
    
    <!--::review_part part end::-->

    <!--::pricing part start::-->
   
    <!--::pricing part end::-->

    <!--::blog part start::-->
    
    <!--::blog part end::-->


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