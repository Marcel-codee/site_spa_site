<main>


<!-- sidebar mobile menu - start
================================================== -->
<div class="sidebar-menu-wrapper">
    <div class="sidebar_mobile_menu">
        <span class="close_btn"><i class="fal fa-times"></i></span>
        <div class="mobile_menu_list clearfix">
            <ul class="ul_li_block clearfix">
                <li class="<?php if($page=="home") echo "active";?>"><a href="<?= LINK ?>">Accueil</a></li>
            <li><a href="<?= LINK ?>about">About</a></li>
                <li class="dropdown">
                    <a href="#!" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                    <ul class="dropdown-menu">
                        <li class="<?php if($page=="service1") echo "active"; ?>"><a href="service_1.html">Service N°1</a></li>
						<li class="<?php if($page=="service2") echo "active"; ?>"><a href="service_2.html">Service N°2</a></li>
						<li class="<?php if($page=="service3") echo "active"; ?>"><a href="#">Service N°3</a></li>
						<!-- <li class="<?php if($page=="service_details") echo "active"; ?>"><a href="<?= LINK ?>service_details">Details services</a></li> -->
                    </ul>
                </li>
                <li class="<?php if($page=="contact") echo "active"; ?>"><a href="contact.html">Conatct</a></li>       
            </ul>
        </div>
    </div>

    <div class="cart_sidebar">
        <span class="close_btn"><i class="fal fa-times"></i></span>
        <div class="cart_items_list">
            <ul class="ul_li_block clearfix">
                <li>
                    <div class="cart_item clearfix">
                        <button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
                        <div class="item_image">
                            <img src="<?= LINK ?>assets/visitor/assets/images/recent_works/img_01.png" alt="image_not_found">
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">
                                Smaing Podcast Epis Ode 15 With Phile
                            </h3>
                            <span class="item_price">$30.00</span>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="cart_item clearfix">
                        <button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
                        <div class="item_image">
                            <img src="<?= LINK ?>assets/visitor/assets/images/recent_works/img_02.png" alt="image_not_found">
                        </div>
                        <div class="item_content">
                            <h3 class="item_title">
                                Smaing Podcast Epis Ode 15 With Phile
                            </h3>
                            <span class="item_price">$30.00</span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <ul class="total_price ul_li_block clearfix">
            <li><span>Total:</span> <small>$60.00</small></li>
            <li><span>Vat:</span> <small>$5.00</small></li>
            <li><span>SubtoTal</span> <small>$65.00</small></li>
        </ul>
        <ul class="btns_group ul_li clearfix">
            <li><a class="bg_default_orange" href="#!">View Cart</a></li>
            <li><a class="bg_default_yellow" href="#!">Checkout</a></li>
        </ul>
    </div>

    <div class="overlay"></div>
</div>
<!-- sidebar mobile menu - end
================================================== -->


