<main>


			<!-- sidebar mobile menu - start
			================================================== -->
			<div class="sidebar-menu-wrapper">
				<div class="sidebar_mobile_menu">

					<span class="close_btn"><i class="fal fa-times"></i></span>

					<div class="mobile_menu_list clearfix">
						<ul class="ul_li_block clearfix">
						<li class="<?php if($page=="home") echo "active";?>"><a href="<?= LINK ?>">Accueil</a></li>
							<li class="<?php if($page=="about") echo "active"; ?>"><a href="<?= LINK ?>about">A propos</a></li>
							<li class="dropdown">
                    <a href="#!" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                    <ul class="dropdown-menu">
                        <li class="<?php if($page=="service1") echo "active"; ?>"><a href="service_1.html">Service N°1</a></li>
						<li class="<?php if($page=="service2") echo "active"; ?>"><a href="service_2.html">Service N°2</a></li>
						<li class="<?php if($page=="service3") echo "active"; ?>"><a href="#">Service N°3</a></li>
						<!-- <li class="<?php if($page=="service_details") echo "active"; ?>"><a href="<?= LINK ?>service_details">Details services</a></li> -->
                    </ul>
                </li>
							<li class="<?php if($page=="contact") echo "active"; ?>"><a href="<?= LINK ?>contact">Conatct</a></li>        
						</ul>
					</div>

				</div>
				<div class="overlay"></div>
			</div>
			<!-- sidebar mobile menu - end
			================================================== -->


			<!-- breadcrumb_section - start
			================================================== -->
			<section class="breadcrumb_section d-flex align-items-center clearfix" data-background="<?= LINK ?>assets/visitor/assets/images/breadcrumb/bg_01.jpg">
				<div class="container">
					<div class="row align-items-center justify-content-lg-between">
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-delay=".1s">
							<h1 class="page_title mb-0">Service</h1>
						</div>

						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay=".1s">
							<ul class="breadcrumb_nav ul_li_right clearfix">
								<li><a href="<?= LINK ?>">Accueil</a></li>
								<li>Service 2</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- breadcrumb_section - end
			================================================== -->


			<!-- feature_section - start
			================================================== -->
			<section class="feature_section sec_ptb_130 clearfix">
				<div class="container">

					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-8 col-sm-9">
							<div class="section_title text-center mb_50 wow fadeInUp2" data-wow-delay=".1s">
								<h4 class="small_title">Nos principales caractéristiques</h4>
								<h2 class="big_title mb-0">
                                L’expérience nous permet d’imprimer des choses
								</h2>
								<span class="biggest_title">fonctionnalités</span>
							</div>
						</div>
					</div>

					<div class="row justify-content-center">
						<div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".3s">
							<div class="feature_card">
								<a class="item_image plus_effect" target="_blank" href="#">
									<img src="<?= LINK ?>assets/visitor/assets/images/feature/img_02.jpg" alt="image_not_found">
								</a>
								<div class="item_content">
									<span class="item_type">Tout type d'impression</span>
									<h3 class="item_title">Design & image de marque</h3>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".5s">
							<div class="feature_card">
								<a class="item_image plus_effect" target="_blank" href="#">
									<img src="<?= LINK ?>assets/visitor/assets/images/feature/img_03.jpg" alt="image_not_found">
								</a>
								<div class="item_content">
									<span class="item_type">Tout type d'impression</span>
									<h3 class="item_title">L'impression 3d & Logo</h3>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".7s">
							<div class="feature_card">
								<a class="item_image plus_effect" target="_blank" href="#">
									<img src="<?= LINK ?>assets/visitor/assets/images/feature/img_04.jpg" alt="image_not_found">
								</a>
								<div class="item_content">
									<span class="item_type">Tout type d'impression</span>
									<h3 class="item_title">Impression des chemises</h3>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</section>
			<!-- feature_section - end
			================================================== -->


			<!-- service_section - start
			================================================== -->
			<section class="service_section sec_ptb_130 bg_gray clearfix">
				<div class="container">

					<div class="row justify-content-center">
						<div class="col-lg-8 col-md-8 col-sm-10">
							<div class="section_title text-center mb_50 wow fadeInUp2" data-wow-delay=".1s">
								<h4 class="small_title">Ce que nous offrons</h4>
								<h2 class="big_title mb-0">
                                Nous fournissons beaucoup de services d’impression &amp; et de marque
								</h2>
								<span class="biggest_title">Services</span>
							</div>
						</div>
					</div>

					<div class="row justify-content-center">
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
							<div class="service_listlayout_boxed wow fadeInUp2 clearfix" data-wow-delay=".3s">
								<div class="item_image">
									<img src="<?= LINK ?>assets/visitor/assets/images/services/img_06.jpg" alt="image_not_found">
								</div>
								<div class="item_content">
									<h3 class="item_title">Impression bannières</h3>
									<p>
                                        Tout type de bannières répondant à vos exigences
									</p>
									<a class="text_btn" target="_blank" href="#"><span>Lire la suite</span> <i class="far fa-arrow-right"></i></a>
								</div>
							</div>

							<div class="service_listlayout_boxed wow fadeInUp2 clearfix" data-wow-delay=".5s">
								<div class="item_image">
									<img src="<?= LINK ?>assets/visitor/assets/images/services/img_07.jpg" alt="image_not_found">
								</div>
								<div class="item_content">
									<h3 class="item_title">Impression chemise</h3>
									<p>
                                        Faites décorer vos chemises rapidement
									</p>
									<a class="text_btn" target="_blank" href="#"><span>Lire la suite</span> <i class="far fa-arrow-right"></i></a>
								</div>
							</div>

							<div class="service_listlayout_boxed wow fadeInUp2 clearfix" data-wow-delay=".7s">
								<div class="item_image">
									<img src="<?= LINK ?>assets/visitor/assets/images/services/img_08.jpg" alt="image_not_found">
								</div>
								<div class="item_content">
									<h3 class="item_title">
                                    Impression de couvertures de livres</h3>
									<p>
                                        Donnez valeur à vos livres avec nos belles couvertures proposées
									</p>
									<a class="text_btn" target="_blank" href="#"><span>Lire la suite</span> <i class="far fa-arrow-right"></i></a>
								</div>
							</div>
						</div>

						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
							<div class="service_listlayout_boxed wow fadeInUp2 clearfix" data-wow-delay=".3s">
								<div class="item_image">
									<img src="<?= LINK ?>assets/visitor/assets/images/services/img_09.jpg" alt="image_not_found">
								</div>
								<div class="item_content">
									<h3 class="item_title">Impression de paniers d’affaires</h3>
									<p>
										Pour vos projets d'affaire à un niveau professionnel.
									</p>
									<a class="text_btn" target="_blank" href="#"><span>Lire la suite</span> <i class="far fa-arrow-right"></i></a>
								</div>
							</div>

							<div class="service_listlayout_boxed wow fadeInUp2 clearfix" data-wow-delay=".5s">
								<div class="item_image">
									<img src="<?= LINK ?>assets/visitor/assets/images/services/img_10.jpg" alt="image_not_found">
								</div>
								<div class="item_content">
									<h3 class="item_title">Conception et impression de logo</h3>
									<p>
										Conception et impression de logo pro
									</p>
									<a class="text_btn" target="_blank" href="#"><span>Lire la suite</span> <i class="far fa-arrow-right"></i></a>
								</div>
							</div>

							<div class="service_listlayout_boxed wow fadeInUp2 clearfix" data-wow-delay=".7s">
								<div class="item_image">
									<img src="<?= LINK ?>assets/visitor/assets/images/services/img_11.jpg" alt="image_not_found">
								</div>
								<div class="item_content">
									<h3 class="item_title">Conception et impression d’écorcheurs</h3>
									<p>
										Les flyer pour facilier vos objectifs de communication
									</p>
									<a class="text_btn" target="_blank" href="#"><span>Lire la suite</span> <i class="far fa-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</section>
			<!-- service_section - end
			================================================== -->


			<!-- cta_section - start
			================================================== -->
			<section class="cta_section sec_ptb_130 bg_default_orange clearfix">
				<div class="container">
					<div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">

						<div class="col-lg-6 col-md-8 col-sm-10 col-xs-12 order-lg-last">
							<div class="cta_image_1 wow fadeInUp2" data-wow-delay=".1s">
								<img src="<?= LINK ?>assets/visitor/assets/images/cta/img_01.png" alt="image_not_found">
							</div>
						</div>

						<div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
							<div class="cta_content text-white">
								<div class="section_title mb_30 wow fadeInUp2" data-wow-delay=".3s">
									<h4 class="small_title text-white">A besoin d'aide</h4>
									<h2 class="big_title mb-0 text-white">
                                        Toujours prêt à imprimer les œuvres de vos rêves
									</h2>
									<span class="biggest_title">Citation</span>
								</div>
								<p class="mb_30 border_left_yellow text-white wow fadeInUp2" data-wow-delay=".4s">
                                    Tout type de conception pour votre satisfaction et pour le soutien de vos projets de communication.								</p>
								<a class="custom_btn bg_white wow fadeInUp2" data-wow-delay=".5s" target="_blank" href="team.html">
									Rencontrez-nous 
									<span><i class="fal fa-arrow-right"></i></span>
								</a>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- cta_section - end
			================================================== -->


			<!-- testimonial_section - start
			================================================== -->
			<section class="testimonial_section sec_ptb_130 bg_gray clearfix">
				<div class="container">

					<div class="row justify-content-center">
						<div class="col-lg-6 col-md-7 col-sm-9">
							<div class="section_title text-center mb_30 wow fadeInUp2" data-wow-delay=".1s">
								<h4 class="small_title">Avis des clients</h4>
								<h2 class="big_title mb-0">
									Ce que nos clients disent de nos oeuvres
								</h2>
								<span class="biggest_title">Says</span>
							</div>
						</div>
					</div>

					<div class="testimonial_carousel column_3_carousel owl-carousel owl-theme wow fadeInUp2" data-wow-delay=".3s">
						<div class="item">
							<div class="testimonial_primary">
								<div class="content_wrap">
									<p>
                                        Je vous recommande beaucoup les services de md3 corporate communication
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
										<h3 class="hero_name">Marcel</h3>
										<span class="hero_title">Web designer</span>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="testimonial_primary">
								<div class="content_wrap">
									<p>
                                        Je vous recommande beaucoup les services de md3 corporate communication
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
										<h3 class="hero_name">Jonathan sandouno</h3>
										<span class="hero_title">Web designer</span>
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