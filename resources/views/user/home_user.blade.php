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

    <link rel="stylesheet" href="../style.css">
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
                                
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle"  id="navbarDropdownpro"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{Session::get('nama_user')}}
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownpro">
                                        <a class="dropdown-item" href="portfolio.html"><center>Data Sewa</center></a>
                                        <a class="dropdown-item" href="/logoutUser"><center>Logout<center></a>
                                    </div>
                                </li>

                               <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Blog
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="blog.html"> blog</a>
                                        <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{Session::get('nama_user')}}
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                        <a class="dropdown-item" href="elements.html">Elements</a>
                                    </div>
                                </li>
                                
                            </ul>
                            <ul>
                                <li>
                                    <a class="nav-link" >{{Session::get('nama_user')}}</a>
                                </li>
                            </ul>
                            <ul>
                                <li class="nav-link">
                                <a href="/logoutUser" class="genric-btn info-border circle">Logout</a>
                                
                                </li>
                            </ul>-->
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
    <section class="pricing_part section_padding">
        <div class="container">    
            
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_pricing_part">
                        <div class="pricing_tittle">
                            <h5>Kostum - Tradisional</h5>
                        </div>
                        <div class="pricing_content">
                            <img src="../img/gallery/tari1.jpeg" style="position: relative;" height="200">
                            <h4><strong>Kostum Jaipong</strong></h4>
                            <p>Ket : Ada 4 baju lengkap beserta aksesoris nya</p>
                            <p>Harga Sewa : 100.000</p>
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
                        <img src="../img/22.jpeg" style="position: relative;" height="200">
                            <h4><strong>Kostum Jaipong</strong></h4>
                            <p>Ket : Ada 5 baju lengkap beserta aksesoris nya</p>
                            <p>Harga Sewa : 150.000</p>
                            <br><br>
                            <a href="{{ url('user/form_sewa') }}" class="btn_2">Sewa</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_pricing_part">
                        <div class="pricing_tittle">
                            <h5>Kostum - Tari Tradisional</h5>
                        </div>
                        <div class="pricing_content">
                        <img src="../img/intro_video_bg.jpeg" style="position: relative;" height="200">
                            <h4><strong>Kostum</strong></h4>
                            <p>Ket : Ada 5 baju lengkap beserta aksesoris nya</p>
                            <p>Harga Sewa : 150.000</p>
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
                        <img src="../img/bp.jpeg" style="position: relative;" height="200">
                            <h4><strong>Kostum Blackpink(Kill This Love)</strong></h4>
                            <p>Ket : Ada 4 item terdiri dari baju Jennie, Lisa, Rose, dan Jisoo</p>
                            <p>Harga Sewa : 200.000</p>
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
                        <img src="../img/solo.png" style="position: relative;" height="200">
                            <h4><strong>Kostum Jennie(Solo)</strong></h4>
                            <p>Ket : Ada 5 item terdiri dari baju Jennie dan 4 Back dancer</p>
                            <p>Harga Sewa : 250.000</p>
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
                        <img src="../img/bp4.png" style="position: relative;" height="200">
                            <h4><strong>Kostum Blackpink(Dududu ver2)</strong></h4>
                            <p>Ket : Ada 4 item terdiri dari baju Jennie, Lisa, Rose, dan Jisoo</p>
                            <p>Harga Sewa : 200.000</p>
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
                        <img src="../img/4minute.png" style="position: relative;" height="200">
                            <h4><strong>Kostum 4Minute(Hate)</strong></h4>
                            <p>Ket : Ada 4 item terdiri dari baju 4 member nya dan aksesoris nya</p>
                            <p>Harga Sewa : 200.000</p>
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
                        <img src="../img/itzy.png" style="position: relative;" height="200">
                            <h4><strong>Kostum Itzy(Dalla-dalla)</strong></h4>
                            <p>Ket : Ada 5 item terdiri dari baju 5 member nya</p>
                            <p>Harga Sewa : 250.000</p>
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
                        <img src="../img/2ne1.jpeg" style="position: relative;" height="200">
                            <h4><strong>Kostum 2Ne1(Crush)</strong></h4>
                            <p>Ket : Ada 4 item terdiri dari baju per member nya</p>
                            <p>Harga Sewa : 200.000</p>
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
                        <img src="../img/bp1.png" style="position: relative;" height="200">
                            <h4><strong>Kostum Blacpink(As If It Your Last)</strong></h4>
                            <p>Ket : Ada 4 item terdiri dari baju Jennie, Lisa, Rose, dan Jisoo</p>
                            <p>Harga Sewa : 200.000</p>
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
                        <img src="../img/bp2.png" style="position: relative;" height="200">
                            <h4><strong>Kostum Blacpink(Boombayah)</strong></h4>
                            <p>Ket : Ada 4 item terdiri dari baju Jennie, Lisa, Rose, dan Jisoo</p>
                            <p>Harga Sewa : 200.000</p>
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
                        <img src="../img/bp3.png" style="position: relative;" height="200">
                            <h4><strong>Kostum Blacpink(Dududu)</strong></h4>
                            <p>Ket : Ada 4 item terdiri dari baju Jennie, Lisa, Rose, dan Jisoo</p>
                            <p>Harga Sewa : 200.000</p>
                            <br><br>
                            <a href="#" class="btn_2">Sewa</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_pricing_part">
                        <div class="pricing_tittle">
                        </div>
                            <h5>Kostum - Tari Modern</h5>
                        
                        <div class="pricing_content">
                        <img src="../img/ttt.jpeg" style="position: relative;" height="200">
                            <h4><strong>Kostum Yasmine</strong></h4>
                            <p>Ket : Ada 10 item terdiri lengkap dengan alsesoris nya</p>
                            <p>Harga Sewa : 550.000</p>
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
                        <img src="../img/md1.png" style="position: relative;" height="200">
                            <h4><strong>Kostum Modern</strong></h4>
                            <p>Ket : Ada 3 item baju lengkap dengan aksesoris nya</p>
                            <p>Harga Sewa : 150.000</p>
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
                        <div class="pricing_image">
                        <img src="../img/md2.png">
                        </div>
                            <h4><strong>Kostum Modern Topeng</strong></h4>
                            <p>Ket : Ada 4 item lengkap dengan aksesoris nya termasuk topeng</p>
                            <p>Harga Sewa : 300.000</p>
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
                        <div class="pricing_image">
                        <img src="../img/tari3.jpeg">
                        </div>    
                        <h4><strong>Kostum Kids MD</strong></h4>
                        <p>Ket : Ada 3 item termasuk aksesorisnya</p>
                            <p>Harga Sewa : 200.000</p>
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
                        <div class="pricing_image">
                        <img src="../img/md3.jpeg">
                        </div>
                            <h4><strong>Kostum MD</strong></h4>
                            
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
                        <div class="pricing_image">
                        <img src="../img/china.png">
                        </div>
                            <h4><strong>Kostum Imlek China</strong></h4>
                            
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
                        <div class="pricing_image">
                        <img src="../img/aks1.jpeg">
                        </div>
                            <h4><strong>Mahkota</strong></h4>
                            
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
                        <div class="pricing_image">
                        <img src="../img/aks2.jpeg">
                        </div>
                            <h4><strong>Mahkota</strong></h4>
                            
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
                        <div class="pricing_image">
                        <img src="../img/aks3.jpeg">
                        </div>
                            <h4><strong>Mahkota</strong></h4>
                            
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