<!-- slider_section - start
================================================== -->
<section class="slider_section home_three_slider clearfix">
    <div class="main_slider owl-carousel owl-theme clearfix">

        <div class="item" data-background="<?= LINK ?>assets/visitor/assets/images/slider/bg_01.jpg">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
                    <div class="col-lg-5 col-md-8 col-sm-12 col-xs-12 order-lg-last">
                        <div class="slider_image">
                            <img src="<?= LINK ?>assets/visitor/assets/images/slider/img_01.png" alt="image_not_found">
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12">
                        <div class="slider_content text-white">
                            <h4 class="small_title">Bienvenue chez MDIII corporate communication</h4>
                            <h3 class="item_title text-uppercase text-white mb-0">Impression riche</h3>
                            <p>
                                Votre partenaire numero 1 de l'impression de tout type et de la conception des solutions informatiques repondants à vos besoins.
                            </p>
                            <ul class="btns_group ul_li clearfix">
                                <li>
                                    <a class="custom_btn bg_default_orange" target="_blank" href="#">
                                        En savoir plus 
                                        <span><i class="fal fa-arrow-right"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="custom_btn bg_default_yellow" target="_blank" href="#">
                                        Nos services 
                                        <span><i class="fal fa-arrow-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="item" data-background="<?= LINK ?>assets/visitor/assets/images/slider/bg_01.jpg">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
                    <div class="col-lg-5 col-md-8 col-sm-12 col-xs-12 order-lg-last">
                        <div class="slider_image">
                            <img src="<?= LINK ?>assets/visitor/assets/images/slider/img_01.png" alt="image_not_found">
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12">
                        <div class="slider_content text-white">
                            <h4 class="small_title">Bienvenue chez MDIII corporate communication</h4>
                            <h3 class="item_title text-uppercase text-white mb-0">Impression riche</h3>
                            <p>
                                Votre partenaire numero 1 de l'impression de tout type et de la conception des solutions informatiques repondants à vos besoins.
                            </p>
                            <ul class="btns_group ul_li clearfix">
                                <li>
                                    <a class="custom_btn bg_default_orange" target="_blank" href="#">
                                        En savoir plus 
                                        <span><i class="fal fa-arrow-right"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="custom_btn bg_default_yellow" target="_blank" href="#">
                                        Nos services
                                        <span><i class="fal fa-arrow-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="item" data-background="<?= LINK ?>assets/visitor/assets/images/slider/bg_01.jpg">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
                    <div class="col-lg-5 col-md-8 col-sm-12 col-xs-12 order-lg-last">
                        <div class="slider_image">
                            <img src="<?= LINK ?>assets/visitor/assets/images/slider/img_01.png" alt="image_not_found">
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12">
                        <div class="slider_content text-white">
                            <h4 class="small_title">Bienvenue chez MDIII corporate communication</h4>
                            <h3 class="item_title text-uppercase text-white mb-0">Impression riche</h3>
                            <p>
                                Votre partenaire numero 1 de l'impression de tout type et de la conception des solutions informatiques repondants à vos besoins.
                            </p>
                            <ul class="btns_group ul_li clearfix">
                                <li>
                                    <a class="custom_btn bg_default_orange" target="_blank" href="#">
                                        En savoir plus  
                                        <span><i class="fal fa-arrow-right"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="custom_btn bg_default_yellow" target="_blank" href="#">
                                        Nos services 
                                        <span><i class="fal fa-arrow-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="item" data-background="<?= LINK ?>assets/visitor/assets/images/slider/bg_01.jpg">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
                    <div class="col-lg-5 col-md-8 col-sm-12 col-xs-12 order-lg-last">
                        <div class="slider_image">
                            <img src="<?= LINK ?>assets/visitor/assets/images/slider/img_01.png" alt="image_not_found">
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12">
                        <div class="slider_content text-white">
                            <h4 class="small_title">Bienvenue chez MDIII corporate communication</h4>
                            <h3 class="item_title text-uppercase text-white mb-0">Impression riche</h3>
                            <p>
                                Votre partenaire numero 1 de l'impression de tout type et de la conception des solutions informatiques repondants à vos besoins.
                            </p>
                            <ul class="btns_group ul_li clearfix">
                                <li>
                                    <a class="custom_btn bg_default_orange" target="_blank" href="#">
                                        En savoir plus
                                        <span><i class="fal fa-arrow-right"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="custom_btn bg_default_yellow" target="_blank" href="#">
                                        Nos services 
                                        <span><i class="fal fa-arrow-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- slider_section - end
================================================== -->


