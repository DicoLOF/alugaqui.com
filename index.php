<?php ?>
<!DOCTYPE html>
<html class="no-js" lang="pt-br">
    <!--<![endif]-->

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Site de Aluguel de Casas">       
        <meta name="author" content="Osvaldo Filho">
        <title>AluguaQui</title>

        <!-- Mobile Specific Meta ================================================== -->

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />

        <!-- CSS ================================================== -->
        <!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="plugins/themefisher-font/style.css">
        <!-- bootstrap.min css -->
        <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
        <!-- Animate.css -->
        <link rel="stylesheet" href="plugins/animate-css/animate.css">
        <!-- Magnific popup css -->
        <link rel="stylesheet" href="plugins/magnific-popup/dist/magnific-popup.css">
        <!-- Slick Carousel -->
        <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
        <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body id="home" data-spy="scroll" data-target=".navbar" data-offset="50">

        <!-- Fixed Navigation ==================================== -->
        <header id="navigation" class="navbar navigation">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->

                    <!-- logo -->
                    <a class="navbar-brand logo" href="">
                        <img src="images/logo.png" alt="Inicio" />
                    </a>
                    <!-- /logo -->
                </div>

                <!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="Navigation">
                    <ul id="nav" class="nav navbar-nav navigation-menu">
                        <li><a data-scroll href="#home">Home</a></li>
                        <li><a data-scroll href="#sobre">Sobre</a></li>
                        <li><a data-scroll href="#servicos">Serviços</a></li>
                        <li><a data-scroll href="#cursos">Cursos</a></li>
                        <li><a data-scroll href="#time">Time</a></li>
                        <li><a data-scroll href="#precos">Preços</a></li>
                        <!--<li><a data-scroll href="#blog">Blog</a></li>-->
                        <li><a data-scroll href="#contato">Contato</a></li>
                    </ul>
                </nav>
                <!-- /main nav -->

            </div>
        </header>        
        <!-- End Fixed Navigation ==================================== -->

        <!-- Start Preloader ==================================== -->
        <div class="preloader">
            <div class="sk-cube-grid">
                <div class="sk-cube sk-cube1"></div>
                <div class="sk-cube sk-cube2"></div>
                <div class="sk-cube sk-cube3"></div>
                <div class="sk-cube sk-cube4"></div>
                <div class="sk-cube sk-cube5"></div>
                <div class="sk-cube sk-cube6"></div>
                <div class="sk-cube sk-cube7"></div>
                <div class="sk-cube sk-cube8"></div>
                <div class="sk-cube sk-cube9"></div>
            </div>
        </div>
        <!-- End Preloader ==================================== -->

        <!-- Welcome Slider ==================================== -->
        <section class="hero-area overlay" style="background-image: url('images/banner/hero-area.jpg');">
            <!-- <video autoplay muted loop class="hero-video">
                    <source src="images/banner/hero-video.mp4" type="video/mp4">
            </video> -->
            <div class="block">
                <div class="video-button">
                    <a class="popup-video" href="https://www.youtube.com/watch?v=HftGveU-i30">
                        <i class="tf-ion-play"></i>
                    </a>
                </div>
                <h1>Entre a casa é sua!</h1>
                <p>Aqui você pode encontrar uma nova casa ou aluguar a sua bem rapidinho tudo isso na palma da sua mão!</p>
                <a data-scroll href="#servicos" class="btn btn-transparent">Conheça-nos</a>
            </div>
        </section>

        <!-- START SOBRE NÓS ==================================== -->
        <section class="bg-one about section">
            <div class="container">
                <div class="row">

                    <!-- section title -->
                    <div class="title text-center wow fadeIn" data-wow-duration="1500ms" >
                        <h2>Sobre <span class="color">Nós</span> </h2>
                        <div class="border"></div>
                    </div>
                    <!-- /section title -->

                    <!-- About item -->
                    <div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" >
                        <div class="block">							
                            <div class="icon-box">
                                <i class="tf-tools"></i>
                            </div>					
                            <!-- Express About Yourself -->
                            <div class="content text-center">
                                <h3 class="ddd">We're Creative</h3>								
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nihil, libero, perspiciatis eos provident laborum eum dignissimos</p>
                            </div>
                        </div>
                    </div> 
                    <!-- End About item -->

                    <!-- About item -->
                    <div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="250ms">
                        <div class="block">
                            <div class="icon-box">
                                <i class="tf-strategy"></i>
                            </div>
                            <!-- Express About Yourself -->
                            <div class="content text-center">
                                <h3>We're Professional</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nihil, libero, perspiciatis eos provident laborum eum dignissimos</p>
                            </div>
                        </div>
                    </div> 
                    <!-- End About item -->

                    <!-- About item -->					
                    <div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
                        <div class="block kill-margin-bottom">
                            <div class="icon-box">
                                <i class="tf-anchor2"></i>
                            </div>
                            <!-- Express About Yourself -->
                            <div class="content text-center">
                                <h3>We're Genius</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nihil, libero, perspiciatis eos provident laborum eum dignissimos</p>
                            </div>
                        </div>
                    </div> 
                    <!-- End About item -->

                </div> 		<!-- End row -->
            </div>   	<!-- End container -->
        </section>   <!-- End section -->

        <section class="section about-2 padding-0 bg-dark" id="sobre">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 padding-0 ">
                        <img class="img-responsive" src="images/about/about-business-man.jpg" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="content-block">
                            <h2>We’re A Digital Design Agency.</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam tempora itaque, autem dolores culpa cum mollitia voluptate nesciunt voluptatibus quasi.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis eveniet vel et mollitia nemo corporis sed ut, exercitationem incidunt, rerum nam doloremque quos ratione doloribus, officiis adipisci error quasi soluta?</p>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore, magnam.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="media">
                                        <div class="pull-left">
                                            <i class="tf-circle-compass"></i>	
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">SEO Optimized</h4>
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus consectetur dolores repellendus eos saepe</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="media">
                                        <div class="pull-left">
                                            <i class="tf-hotairballoon"></i>	
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Easy Customization</h4>
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus consectetur dolores repellendus </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Start Call To Action ==================================== -->
        <section class="call-to-action section-sm bg-1 overly">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Great Design & Incredible Features</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis tenetur odio impedit incidunt? <br> Omnis accusantium ea reiciendis, fugit commodi nostrum.</p>
                        <a href="#" class="btn btn-main">Start a project with us</a>
                    </div>
                </div> 		<!-- End row -->
            </div>   	<!-- End container -->
        </section>   <!-- End section -->

        <!-- START SERVICOS ==================================== -->
        <section id="servicos" class="bg-one section">
            <div class="container">
                <div class="row">

                    <!-- section title -->
                    <div class="title text-center wow fadeIn" data-wow-duration="500ms">
                        <h2>Nossos <span class="color">Serviços</span></h2>
                        <div class="border"></div>
                    </div>
                    <!-- /section title -->

                    <!-- Single Service Item -->
                    <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms">
                        <div class="service-block text-center">
                            <div class="service-icon text-center">
                                <i class="tf-globe"></i>
                            </div>
                            <h3>WordPress Theme</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
                        </div>
                    </article>
                    <!-- End Single Service Item -->

                    <!-- Single Service Item -->
                    <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
                        <div class="service-block text-center">
                            <div class="service-icon text-center">
                                <i class="tf-ion-laptop"></i>
                            </div>
                            <h3>Responsive Design</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
                        </div>
                    </article>
                    <!-- End Single Service Item -->

                    <!-- Single Service Item -->
                    <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
                        <div class="service-block text-center">
                            <div class="service-icon text-center">
                                <i class="tf-genius"></i>
                            </div>
                            <h3>Media &amp; Advertisement</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
                        </div>
                    </article>
                    <!-- End Single Service Item -->

                    <!-- Single Service Item -->
                    <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
                        <div class="service-block text-center">
                            <div class="service-icon text-center">
                                <i class="tf-dial"></i>
                            </div>
                            <h3>Graphic Design</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
                        </div>
                    </article>
                    <!-- End Single Service Item -->

                    <!-- Single Service Item -->
                    <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
                        <div class="service-block text-center">
                            <div class="service-icon text-center">
                                <i class="tf-target3"></i>
                            </div>
                            <h3>Apps Development</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
                        </div>
                    </article>
                    <!-- End Single Service Item -->

                    <!-- Single Service Item -->
                    <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
                        <div class="service-block text-center kill-margin-bottom">
                            <div class="service-icon text-center">
                                <i class="tf-lifesaver"></i>
                            </div>
                            <h3>Networking</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
                        </div>
                    </article>
                    <!-- End Single Service Item -->

                </div> 		<!-- End row -->
            </div>   	<!-- End container -->
        </section>   <!-- End section -->

        <!-- Start Team Skills =========================================== -->
        <section id="team-skills" class="parallax-section section section-bg overly">
            <div class="container">
                <div class="row" >
                    <!-- section title -->
                    <div class="col-md-12">
                        <div class="title text-center">
                            <h2>Our <span class="color">Skills</span></h2>
                            <div class="border"></div>
                        </div>
                    </div>
                    <!-- /section title -->
                </div>  
                <!-- End row -->
                <div class="row">
                    <div class="col-md-6">
                        <h2>We’ve skilled in wide range of web and <br>
                            Other digital market tools.</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis magni explicabo cum aperiam recusandae sunt accusamus totam. Quidem quos fugiat sapiente numquam accusamus quas hic, itaque in libero reiciendis tempora!</p>
                        <img class="img-responsive" src="images/about/company-growth.png" alt="">
                    </div>
                    <div class="col-md-6">
                        <ul class="skill-bar">
                            <li>
                                <p><span>01-</span> Business Development</p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                         aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <p><span>02-</span> Analysis</p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                         aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <p><span>03-</span> Design</p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                         aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <p><span>04-</span> IOS Development</p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                         aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <p><span>04-</span> Andriod Development</p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                         aria-valuemin="0" aria-valuemax="100" style="width:94%">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>   	<!-- End container -->
        </section>   <!-- End section -->

        <!-- START GALERIA DE CURSOS =========================================== -->
        <section class="portfolio section" id="cursos">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12">
                        <!-- section title -->
                        <div class="title text-center">
                            <h2>Galeria de <span class="color">Cursos</span></h2>
                            <div class="border"></div>
                        </div>
                        <!-- /section title -->
                    </div> <!-- /end col-lg-12 -->
                </div> <!-- end row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="courses-filter">
                            <button class="active" type="button" data-filter="all">Todos</button>
                            <button type="button" data-filter="photography">Concursos Publicos</button>
                            <button type="button" data-filter="design">Musica</button>
                            <button type="button" data-filter="development">Gastronomia</button>
                        </div>
                    </div>
                </div>
                <div class="row filtr-container">
                    <div class="col-lg-4 filtr-item" data-category="photography">
                        <div class="portfolio-block">
                            <img class="img-responsive" src="https://i.ibb.co/M1rKPkw/marinha-do-brasil.png" alt="">
                            <div class="caption">
                                <a href="site/marinha/" class="search-icon">
                                    <i class="tf-ion-android-search"></i>
                                </a>
                                <h4><a>Concurso da Marinha</a></h4>
                                <p>Aprenda tudo que ira cair no concurso da marinha!</p>
                            </div>
                        </div>
                    </div>
                    <div class="filtr-item col-md-4" data-category="design">
                        <div class="portfolio-block">
                            <img class="img-responsive" src="images/portfolio/portfolio-2.jpg" alt="">
                            <div class="caption">
                                <a class="search-icon image-popup" data-effect="mfp-with-zoom" href="site/marinha/" data-lightbox="image-1">
                                    <i class="tf-ion-android-search"></i>
                                </a>
                                <h4><a href="">Sound system</a></h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, nemo!</p>
                            </div>
                        </div>
                    </div>
                    <div class="filtr-item col-md-4" data-category="design, development">
                        <div class="portfolio-block">
                            <img class="img-responsive" src="images/portfolio/portfolio-3.jpg" alt="">
                            <div class="caption">
                                <a class="search-icon image-popup" data-effect="mfp-with-zoom" href="images/portfolio/portfolio-3.jpg"
                                   data-lightbox="image-1">
                                    <i class="tf-ion-android-search"></i>
                                </a>
                                <h4><a href="">Clock Product</a></h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, nemo!</p>
                            </div>
                        </div>
                    </div>
                    <div class="filtr-item col-md-4" data-category="photography, development">
                        <div class="portfolio-block">
                            <img class="img-responsive" src="images/portfolio/portfolio-4.jpg" alt="">
                            <div class="caption">
                                <a class="search-icon image-popup" data-effect="mfp-with-zoom" href="images/portfolio/portfolio-4.jpg"
                                   data-lightbox="image-1">
                                    <i class="tf-ion-android-search"></i>
                                </a>
                                <h4><a href="">Bottol Label</a></h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, nemo!</p>
                            </div>
                        </div>
                    </div>
                    <div class="filtr-item col-md-4" data-category="design">
                        <div class="portfolio-block">
                            <img class="img-responsive" src="images/portfolio/portfolio-5.jpg" alt="">
                            <div class="caption">
                                <a class="search-icon image-popup" data-effect="mfp-with-zoom" href="images/portfolio/portfolio-5.jpg"
                                   data-lightbox="image-1">
                                    <i class="tf-ion-android-search"></i>
                                </a>
                                <h4><a href="">Shopping Bag</a></h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, nemo!</p>
                            </div>
                        </div>
                    </div>
                    <div class="filtr-item col-md-4" data-category="photography">
                        <div class="portfolio-block">
                            <img class="img-responsive" src="images/portfolio/portfolio-6.jpg" alt="">
                            <div class="caption">
                                <a class="search-icon image-popup" data-effect="mfp-with-zoom" href="images/portfolio/portfolio-6.jpg"
                                   data-lightbox="image-1">
                                    <i class="tf-ion-android-search"></i>
                                </a>
                                <h4><a href="">Tag Design</a></h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, nemo!</p>
                            </div>
                        </div>
                    </div>
                    <div class="filtr-item col-md-4" data-category="design">
                        <div class="portfolio-block">
                            <img class="img-responsive" src="images/portfolio/portfolio-7.jpg" alt="">
                            <div class="caption">
                                <a class="search-icon image-popup" data-effect="mfp-with-zoom" href="images/portfolio/portfolio-7.jpg"
                                   data-lightbox="image-1">
                                    <i class="tf-ion-android-search"></i>
                                </a>
                                <h4><a href="">Business Card</a></h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, nemo!</p>
                            </div>
                        </div>
                    </div>
                    <div class="filtr-item col-md-4" data-category="design">
                        <div class="portfolio-block">
                            <img class="img-responsive" src="images/portfolio/portfolio-8.jpg" alt="">
                            <div class="caption">
                                <a class="search-icon image-popup" data-effect="mfp-with-zoom" href="images/portfolio/portfolio-8.jpg"
                                   data-lightbox="image-1">
                                    <i class="tf-ion-android-search"></i>
                                </a>
                                <h4><a href="">Stationary Design</a></h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, nemo!</p>
                            </div>
                        </div>
                    </div>
                    <div class="filtr-item col-md-4" data-category="photography, development">
                        <div class="portfolio-block">
                            <img class="img-responsive" src="images/portfolio/portfolio-1.jpg" alt="">
                            <div class="caption">
                                <a class="search-icon image-popup" data-effect="mfp-with-zoom" href="images/portfolio/portfolio-1.jpg"
                                   data-lightbox="image-1">
                                    <i class="tf-ion-android-search"></i>
                                </a>
                                <h4><a href="">Tag Design</a></h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, nemo!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section> <!-- End section -->

        <!-- Start Counter Section ==================================== -->
        <section id="counter" class="parallax-section bg-1 section overly">
            <div class="container">
                <div class="row">

                    <!-- first count item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms">
                        <div class="counters-item">
                            <i class="tf-ion-android-happy"></i>
                            <span data-speed="3000" data-to="320">320</span>
                            <h3>Happy Clients</h3>
                        </div>
                    </div>
                    <!-- end first count item -->

                    <!-- second count item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
                        <div class="counters-item">
                            <i class="tf-ion-archive"></i>
                            <span data-speed="3000" data-to="565">565</span>
                            <h3>Projects completed</h3>
                        </div>
                    </div>
                    <!-- end second count item -->

                    <!-- third count item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
                        <div class="counters-item">
                            <i class="tf-ion-thumbsup"></i>
                            <span data-speed="3000" data-to="95">95</span>
                            <h3>Positive feedback</h3>

                        </div>
                    </div>
                    <!-- end third count item -->

                    <!-- fourth count item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
                        <div class="counters-item kill-margin-bottom">
                            <i class="tf-ion-coffee"></i>
                            <span data-speed="3000" data-to="2500">2500</span>
                            <h3>Cups of Coffee</h3>
                        </div>
                    </div>
                    <!-- end fourth count item -->

                </div> 		<!-- end row -->
            </div>   	<!-- end container -->
        </section>   <!-- end section -->

        <!-- START NOSSO TIME =========================================== -->
        <section id="time" class="section">
            <div class="container text-center">
                <!-- section title -->
                <div class="title wow fadeInUp">
                    <h2>Nosso <span class="color">Time</span></h2>
                    <div class="border"></div>
                </div>
                <!-- /section title -->         
                <!-- team member -->
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInDown"></div>
                <!-- end team member -->
                <!-- team member -->
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInDown">
                    <div class="team-member">
                        <div class="member-photo">
                            <!-- member photo -->
                            <img class="img-responsive" src="images/team/dico.jpg" alt="Meghna">
                            <!-- /member photo -->

                            <!-- member social profile -->
                            <div class="mask">
                                <ul class="list-inline">
                                    <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-linkedin"></i></a></li>                                        
                                </ul>
                            </div>
                            <!-- /member social profile -->
                        </div>

                        <!-- member name & designation -->
                        <div class="member-meta">
                            <h4>Osvaldo Filho</h4>
                            <span>Desenvolvedor</span>
                            <p>O único lugar onde o sucesso vem antes do trabalho é no dicionário.(Einstein)</p>
                        </div>
                        <!-- /member name & designation -->
                        <!-- /about member -->

                    </div>
                </div>
                <!-- end team member -->

                <!-- team member -->
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInDown">
                    <div class="team-member">
                        <div class="member-photo">
                            <!-- member photo -->
                            <img class="img-responsive" src="images/team/chiquinho.png" alt="Meghna">
                            <!-- /member photo -->

                            <!-- member social profile -->
                            <div class="mask">
                                <ul class="list-inline">
                                    <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-linkedin"></i></a></li>                                   
                                </ul>
                            </div>
                            <!-- /member social profile -->
                        </div>

                        <!-- member name & designation -->
                        <div class="member-meta">
                            <h4>Francisco </h4>
                            <span>Marketing Digital</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
                        </div>
                        <!-- /member name & designation -->
                        <!-- /about member -->
                    </div>  	<!-- End row -->
                </div>

                <!-- end team member -->              
            </div>   	<!-- End container -->
        </section>   <!-- End section -->

        <!-- START PREÇOS DE ALGUNS CURSOS =========================================== -->
        <section id="precos" class="pricing section">
            <div class="container">
                <div class="row">

                    <!-- section title -->
                    <div class="title text-center wow fadeInDown" data-wow-duration="500ms">
                        <h2>Algumas<span class="color"> Casas</span></h2>
                        <div class="border"></div>
                    </div>
                    <!-- /section title -->

                    <!-- single pricing table -->
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="200ms">
                        <div class="price-item">

                            <!-- plan name & value -->
                            <div class="price-title">
                                <h4>Casa com 3 quartos</h4>
                                <p><strong class="value">R$150,00</strong>/ mês</p>
                            </div>
                            <!-- /plan name & value -->

                            <!-- plan description -->
                            <ul>
                                <li>lavanderia</li>
                                <li>sala</li>
                                <li>banheiro</li>
                                <li>suite com closet</li>
                                <li>cosinha grande</li>         
                                <li>garagem</li>                                 
                            </ul>
                            <!-- /plan description -->

                            <!-- signup button -->
                            <a class="btn btn-transparent" href="#">Quero Ver</a>
                            <!-- /signup button -->
                        </div>
                    </div>
                    <!-- end single pricing table -->

                    <!-- single pricing table -->
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
                        <div class="price-item">

                            <!-- plan name & value -->
                            <div class="price-title">
                                <h3>Silver</h3>
                                <p><strong class="value">$149</strong/>/ month</p>
                            </div>
                            <!-- /plan name & value -->

                            <!-- plan description -->
                            <ul>
                                <li>1GB Disk Space</li>
                                <li>10 Email Account</li>
                                <li>Script Installer</li>
                                <li>1 GB Storage</li>
                                <li>10 GB Bandwidth</li>
                                <li>24/7 Tech Support</li>
                            </ul>
                            <!-- /plan description -->

                            <!-- signup button -->
                            <a class="btn btn-transparent" href="#">Signup</a>
                            <!-- /signup button -->

                        </div>
                    </div>
                    <!-- end single pricing table -->

                    <!-- single pricing table -->
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
                        <div class="price-item">

                            <!-- plan name & value -->
                            <div class="price-title">
                                <h3>Gold</h3>
                                <p><strong class="value">$199</strong/>/ month</p>
                            </div>
                            <!-- /plan name & value -->

                            <!-- plan description -->
                            <ul>
                                <li>1GB Disk Space</li>
                                <li>10 Email Account</li>
                                <li>Script Installer</li>
                                <li>1 GB Storage</li>
                                <li>10 GB Bandwidth</li>
                                <li>24/7 Tech Support</li>
                            </ul>
                            <!-- /plan description -->

                            <!-- signup button -->
                            <a class="btn btn-transparent" href="#">Signup</a>
                            <!-- /signup button -->

                        </div>
                    </div>
                    <!-- end single pricing table -->

                    <!-- single pricing table -->
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="750ms">
                        <div class="price-item">

                            <!-- plan name & value -->
                            <div class="price-title">
                                <h3>Platinum</h3>
                                <p><strong class="value">$299</strong/>/ month</p>
                            </div>
                            <!-- /plan name & value -->

                            <!-- plan description -->
                            <ul>
                                <li>1GB Disk Space</li>
                                <li>10 Email Account</li>
                                <li>Script Installer</li>
                                <li>1 GB Storage</li>
                                <li>10 GB Bandwidth</li>
                                <li>24/7 Tech Support</li>
                            </ul>
                            <!-- /plan description -->

                            <!-- signup button -->
                            <a class="btn btn-transparent" href="#">Signup</a>
                            <!-- /signup button -->

                        </div>
                    </div>
                    <!-- end single pricing table -->
                </div>       <!-- End row -->
            </div>   	<!-- End container -->
        </section>   <!-- End section -->

        <!-- Start Testimonial =========================================== -->
        <section id="testimonial" class="testimonial overly section bg-2">
            <div class="container">
                <div class="row">				
                    <div class="col-lg-12">
                        <!-- testimonial wrapper -->
                        <div id="testimonials" class="wow fadeInUp" data-wow-duration="500ms" data-wow-delay="100ms">

                            <!-- testimonial single -->
                            <div class="item text-center">

                                <!-- client photo -->
                                <div class="client-thumb">
                                    <img src="images/team/client-1.jpg" class="img-responsive" alt="Meghna">
                                </div>
                                <!-- /client photo -->

                                <!-- client info -->
                                <div class="client-info">
                                    <div class="client-meta">
                                        <h3>Jonathon Andrew</h3>
                                        <span>Dec 26, 2018</span>
                                    </div>
                                    <div class="client-comment">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium minima ex, quia error, deserunt voluptatibus repellendus? Incidunt eligendi aliquam repellat molestias, vel sed optio rem odit quis ratione non consequuntur!</p>
                                    </div>
                                </div>
                                <!-- /client info -->
                            </div>
                            <!-- /testimonial single -->

                            <!-- testimonial single -->
                            <div class="item text-center">

                                <!-- client photo -->
                                <div class="client-thumb">
                                    <img src="images/team/client-2.jpg" class="img-responsive" alt="Meghna">
                                </div>
                                <!-- /client photo -->

                                <!-- client info -->
                                <div class="client-info">
                                    <div class="client-meta">
                                        <h3>Jonathon Andrew</h3>
                                        <span>Dec 26, 2018</span>
                                    </div>
                                    <div class="client-comment">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel reiciendis qui in laborum obcaecati expedita blanditiis animi placeat, nemo exercitationem porro. Consequuntur qui commodi minima molestiae, dolores reprehenderit nemo inventore.</p>
                                    </div>
                                </div>
                                <!-- /client info -->
                            </div>
                            <!-- /testimonial single -->

                            <!-- testimonial single -->
                            <div class="item text-center">

                                <!-- client photo -->
                                <div class="client-thumb">
                                    <img src="images/team/client-1.jpg" class="img-responsive" alt="Meghna">
                                </div>
                                <!-- /client photo -->

                                <!-- client info -->
                                <div class="client-info">
                                    <div class="client-meta">
                                        <h3>Jonathon Andrew</h3>
                                        <span>Dec 26, 2018</span>
                                    </div>
                                    <div class="client-comment">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia dolorem non delectus neque, voluptatem accusamus atque expedita doloribus minima iusto nemo, numquam eos quia maiores harum! Quaerat illum beatae necessitatibus!</p>
                                    </div>
                                </div>
                                <!-- /client info -->
                            </div>
                            <!-- /testimonial single -->

                        </div>		<!-- end testimonial wrapper -->
                    </div> 		<!-- end col lg 12 -->
                </div>	    <!-- End row -->
            </div>       <!-- End container -->
        </section>    <!-- End Section -->

        <!-- Start Blog Section =========================================== -->
        <section id="blog" class="section">
            <div class="container">
                <div class="row">
                    <!-- section title -->
                    <div class="title text-center wow fadeInDown">
                        <h2> Latest <span class="color">Posts</span></h2>
                        <div class="border"></div>
                    </div>
                    <!-- /section title -->
                    <div class="clearfix">
                        <!-- single blog post -->
                        <article class="col-md-4 col-sm-6 col-xs-12 clearfix wow fadeInUp" data-wow-duration="500ms">
                            <div class="post-block">
                                <div class="media-wrapper">
                                    <img src="images/blog/blog-post-1.jpg" alt="amazing caves coverimage" class="img-responsive">
                                </div>
                                <div class="content">
                                    <h3><a href="">Simple Image Post</a></h3>
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
                                    <a class="btn btn-transparent" href="blog-single.html">Read more</a>
                                </div>
                            </div>						
                        </article>
                        <!-- /single blog post -->

                        <!-- single blog post -->
                        <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
                            <div class="post-block">
                                <div id="gallery-post" class="media-wrapper">
                                    <div class="item">
                                        <img src="images/blog/blog-post-1.jpg" alt="blog post" class="img-responsive">
                                    </div>
                                    <div class="item">
                                        <img src="images/blog/blog-post-3.jpg" alt="blog post" class="img-responsive">
                                    </div>
                                    <div class="item">
                                        <img src="images/blog/blog-post-2.jpg" alt="blog post | Meghna" class="img-responsive">
                                    </div>
                                </div>

                                <div class="content">
                                    <h3><a href="">Simple Slider Post</a></h3>
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
                                    <a class="btn btn-transparent" href="blog-single.html">Read more</a>
                                </div>
                            </div>						
                        </article>
                        <!-- end single blog post -->

                        <!-- single blog post -->
                        <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
                            <div class="post-block">
                                <div class="media-wrapper">
                                    <img src="images/blog/blog-post-6.jpg" alt="amazing caves coverimage" class="img-responsive">
                                </div>

                                <div class="content">
                                    <h3><a href="">Simple Image Post</a></h3>
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
                                    <a class="btn btn-transparent" href="blog-single.html">Read more</a>
                                </div>
                            </div>						
                        </article>
                        <!-- end single blog post -->
                    </div>
                    <div class="all-post text-center">
                        <a class="btn btn-main" href="site/marinha">View All Post</a>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section> <!-- end section -->

        <!-- START CONTATO =========================================== -->		
        <section id="contato" class="contact-us section-bg">
            <div class="container">
                <div class="row">

                    <!-- section title -->
                    <div class="title text-center wow fadeIn" data-wow-duration="500ms">
                        <h2>Entrar Em <span class="color">Contato</span></h2>
                        <div class="border"></div>
                    </div>
                    <!-- /section title -->

                    <!-- Contact Details -->
                    <div class="contact-info col-md-6 wow fadeInUp" data-wow-duration="500ms">
                        <h3>Contact Details</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, vero, provident, eum eligendi blanditiis ex explicabo vitae nostrum facilis asperiores dolorem illo officiis ratione vel fugiat dicta laboriosam labore adipisci.</p>
                        <div class="contact-details">
                            <div class="con-info clearfix">
                                <i class="tf-map-pin"></i>
                                <span>Khaja Road, Bayzid, Chittagong, Bangladesh</span>
                            </div>

                            <div class="con-info clearfix">
                                <i class="tf-ion-ios-telephone-outline"></i>
                                <span>Phone: +880-31-000-000</span>
                            </div>

                            <div class="con-info clearfix">
                                <i class="tf-ion-iphone"></i>
                                <span>Fax: +880-31-000-000</span>
                            </div>

                            <div class="con-info clearfix">
                                <i class="tf-ion-ios-email-outline"></i>
                                <span>Email: hello@meghna.com</span>
                            </div>
                        </div>
                    </div>
                    <!-- / End Contact Details -->

                    <!-- CONTATO FORM -->
                    <div class="contact-form col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <form id="contact-form" method="post" action="sendmail.php" role="form">

                            <div class="form-group">
                                <input type="text" placeholder="Nome" class="form-control" name="name" id="name">
                            </div>

                            <div class="form-group">
                                <input type="email" placeholder="Email" class="form-control" name="email" id="email">
                            </div>

                            <div class="form-group">
                                <input type="text" placeholder="Asunto" class="form-control" name="subject" id="subject">
                            </div>

                            <div class="form-group">
                                <textarea rows="6" placeholder="Mensagem" class="form-control" name="message" id="message"></textarea>	
                            </div>

                            <div id="mail-success" class="success">
                                Thank you. The Mailman is on His Way :)
                            </div>

                            <div id="mail-fail" class="error">
                                Sorry, don't know what happened. Try later :(
                            </div>

                            <div id="cf-submit">
                                <input type="submit" id="contact-submit" class="btn btn-transparent" value="Encaminhar">
                            </div>						

                        </form>
                    </div>
                    <!-- ./End Contact Form -->

                </div> <!-- end row -->
            </div> <!-- end container -->

            <!-- Google Map -->
            <div class="google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d12107.777855723933!2d-52.11904916970955!3d-21.774761844749438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1588439051210!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>             
            </div>	
            <!-- /Google Map -->

        </section> <!-- end section -->
        <!-- END CONTATO ========================================== -->

        <footer id="footer" class="bg-one">
            <div class="container">
                <div class="row wow fadeInUp" data-wow-duration="500ms">
                    <div class="col-lg-12">

                        <!-- Footer Social Links -->
                        <div class="social-icon">
                            <ul class="list-inline">
                                <li><a href="https://facebook.com/themefisher"><i class="tf-ion-social-facebook"></i></a></li>
                                <li><a href="https://twitter.com/themefisher"><i class="tf-ion-social-twitter"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCx9qVW8VF0LmTi4OF2F8YdA"><i class="tf-ion-social-youtube"></i></a></li>
                                <li><a href="https://dribbble.com/themefisher"><i class="tf-ion-social-dribbble-outline"></i></a></li>
                                <li><a href="https://pinterest.com/themefisher"><i class="tf-ion-social-pinterest-outline"></i></a></li>
                            </ul>
                        </div>
                        <!--/. End Footer Social Links -->

                        <!-- copyright -->
                        <div class="copyright text-center">                         
                            <a class="logo" href="#">
                                <img src="images/logo.png" alt="Inicio" />
                            </a>                        
                            <br />
                            <p>Design And Developed by <a href="http://www.themefisher.com">ofmarketing.com.br</a>. Copyright
                                &copy; <script>
                                    document.write(new Date().getFullYear())
                                </script>. All Rights Reserved.</p>
                        </div>
                        <!-- /copyright -->

                    </div> <!-- end col lg 12 -->
                </div> <!-- end row -->
            </div> <!-- end container -->
        </footer> <!-- end footer -->

        <!-- Essential Scripts =====================================-->

        <!-- Main jQuery -->
        <script type="text/javascript" src="plugins/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap 3.1 -->
        <script type="text/javascript" src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Slick Carousel -->
        <script type="text/javascript" src="plugins/slick-carousel/slick/slick.min.js"></script>
        <!-- Portfolio Filtering -->
        <script type="text/javascript" src="plugins/filterzr/jquery.filterizr.min.js"></script>
        <!-- Smooth Scroll -->
        <script type="text/javascript" src="plugins/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
        <!-- Magnific popup -->
        <script type="text/javascript" src="plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
        <!-- Google Map API -->
        <script type="text/javascript"  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
        <!-- Sticky Nav -->
        <script type="text/javascript" src="plugins/Sticky/jquery.sticky.js"></script>
        <!-- Number Counter Script -->
        <script type="text/javascript" src="plugins/count-to/jquery.countTo.js"></script>
        <!-- wow.min Script -->
        <script type="text/javascript" src="plugins/wow/dist/wow.min.js"></script>
        <!-- Custom js -->
        <script type="text/javascript" src="js/script.js"></script>

    </body>
</html>