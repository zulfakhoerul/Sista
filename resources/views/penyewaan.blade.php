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
    <link rel="stylesheet" href="css/nice-select.css">
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

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Penyewaan</h2>
                            <h2><span>Kostum & Aksesoris</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

  <!--::pricing part start::-->
    <section class="pricing_part section_padding">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-8 offset-lg-1">
                <hr>
                <table border="0" width="1000">
                    <tr>
                        <td><h4><b>Pilih Jenis Penyewaan</b></h4></td>
                        <td><h4><b>Pilih Jenis Seni Tari</b></h4></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-lg-3">
                                <div class="single-element-widget mt-30">
                                    <div class="default-select" id="default-select_2">
                                        <select>
                                            <option value=" 1">Semua Kategori</option>
                                            <option value="1">Tradisional</option>
                                            <option value="1">Tari Modern</option>
                                            <option value="1">KPOP</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="portfolio-filter filters">
                                    <ul>
                                        <li class="active" data-filter="all">Semua</li>
                                        <li data-filter="1">Tari Tradisional</li>
                                        <li data-filter="2">Tari Modern</li>
                                        <li data-filter="3">KPOP</li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
                <hr>
            </div>
                

                
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_pricing_part">
                        <div class="pricing_tittle">
                            <h5>Kostum - Tradisional</h5>
                        </div>
                        <div class="pricing_content">
                            <h4><strong>Kostum Jaipong</strong></h4>
                            <img src="img/gallery/tari1.jpeg" style="position: relative;" height="200">
                            <br><br>
                            <a href="{{ url('user/form_sewa') }}" class="btn_2">Sewa</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_pricing_part">
                        <div class="pricing_tittle">
                            <h5>Kostum - Tradisional</h5>
                        </div>
                        <div class="pricing_content">
                            <h4><strong>Kostum Jaipong</strong></h4>
                            <img src="img/22.jpeg" style="position: relative;" height="200">
                            <br><br>
                            <a href="#" class="btn_2">Sewa</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_pricing_part">
                        <div class="pricing_tittle">
                            <h5>Kostum - Tari Tradisional</h5>
                        </div>
                        <div class="pricing_content">
                            <h4><strong>Kostum</strong></h4>
                            <img src="img/intro_video_bg.jpeg" style="position: relative;" height="200">
                            <br><br>
                            <a href="#" class="btn_2">Sewa</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_pricing_part">
                        <div class="pricing_tittle">
                            <h5>Kostum - Tari K-POP</h5>
                        </div>
                        <div class="pricing_content">
                            <h4><strong>Kostum Blackpink(Kill This Love)</strong></h4>
                            <img src="img/bp.jpeg" style="position: relative;" height="200">
                            <br><br>
                            <a href="#" class="btn_2">Sewa</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_pricing_part">
                        <div class="pricing_tittle">
                            <h5>Kostum - Tari K-POP</h5>
                        </div>
                        <div class="pricing_content">
                            <h4><strong>Kostum Jennie(Solo)</strong></h4>
                            <img src="img/solo.png" style="position: relative;" height="200">
                            <br><br>
                            <a href="#" class="btn_2">Sewa</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_pricing_part">
                        <div class="pricing_tittle">
                            <h5>Kostum - Tari K-POP</h5>
                        </div>
                        <div class="pricing_content">
                            <h4><strong>Kostum Blackpink(Dududu ver2)</strong></h4>
                            <img src="img/bp4.png">
                            <br><br>
                            <a href="#" class="btn_2">Sewa</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_pricing_part">
                        <div class="pricing_tittle">
                            <h5>Kostum - Tari K-POP</h5>
                        </div>
                        <div class="pricing_content">
                            <h4><strong>Kostum 4Minute(Hate)</strong></h4>
                            <img src="img/4minute.png">
                            <br><br>
                            <a href="#" class="btn_2">Sewa</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_pricing_part">
                        <div class="pricing_tittle">
                            <h5>Kostum - Tari K-POP</h5>
                        </div>
                        <div class="pricing_content">
                            <h4><strong>Kostum Itzy(Dalla-dalla)</strong></h4>
                            <img src="img/itzy.png">
                            <br><br>
                            <a href="#" class="btn_2">Sewa</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_pricing_part">
                        <div class="pricing_tittle">
                            <h5>Kostum - Tari K-POP</h5>
                        </div>
                        <div class="pricing_content">
                            <h4><strong>Kostum 2Ne1(Crush)</strong></h4>
                            <img src="img/2ne1.jpeg">
                            <br><br>
                            <a href="#" class="btn_2">Sewa</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_pricing_part">
                        <div class="pricing_tittle">
                            <h5>Kostum - Tari K-POP</h5>
                        </div>
                        <div class="pricing_content">
                            <h4><strong>Kostum Blacpink(As If It Your Last)</strong></h4>
                            <img src="img/bp1.png">
                            <br><br>
                            <a href="#" class="btn_2">Sewa</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_pricing_part">
                        <div class="pricing_tittle">
                            <h5>Kostum - Tari K-POP</h5>
                        </div>
                        <div class="pricing_content">
                            <h4><strong>Kostum Blacpink(Boombayah)</strong></h4>
                            <img src="img/bp2.png">
                            <br><br>
                            <a href="#" class="btn_2">Sewa</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_pricing_part">
                        <div class="pricing_tittle">
                            <h5>Kostum - Tari K-POP</h5>
                        </div>
                        <div class="pricing_content">
                            <h4><strong>Kostum Blacpink(Dududu)</strong></h4>
                            <img src="img/bp3.png">
                            <br><br>
                            <a href="#" class="btn_2">Sewa</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_pricing_part">
                        <div class="pricing_tittle">
                            <h5>Kostum - Tari Modern</h5>
                        </div>
                        <div class="pricing_content">
                            <h4><strong>Kostum Yasmine</strong></h4>
                            <img src="img/ttt.jpeg">
                            <br><br>
                            <a href="#" class="btn_2">Sewa</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_pricing_part">
                        <div class="pricing_tittle">
                            <h5>Kostum - Tari Modern</h5>
                        </div>
                        <div class="pricing_content">
                            <h4><strong>Kostum Modern</strong></h4>
                            <img src="img/md1.png">
                            <br><br>
                            <a href="#" class="btn_2">Sewa</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_pricing_part">
                        <div class="pricing_tittle">
                            <h5>Kostum - Tari Modern</h5>
                        </div>
                        <div class="pricing_content">
                            <h4><strong>Kostum Yasmine</strong></h4>
                            <img src="img/md2.png">
                            <br><br>
                            <a href="#" class="btn_2">Sewa</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_pricing_part">
                        <div class="pricing_tittle">
                            <h5>Kostum - Tari Modern</h5>
                        </div>
                        <div class="pricing_content">
                            <h4><strong>Kostum Kids MD</strong></h4>
                            <img src="img/tari3.jpeg">
                            <br><br>
                            <a href="#" class="btn_2">Sewa</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_pricing_part">
                        <div class="pricing_tittle">
                            <h5>Kostum - Tari Modern</h5>
                        </div>
                        <div class="pricing_content">
                            <h4><strong>Kostum MD</strong></h4>
                            <img src="img/md3.jpeg">
                            <br><br>
                            <a href="#" class="btn_2">Sewa</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_pricing_part">
                        <div class="pricing_tittle">
                            <h5>Kostum - Tari Modern</h5>
                        </div>
                        <div class="pricing_content">
                            <h4><strong>Kostum Imlek China</strong></h4>
                            <img src="img/china.png">
                            <br><br>
                            <a href="#" class="btn_2">Sewa</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_pricing_part">
                        <div class="pricing_tittle">
                            <h5>Aksesoris - Tradisional</h5>
                        </div>
                        <div class="pricing_content">
                            <h4><strong>Mahkota</strong></h4>
                            <img src="img/aks1.jpeg">
                            <br><br>
                            <a href="#" class="btn_2">Sewa</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_pricing_part">
                        <div class="pricing_tittle">
                            <h5>Aksesoris - Tradisional</h5>
                        </div>
                        <div class="pricing_content">
                            <h4><strong>Mahkota</strong></h4>
                            <img src="img/aks2.jpeg">
                            <br><br>
                            <a href="#" class="btn_2">Sewa</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_pricing_part">
                        <div class="pricing_tittle">
                            <h5>Aksesoris - Tradisional</h5>
                        </div>
                        <div class="pricing_content">
                            <h4><strong>Mahkota</strong></h4>
                            <img src="img/aks3.jpeg">
                            <br><br>
                            <a href="#" class="btn_2">Sewa</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
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