<!-- feature_section - start
================================================== -->
<section class="feature_section bg_gray clearfix">
    <div class="maxw_1780 container">
        <div class="row g-0 justify-content-lg-between">

            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 wow fadeInUp2" data-wow-delay=".1s">
                <div class="feature_listlayout_boxed2 deco_wrap">
                    <div class="item_icon">
                        <img src="<?= LINK ?>assets/visitor/assets/images/feature/icon_01.png" alt="image_not_found">
                    </div>
                    <div class="item_content">
                        <span class="item_type">Tout type d'impression</span>
                        <h3 class="item_title">Service d'impression</h3>
                        <p>
                            Imprimez vos idées avec nos équipements de dernière génération qui défient toute concurrence
                        </p>
                        <a class="text_btn" target="_blank" href="service_details.html">
                            <span>Lire la suite</span>
                            <i class="far fa-arrow-right"></i>
                        </a>
                    </div>

                    <div class="deco_image shape_1">
                        <img src="<?= LINK ?>assets/visitor/assets/images/feature/shape_01.png" alt="image_not_found">
                    </div>
                    <div class="deco_image shape_2">
                        <img src="<?= LINK ?>assets/visitor/assets/images/feature/shape_02.png" alt="image_not_found">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 wow fadeInUp2" data-wow-delay=".3s">
                <div class="feature_listlayout_boxed2 deco_wrap">
                    <div class="item_icon">
                        <img src="<?= LINK ?>assets/visitor/assets/images/feature/icon_02.png" alt="image_not_found">
                    </div>
                    <div class="item_content">
                        <span class="item_type">Tout type d'impression</span>
                        <h3 class="item_title">Design & Branding</h3>
                        <p>
                            Impressionnez le monde avec un design professionnel dans vos objectifs de communication
                        </p>
                        <a class="text_btn" target="_blank" href="service_details.html">
                            <span>Lire la suite</span>
                            <i class="far fa-arrow-right"></i>
                        </a>
                    </div>

                    <div class="deco_image shape_1">
                        <img src="<?= LINK ?>assets/visitor/assets/images/feature/shape_01.png" alt="image_not_found">
                    </div>
                    <div class="deco_image shape_2">
                        <img src="<?= LINK ?>assets/visitor/assets/images/feature/shape_02.png" alt="image_not_found">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 wow fadeInUp2" data-wow-delay=".5s">
                <div class="feature_listlayout_boxed2 deco_wrap">
                    <div class="item_icon">
                        <img src="<?= LINK ?>assets/visitor/assets/images/feature/icon_03.png" alt="image_not_found">
                    </div>
                    <div class="item_content">
                        <span class="item_type">Tout type d'impression</span>
                        <h3 class="item_title">Meilleur support en ligne</h3>
                        <p>
                            Le meilleur choix pour vos travaux numériques avec un support de pointe.
                        </p>
                        <a class="text_btn" target="_blank" href="service_details.html">
                            <span>Lire la suite</span>
                            <i class="far fa-arrow-right"></i>
                        </a>
                    </div>

                    <div class="deco_image shape_1">
                        <img src="<?= LINK ?>assets/visitor/assets/images/feature/shape_01.png" alt="image_not_found">
                    </div>
                    <div class="deco_image shape_2">
                        <img src="<?= LINK ?>assets/visitor/assets/images/feature/shape_02.png" alt="image_not_found">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- feature_section - end
================================================== -->


