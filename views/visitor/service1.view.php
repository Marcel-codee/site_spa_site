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
								<li>Service 1</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- breadcrumb_section - end
			================================================== -->


			<!-- feature_section - start
			================================================== -->
			<section class="feature_section sec_ptb_130 bg_gray clearfix">
				<div class="container">
					<div class="row justify-content-lg-between justify-content-md-center">

						<div class="col-lg-4 col-md-10">
							<div class="feature_content">
								<div class="section_title mb_30 wow fadeInUp2" data-wow-delay=".1s">
									<h4 class="small_title">Nos principales caractéristiques</h4>
									<h2 class="big_title mb-0">
										Explorez toutes les fonctionnalités
									</h2>
									<span class="biggest_title">Faire</span>
								</div>
								<p class="border_left_orange mb_30 wow fadeInUp2" data-wow-delay=".2s">
									Nous sommes dans la qualité et l'excellence.
								</p>
								<a class="custom_btn bg_default_orange wow fadeInUp2" data-wow-delay=".3s" target="_blank" href="portfolio_masonry.html">
									En savoir plus
									<span><i class="fal fa-arrow-right"></i></span>
								</a>
							</div>
						</div>

						<div class="col-lg-8 col-md-10">
							<div class="row mt__30 justify-content-lg-between">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="feature_listlayout_boxed wow fadeInUp2" data-wow-delay=".1s">
										<div class="item_icon bg_default_yellow"><i class="fal fa-print"></i></div>
										<div class="item_content">
											<h3 class="item_title">Imprimerie et presses</h3>
											<p>
												Impression de tout type, matérialisée selon votre désir
											</p>
											<a class="text_btn" target="_blank" href="#"><span>Lire la suite</span> <i class="far fa-arrow-right"></i></a>
										</div>
									</div>

									<div class="feature_listlayout_boxed wow fadeInUp2" data-wow-delay=".3s">
										<div class="item_icon bg_default_orange"><i class="fal fa-laptop-code"></i></div>
										<div class="item_content">
											<h3 class="item_title">Impression numérique</h3>
											<p>
												Matérialiser vos idées rapidement avec nous
											</p>
											<a class="text_btn" target="_blank" href="#"><span>Lire la suite</span> <i class="far fa-arrow-right"></i></a>
										</div>
									</div>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="feature_listlayout_boxed wow fadeInUp2" data-wow-delay=".5s">
										<div class="item_icon bg_default_blue"><i class="fal fa-cube"></i></div>
										<div class="item_content">
											<h3 class="item_title">Impression 3D</h3>
											<p>
												Impression à 3D à votre disposition.
											</p>
											<a class="text_btn" target="_blank" href="#"><span>Lire la suite</span> <i class="far fa-arrow-right"></i></a>
										</div>
									</div>

									<div class="feature_listlayout_boxed wow fadeInUp2" data-wow-delay=".7s">
										<div class="item_icon bg_default_pink"><i class="fal fa-cog"></i></div>
										<div class="item_content">
											<h3 class="item_title">Impression à perte</h3>
											<p>
												Laissez-nous-vous proposer les designs.
											</p>
											<a class="text_btn" target="_blank" href="#"><span>Lire la suite</span> <i class="far fa-arrow-right"></i></a>
										</div>
									</div>
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
			<section class="service_section sec_ptb_130 clearfix">
				<div class="container">

					<div class="row justify-content-center">
						<div class="col-lg-8 col-md-9 col-sm-12 col-xs-12">
							<div class="section_title text-center mb_30 wow fadeInUp2" data-wow-delay=".1s">
								<h4 class="small_title">Ce que nous offrons</h4>
								<h2 class="big_title mb-0">
									Nous fournissons beaucoup de services d’impression &amp; de marque
								</h2>
								<span class="biggest_title">Services</span>
							</div>
						</div>
					</div>

					<div class="row justify-content-center">
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".3s">
							<div class="service_grid">
								<div class="item_image">
									<img src="<?= LINK ?>assets/visitor/assets/images/services/img_01.jpg" alt="image_not_found">
								</div>
								<div class="item_content bg_gray">
									<h3 class="item_title">Histoire de l'entreprise</h3>
									<p>
										Créée en 2024 , avec son fondateur monsieur Mamoudou doukouré.
									</p>
									<a class="icon_btn" target="_blank" href="#"><i class="fal fa-arrow-right"></i></a>
									<span class="bg_icon">
										<img src="<?= LINK ?>assets/visitor/assets/images/services/bg_icon.png" alt="icon_not_found">
									</span>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".5s">
							<div class="service_grid">
								<div class="item_image">
									<img src="<?= LINK ?>assets/visitor/assets/images/services/img_02.jpg" alt="image_not_found">
								</div>
								<div class="item_content bg_gray">
									<h3 class="item_title">Membres exclusifs</h3>
									<p>
										Notre equipe professionnelle
									</p>
									<a class="icon_btn" target="_blank" href="#"><i class="fal fa-arrow-right"></i></a>
									<span class="bg_icon">
										<img src="<?= LINK ?>assets/visitor/assets/images/services/bg_icon.png" alt="icon_not_found">
									</span>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".7s">
							<div class="service_grid">
								<div class="item_image">
									<img src="<?= LINK ?>assets/visitor/assets/images/services/img_03.jpg" alt="image_not_found">
								</div>
								<div class="item_content bg_gray">
									<h3 class="item_title">Avancement des travaux</h3>
									<p>
										Une equipe dynamique et passionnée sur vos projets pour votre satisfaction
									</p>
									<a class="icon_btn" target="_blank" href="service_details.html"><i class="fal fa-arrow-right"></i></a>
									<span class="bg_icon">
										<img src="<?= LINK ?>assets/visitor/assets/images/services/bg_icon.png" alt="icon_not_found">
									</span>
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
			<section class="cta_section sec_ptb_130 bg_default_blue deco_wrap clearfix">
				<div class="container">
					<div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">

						<div class="col-lg-5 col-md-8 col-sm-10 col-xs-12">
							<div class="cta_image_2 wow fadeIn" data-wow-delay=".1s">
								<img src="<?= LINK ?>assets/visitor/assets/images/cta/img_02.png" alt="image_not_found">
							</div>
						</div>

						<div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
							<div class="cta_content ml__30 text-white">
								<div class="section_title mb_30 wow fadeInUp2" data-wow-delay=".1s">
									<h4 class="small_title">A besoin d'aide</h4>
									<h2 class="big_title mb-0 text-white">
										Toujours prêt à imprimer les œuvres de vos rêves
									</h2>
									<span class="biggest_title">Citation</span>
								</div>
								<p class="mb_30 border_left_yellow text-white wow fadeInUp2" data-wow-delay=".2s">
									Tout à notre disposition pour vous satisfaire dans vos besoins de réalisation
								</p>
								<ul class="check_info_list ul_li_block clearfix mb_50 wow fadeInUp2" data-wow-delay=".3s">
									<li>Kakemono</li>
									<li>Kakemono standard </li>
									<li>Bâche numerique</li>
									<li>Vynil</li>
									<li>Micro perforé</li>
									<li>Flyers A5</li>
									<li>Flyers A6</li>
									<li>Plaquettes A3</li>
									<li>T-shirt</li>
									<li>Autres visuels</li>
								</ul>
								<a class="custom_btn bg_default_orange wow fadeInUp2" data-wow-delay=".4s" target="_blank" href="#">
									En savoir plus
									<span><i class="fal fa-arrow-right"></i></span>
								</a>
							</div>
						</div>
						
					</div>
				</div>

				<div class="deco_image deco_image_1 wow fadeInUp2" data-wow-delay=".1s">
					<img src="<?= LINK ?>assets/visitor/assets/images/cta/shape_01.png" alt="shape_not_found">
				</div>
			</section>
			<!-- cta_section - end
			================================================== -->


			<!-- funfact_section - start
			================================================== -->
			<section class="funfact_section clearfix">
				<div class="container">
					<div class="funfact_wrap funfact_bordered">

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
								<h3 class="item_title">Palmares</h3>
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
								<h3 class="item_title">Transport</h3>
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
								<h3 class="item_title">Ordinateur numerique</h3>
							</div>
						</div>

					</div>
				</div>
			</section>
			<!-- funfact_section - end
			================================================== -->


			<!-- testimonial_section - start
			================================================== -->
			<section class="testimonial_section sec_ptb_130 bg_gray clearfix">
				<div class="container">

					<div class="row justify-content-center">
						<div class="col-lg-6 col-md-7 col-sm-9 col-xs-12">
							<div class="section_title text-center mb_30 wow fadeInUp2" data-wow-delay=".1s">
								<h4 class="small_title">Avis des clients</h4>
								<h2 class="big_title mb-0">
									Ce que nos clients disent de nos œuvres
								</h2>
								<span class="biggest_title">Dits</span>
							</div>
						</div>
					</div>

					<div class="testimonial_carousel column_3_carousel owl-carousel owl-theme wow fadeInUp2" data-wow-delay=".3s">
						<div class="item">
							<div class="testimonial_primary">
								<div class="content_wrap">
									<p>
										J'ai confié la réalisation des visuels à cette entreprise, je suis complètement satisfait
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
										<h3 class="hero_name">Alphred Mansaré</h3>
										<span class="hero_title">Web designer</span>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="testimonial_primary">
								<div class="content_wrap">
									<p>
										J'ai confié la réalisation des visuels à cette entreprise, je suis complètement satisfait
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
										<h3 class="hero_name">Fanta conde</h3>
										<span class="hero_title">Web designer</span>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="testimonial_primary">
								<div class="content_wrap">
									<p>
										J'ai confié la réalisation des visuels à cette entreprise, je suis complètement satisfait
									</p>
									<span class="quote_icon">
										<img src="<?= LINK ?>assets/visitor/assets/images/testimonial/quote_01.png" alt="icon_not_found">
									</span>
								</div>
								<div class="hero_info_wrap">
									<div class="hero_thumbnail">
										<img src="<?= LINK ?>assets/visitor/assets/images/testimonial/img_03.png" alt="icon_not_found">
									</div>
									<div class="hero_info">
										<h3 class="hero_name">Aissata kourouma</h3>
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