<!-- about_section - start
================================================== -->
<section class="about_section sec_ptb_130 clearfix">
    <div class="container">
        <div class="section_title text-center mb_80">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 wow fadeInUp2" data-wow-delay=".1s">
                    <h4 class="small_title">À propos de notre entreprise</h4>
                    <h2 class="big_title mb-0">
                    Imprimer les œuvres de vos rêves avec MDIII corporate communication
                    </h2>
                    <span class="biggest_title">À propos de nous</span>
                </div>
            </div>
        </div>

        <div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
            <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
                <div class="about_image_2 wow fadeInUp2" data-wow-delay=".2s">
                    <img src="<?= LINK ?>assets/visitor/assets/images/about/img_05.jpg" alt="icon_not_found">
                    <a class="play_btn popup_video bg_white" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
                        <i class="fas fa-play"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
                <div class="about_content">
                    <p class="border_left_orange mb-0 wow fadeInUp2" data-wow-delay=".2s">
                        Toutes les conditions renient sur-mesure pour vous satisfaire.
                    </p>

                    <div class="row justify-content-lg-between">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".3s">
                            <div class="feature_primary_2 clearfix">
                                <div class="item_icon bg_default_yellow">
                                    <i class="fal fa-print"></i>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">Imprimerie &amp; conception web/mobile</h3>
                                    <p>
                                        Profitez de notre arsenal de machines de dernière génération et notre équipe mixte sur-mesure pour vous satisfaire.
                                    </p>
                                    <a class="text_btn" target="_blank" href="#"><span>Lire la suite</span> <i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".4s">
                            <div class="feature_primary_2 clearfix">
                                <div class="item_icon bg_default_orange">
                                    <i class="fal fa-laptop-code"></i>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">Impression numérique</h3>
                                    <p>
                                        Imprimez chez nous toutes vos réalisations numériques
                                    </p>
                                    <a class="text_btn" target="_blank" href="#"><span>Lire la suite</span> <i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".5s">
                            <div class="feature_primary_2 clearfix">
                                <div class="item_icon bg_default_blue">
                                    <i class="fal fa-cube"></i>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">Impression 3D</h3>
                                    <p>
                                        Imprimez vos oeuvres d'art en 3 dimensions défiant toute concurrence.
                                    </p>
                                    <a class="text_btn" target="_blank" href="#"><span>Lire la suite</span> <i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".6s">
                            <div class="feature_primary_2 clearfix">
                                <div class="item_icon bg_default_pink">
                                    <i class="fal fa-cog"></i>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">Impression à rebours</h3>
                                    <p>
                                        Faites-vous plaisir avec cet autre type d'impression ainsi que tout autre type pour vos projets.
                                    </p>
                                    <a class="text_btn" target="_blank" href="#"><span>Lire la suite</span> <i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cricle_border">
        <img src="<?= LINK ?>assets/visitor/assets/images/about/circle_border.png" alt="icon_not_found">
    </div>
</section>
<!-- about_section - end
================================================== -->


<!-- service_section - start
================================================== -->
<section class="service_section sec_ptb_130 bg_gray clearfix">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
                <div class="section_title text-center mb_50 wow fadeInUp2" data-wow-delay=".1s">
                    <h4 class="small_title">Ce que nous offrons</h4>
                    <h2 class="big_title mb-0">
                        Nous fournissons beaucoup de services d’impression et de marque
                    </h2>
                    <span class="biggest_title">Services</span>
                </div>
            </div>
        </div>

        <div class="row mb_80 justify-content-lg-between justify-content-md-center justify-content-sm-center">
            <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".3s">
                <div class="service_card clearfix">
                    <a class="item_image" target="_blank" href="service_details.html">
                        <img src="<?= LINK ?>assets/visitor/assets/images/services/img_16.jpg" alt="image_not_found">
                    </a>
                    <div class="item_content">
                        <span class="item_type">Conception et impression</span>
                        <h3 class="item_title mb-0">Design et image de marque</h3>
                        <a class="icon_btn" target="_blank" href="#"><i class="fal fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".5s">
                <div class="service_card clearfix">
                    <a class="item_image" target="_blank" href="service_details.html">
                        <img src="<?= LINK ?>assets/visitor/assets/images/services/img_17.jpg" alt="image_not_found">
                    </a>
                    <div class="item_content">
                        <span class="item_type">Conception et impression</span>
                        <h3 class="item_title mb-0">Impression de logo</h3>
                        <a class="icon_btn" target="_blank" href="#"><i class="fal fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".7s">
                <div class="service_card clearfix">
                    <a class="item_image" target="_blank" href="service_details.html">
                        <img src="<?= LINK ?>assets/visitor/assets/images/services/img_18.jpg" alt="image_not_found">
                    </a>
                    <div class="item_content">
                        <span class="item_type">Conception et impression</span>
                        <h3 class="item_title mb-0">T - Impression des chemises</h3>
                        <a class="icon_btn" target="_blank" href="#"><i class="fal fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
<!-- service_section - end
================================================== -->


<!-- newsletter_section - start
================================================== -->
<section class="newsletter_section clearfix">
    <div class="container">

        <div class="newsletter_boxed bg_default_blue wow fadeInUp2 clearfix" data-wow-delay=".1s">
            <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
                <div class="col-lg-5 col-md-6 col-sm-8 col-xs-12 text-white">
                    <div class="section_title">
                        <h4 class="small_title">Newsletter S’abonner</h4>
                        <h2 class="big_title mb-0 text-white">
                            Rester informer sur nous.
                        </h2>
                        <span class="biggest_title">Newsletter</span>
                    </div>
                </div>

                <div class="col-lg-7 col-md-9 col-sm-10 col-xs-12">
                    <div class="newsletter_form">
                        <form action="#">
                            <div class="form_item mb-0">
                                <input type="email" name="email" placeholder="Enter Votre Email">
                                <button type="submit" class="icon_btn submit_btn"><i class="fal fa-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- newsletter_section - end
================================================== -->


<!-- portfolio_section - start
================================================== -->
<section class="portfolio_section sec_ptb_130 clearfix">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
                <div class="section_title text-center mb_50 wow fadeInUp2" data-wow-delay=".1s">
                    <h4 class="small_title">Nos travaux récents</h4>
                    <h2 class="big_title mb-0">
                        Voyons notre dernier projet qui a récemment été réalisé
                    </h2>
                    <span class="biggest_title">Travaux</span>
                </div>
            </div>
        </div>

        <div class="portfolio_carousel w_1545 owl-carousel owl-theme wow fadeInUp2" data-wow-delay=".3s">
            <div class="item">
                <div class="portfolio_fullimage">
                    <img src="<?= LINK ?>assets/visitor/assets/images/portfolio/carousel/img_01.jpg" alt="image_not_found">
                    <div class="title_wrap">
                        <h3 class="item_title mb-0">T - impression chemises</h3>
                        <a class="icon_btn" target="_blank" href="#"><i class="fal fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="portfolio_fullimage">
                    <img src="<?= LINK ?>assets/visitor/assets/images/portfolio/carousel/img_02.jpg" alt="image_not_found">
                    <div class="title_wrap">
                        <h3 class="item_title mb-0">T - impression chemises</h3>
                        <a class="icon_btn" target="_blank" href="#"><i class="fal fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="portfolio_fullimage">
                    <img src="<?= LINK ?>assets/visitor/assets/images/portfolio/carousel/img_03.jpg" alt="image_not_found">
                    <div class="title_wrap">
                        <h3 class="item_title mb-0">T - impression chemises</h3>
                        <a class="icon_btn" target="_blank" href="#"><i class="fal fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="portfolio_fullimage">
                    <img src="<?= LINK ?>assets/visitor/assets/images/portfolio/carousel/img_04.jpg" alt="image_not_found">
                    <div class="title_wrap">
                        <h3 class="item_title mb-0">T - impression chemises</h3>
                        <a class="icon_btn" target="_blank" href="#"><i class="fal fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="portfolio_fullimage">
                    <img src="<?= LINK ?>assets/visitor/assets/images/portfolio/carousel/img_01.jpg" alt="image_not_found">
                    <div class="title_wrap">
                        <h3 class="item_title mb-0">T - impression chemises</h3>
                        <a class="icon_btn" target="_blank" href="#"><i class="fal fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="portfolio_fullimage">
                    <img src="<?= LINK ?>assets/visitor/assets/images/portfolio/carousel/img_02.jpg" alt="image_not_found">
                    <div class="title_wrap">
                        <h3 class="item_title mb-0">T - impression chemises</h3>
                        <a class="icon_btn" target="_blank" href="#"><i class="fal fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="portfolio_fullimage">
                    <img src="<?= LINK ?>assets/visitor/assets/images/portfolio/carousel/img_03.jpg" alt="image_not_found">
                    <div class="title_wrap">
                        <h3 class="item_title mb-0">T - impression chemises</h3>
                        <a class="icon_btn" target="_blank" href="#"><i class="fal fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="portfolio_fullimage">
                    <img src="<?= LINK ?>assets/visitor/assets/images/portfolio/carousel/img_04.jpg" alt="image_not_found">
                    <div class="title_wrap">
                        <h3 class="item_title mb-0">T - impression chemises</h3>
                        <a class="icon_btn" target="_blank" href="#"><i class="fal fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- portfolio_section - end
================================================== -->


<!-- faq_section - start
================================================== -->
<section class="faq_section bg_default_blue clearfix">
    <div class="container-fluid p-0">
        <div class="row g-0 align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">

            <div class="col-lg-6 col-md-8 col-sm-9 col-xs-12">
                <div class="faq_image wow fadeIn" data-wow-delay=".1s">
                    <img src="<?= LINK ?>assets/visitor/assets/images/faqs/img_01.jpg" alt="image_not_found">
                </div>
            </div>

            <div class="col-lg-6 col-md-8 col-sm-9 col-xs-12">
                <div class="faq_content_wrap text-white">
                    <div class="section_title mb_50 wow fadeInUp2" data-wow-delay=".2s">
                        <h4 class="small_title">Faq</h4>
                        <h2 class="big_title text-white mb-0">
                            Foire aux questions
                        </h2>
                        <span class="biggest_title">Faq</span>
                    </div>

                    <div id="faq_accordion" class="faq_accordion wow fadeInUp2" data-wow-delay=".3s">
                        <div class="card">
                            <div class="card-header" id="heading_one">
                                <button data-bs-toggle="collapse" data-bs-target="#collapse_one" aria-expanded="true" aria-controls="collapse_one">
                                    Ce que nous faisons pour l'imprimerie
                                </button>
                            </div>

                            <div id="collapse_one" class="collapse show" aria-labelledby="heading_one" data-bs-parent="#faq_accordion">
                                <div class="card-body">
                                    <p class="mb-0">
                                        Nous concevons ou l'imprimons vos oeuvres numériques répondant à vos besoins 
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="heading_two">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapse_two" aria-expanded="false" aria-controls="collapse_two">
                                    Où sommes nous ?
                                </button>
                            </div>
                            <div id="collapse_two" class="collapse" aria-labelledby="heading_two" data-bs-parent="#faq_accordion">
                                <div class="card-body">
                                    <p class="mb-0">
                                        Retrouvez nous à KM36 à côté de la maison des jeunes
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- faq_section - end
================================================== -->


<!-- team_section - start
================================================== -->
<section class="team_section sec_ptb_130 clearfix">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                <div class="section_title text-center mb_30 wow fadeInUp2" data-wow-delay=".1s">
                    <h4 class="small_title">Rejoignez nos équipes</h4>
                    <h2 class="big_title mb-0">
                        Rencontrez notre membre exclusif de l’équipe
                    </h2>
                    <span class="biggest_title">Equipe</span>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".3s">
                <div class="team_grid">
                    <div class="item_image">
                        <img src="<?= LINK ?>assets/visitor/assets/images/team/img_01.jpg" alt="image_not_found">
                    </div>
                    <div class="item_content">
                        <h3 class="member_name">Mamoudou doukoure</h3>
                        <span class="member_title">PDG</span>
                        <ul class="square_social_links ul_li clearfix">
                            <li>
                                <a class="bg_default_lightblue" href="#!">
                                    <i class="fab fa-facebook-f"></i>
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a class="bg_default_orange" href="#!">
                                    <i class="fab fa-twitter"></i>
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a class="bg_default_yellow" href="#!">
                                    <i class="fab fa-youtube"></i>
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a class="bg_default_purple" href="#!">
                                    <i class="fab fa-linkedin"></i>
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".5s">
                <div class="team_grid">
                    <div class="item_image">
                        <img src="<?= LINK ?>assets/visitor/assets/images/team/img_02.jpg" alt="image_not_found">
                    </div>
                    <div class="item_content">
                        <h3 class="member_name">Kevin Emmani</h3>
                        <span class="member_title">DIRECTEUR</span>
                        <ul class="square_social_links ul_li clearfix">
                            <li>
                                <a class="bg_default_lightblue" href="#!">
                                    <i class="fab fa-facebook-f"></i>
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a class="bg_default_orange" href="#!">
                                    <i class="fab fa-twitter"></i>
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a class="bg_default_yellow" href="#!">
                                    <i class="fab fa-youtube"></i>
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a class="bg_default_purple" href="#!">
                                    <i class="fab fa-linkedin"></i>
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".7s">
                <div class="team_grid">
                    <div class="item_image">
                        <img src="<?= LINK ?>assets/visitor/assets/images/team/img_03.jpg" alt="image_not_found">
                    </div>
                    <div class="item_content">
                        <h3 class="member_name">Marcel bally kamano</h3>
                        <span class="member_title">RESPONSABLE DE L'IMPRIMERIE</span>
                        <ul class="square_social_links ul_li clearfix">
                            <li>
                                <a class="bg_default_lightblue" href="#!">
                                    <i class="fab fa-facebook-f"></i>
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a class="bg_default_orange" href="#!">
                                    <i class="fab fa-twitter"></i>
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a class="bg_default_yellow" href="#!">
                                    <i class="fab fa-youtube"></i>
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a class="bg_default_purple" href="#!">
                                    <i class="fab fa-linkedin"></i>
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".9s">
                <div class="team_grid">
                    <div class="item_image">
                        <img src="<?= LINK ?>assets/visitor/assets/images/team/img_04.jpg" alt="image_not_found">
                    </div>
                    <div class="item_content">
                        <h3 class="member_name">Ibrahim soumah</h3>
                        <span class="member_title">FORMATEUR INFORMATIQUE</span>
                        <ul class="square_social_links ul_li clearfix">
                            <li>
                                <a class="bg_default_lightblue" href="#!">
                                    <i class="fab fa-facebook-f"></i>
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a class="bg_default_orange" href="#!">
                                    <i class="fab fa-twitter"></i>
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a class="bg_default_yellow" href="#!">
                                    <i class="fab fa-youtube"></i>
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a class="bg_default_purple" href="#!">
                                    <i class="fab fa-linkedin"></i>
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
<!-- team_section - end
================================================== -->


<!-- funfact_section - start
================================================== -->
<section class="funfact_section sec_ptb_130 clearfix" data-background="<?= LINK ?>assets/visitor/assets/images/backgrounds/bg_01.jpg">
    <div class="container">
        <div class="funfact_wrap">

            <div class="funfact_item text-center wow fadeInUp2" data-wow-delay=".1s">
                <div class="content_wrap">
                    <div class="item_icon">
                        <span class="bg_default_orange">
                            <i class="fal fa-heart"></i>
                        </span>
                    </div>
                    <strong class="counte_text" data-from="0" data-to="356435">356435</strong>
                    <h3 class="item_title">Client aimant</h3>
                </div>
            </div>

            <div class="funfact_item text-center wow fadeInUp2" data-wow-delay=".3s">
                <div class="content_wrap">
                    <div class="item_icon">
                        <span class="bg_default_lightblue">
                            <i class="fal fa-trophy-alt"></i>
                        </span>
                    </div>
                    <strong class="counte_text" data-from="0" data-to="653142">653142</strong>
                    <h3 class="item_title">Palmarès</h3>
                </div>
            </div>

            <div class="funfact_item text-center wow fadeInUp2" data-wow-delay=".5s">
                <div class="content_wrap">
                    <div class="item_icon">
                        <span class="bg_default_yellow">
                            <i class="fal fa-truck"></i>
                        </span>
                    </div>
                    <strong class="counte_text" data-from="0" data-to="485620">485620</strong>
                    <h3 class="item_title">Transports</h3>
                </div>
            </div>

            <div class="funfact_item text-center wow fadeInUp2" data-wow-delay=".7s">
                <div class="content_wrap">
                    <div class="item_icon">
                        <span class="bg_default_purple">
                            <i class="fal fa-laptop-code"></i>
                        </span>
                    </div>
                    <strong class="counte_text" data-from="0" data-to="475868">475868</strong>
                    <h3 class="item_title">Ordinateur numérique</h3>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- funfact_section - end
================================================== -->


<!-- cta_section - start
================================================== -->
<section class="cta_section sec_ptb_130 deco_wrap clearfix" data-background="<?= LINK ?>assets/visitor/assets/images/backgrounds/bg_02.jpg">
    <div class="container">
        <div class="row align-items-center justify-content-lg-start">
            <div class="col-lg-6 col-md-7 col-sm-9 col-xs-12">
                <div class="cta_content ml__30 text-white">
                    <div class="section_title mb_30 wow fadeInUp2" data-wow-delay=".1s">
                        <h4 class="small_title">A besoin d'aide</h4>
                        <h2 class="big_title mb-0 text-white">
                            Toujours prêt à imprimer les œuvres de vos rêves
                        </h2>
                        <span class="biggest_title">Cite</Cite></span>
                    </div>
                    <p class="mb_30 border_left_yellow text-white wow fadeInUp2" data-wow-delay=".2s">
                        Tout pour vous pour créer la difference.
                    </p>
                    <a class="custom_btn bg_default_yellow wow fadeInUp2" data-wow-delay=".3s" target="_blank" href="#">
                        Rencontrez-nous
                        <span><i class="fal fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>
            
        </div>
    </div>

    <div class="overlay_blue"></div>

    <div class="deco_image hand_image wow fadeInRight" data-wow-delay=".1s">
        <img src="<?= LINK ?>assets/visitor/assets/images/cta/shape_02.png" alt="shape_not_found">
    </div>
</section>
<!-- cta_section - end
================================================== -->


<!-- testimonial_section - start
================================================== -->
<section class="testimonial_section bg_gray clearfix">
    <div class="container-fluid p-0">
        <div class="row g-0 align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">

            <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12 order-lg-last">
                <div class="testimonial_image wow fadeIn" data-wow-delay=".1s">
                    <img src="<?= LINK ?>assets/visitor/assets/images/testimonial/img_05.jpg" alt="image_not_found">
                </div>
            </div>

            <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
                <div class="testimonial_auto_wrap">
                    <div class="section_title mb_30 wow fadeInUp2" data-wow-delay=".2s">
                        <h4 class="small_title">Avis des clients</h4>
                        <h2 class="big_title mb-0">
                            Ce que nos clients disent sur nos oeuvres
                        </h2>
                        <span class="biggest_title">Dit</span>
                    </div>

                    <div class="testimonial_carousel column_1_carousel owl-carousel owl-theme wow fadeInUp2" data-wow-delay=".3s">
                        <div class="item">
                            <div class="testimonial_primary">
                                <div class="content_wrap">
                                    <p class="font_24">
                                        J'ai pris contact à la société MDIII corporate communication pour la réalisation de mon projet de communication par image, je fus complètement surpris par la qualité de la prestation.
                                        <strong>
                                            Impressionnez par la qualité du travail
                                        </strong>
                                    </p>
                                    <span class="quote_icon">
                                        <img src="<?= LINK ?>assets/visitor/assets/images/testimonial/quote_01.png" alt="icon_not_found">
                                    </span>
                                </div>
                                <div class="hero_info_wrap">
                                    <div class="hero_thumbnail">
                                        <img src="<?= LINK ?>assets/visitor/assets/images/testimonial/img_01.png" alt="icon_not_found">
                                    </div>
                                    <div class="hero_info">
                                        <h3 class="hero_name">Moussa Traoré</h3>
                                        <span class="hero_title">Web designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="testimonial_primary">
                                <div class="content_wrap">
                                    <p class="font_24">
                                        MDIII corporate communication mérite tout le respect dans ce qu'ils font.
                                        <strong>
                                            Respect et considération à MDIII corporate communication.
                                        </strong>
                                    </p>
                                    <span class="quote_icon">
                                        <img src="<?= LINK ?>assets/visitor/assets/images/testimonial/quote_01.png" alt="icon_not_found">
                                    </span>
                                </div>
                                <div class="hero_info_wrap">
                                    <div class="hero_thumbnail">
                                        <img src="<?= LINK ?>assets/visitor/assets/images/testimonial/img_02.png" alt="icon_not_found">
                                    </div>
                                    <div class="hero_info">
                                        <h3 class="hero_name">Binta Diallo</h3>
                                        <span class="hero_title">Developpeur</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- testimonial_section - end
================================================== -->





</main>
<!-- main body - end
		================================================== -->