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
							<h1 class="page_title mb-0">A propos de nous</h1>
						</div>

						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay=".1s">
							<ul class="breadcrumb_nav ul_li_right clearfix">
								<li><a href="<?= LINK ?>">Accueil</a></li>
								<li>A propos de nous</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- breadcrumb_section - end
			================================================== -->


			<!-- about_section - start
			================================================== -->
			<section class="about_section sec_ptb_130 clearfix">
				<div class="container">
					<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">

						<div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
							<div class="about_image_1 wow fadeInUp2" data-wow-delay=".1s">
								<img src="<?= LINK ?>assets/visitor/assets/images/about/img_01.png" alt="image_not_found">
							</div>
						</div>

						<div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
							<div class="about_content">
								<div class="section_title wow fadeInUp2" data-wow-delay=".1s">
									<h4 class="small_title">À propos de notre entreprise</h4>
									<h2 class="big_title mb-0">
									Imprimer les œuvres de vos rêves avec MDIII corporate communication
									</h2>
									<span class="biggest_title">A propos de nous</span>
								</div>

								<p class="wow fadeInUp2" data-wow-delay=".2s">
									<span>
									Nous sommes une entreprise qui évolue dans la prestation de services notamment l'imprimerie et la conception des solutions informatiques répondant à vos besoins tout en tenant compte de vos exigences
									</span>
								</p>
								<p class="mb-0 wow fadeInUp2" data-wow-delay=".3s">
								Notre entreprise vous offre dans un grand confort  un service sur-mesure avec toutes les conditions réunies pour votre satisfaction. Avec notre vision de defier toute concurrence, nos projets parlent mieux de nous et nos réalisations aussi
								</p>

								<div class="row wow fadeInUp2" data-wow-delay=".4s">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<!-- <div class="about_certificate clearfix">
											<div class="item_icon">
												<img src="<?= LINK ?>assets/visitor/assets/images/about/iso.png" alt="iso_not_found">
											</div>
											<div class="item_content">
												<h3 class="item_title">Certifer ISO</h3>
												<p>
													entreprise officielle repondant aux normes nationnales
												</p>
											</div>
										</div> -->
									</div>
									<!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="about_certificate clearfix">
											<div class="item_icon">
												<img src="<?= LINK ?>assets/visitor/assets/images/about/reward.png" alt="iso_not_found">
											</div>
											<div class="item_content">
												<h3 class="item_title"></h3>
												<p>
													Denouncing pleasure and praising pain was born
												</p>
											</div>
										</div>
									</div> -->
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- about_section - end
			================================================== -->


			<!-- service_section - start
			================================================== -->
			<section class="service_section sec_ptb_130 bg_gray clearfix">
				<div class="container">

					<div class="row justify-content-center">
						<div class="col-lg-8 col-md-9 col-sm-12 col-xs-12">
							<div class="section_title text-center mb_30 wow fadeInUp2" data-wow-delay=".1s">
								<h4 class="small_title">Ce que nous offrons</h4>
								<h2 class="big_title mb-0">
									Nous fournissons beaucoup de services d’impression et de marque
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
								<div class="item_content">
									<h3 class="item_title">Histoire de l'entreprise</h3>
									<p>
										Cette entreprise a vu jour en 2024 sous l'iniative de Mamoudou doukouré
									</p>
									<a class="icon_btn" target="_blank" href="service_details.html"><i class="fal fa-arrow-right"></i></a>
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
								<div class="item_content">
									<h3 class="item_title">Membres exclusifs</h3>
									<p>
										Notre équipe de professionels bien choisie pour vous satisfaire
									</p>
									<a class="icon_btn" target="_blank" href="service_details.html"><i class="fal fa-arrow-right"></i></a>
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
								<div class="item_content">
									<h3 class="item_title">Avancement des travaux</h3>
									<p>
										Nos travaux comme tous nos projets se portent bien.
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
								<span class="biggest_title">Équipe</span>
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


			<!-- skill_section - start
			================================================== -->
			<section class="skill_section bg_default_orange clearfix">
				<div class="container-fluid p-0">
					<div class="row g-0 align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">

						<div class="col-lg-6 col-md-7 col-sm-9 col-xs-12 order-lg-last">
							<div class="faq_image wow fadeIn" data-wow-delay=".1s">
								<img src="<?= LINK ?>assets/visitor/assets/images/skills/img_01.jpg" alt="image_not_found">
							</div>
						</div>

						<div class="col-lg-6 col-md-7 col-sm-9 col-xs-12">
							<div class="skill_content_wrap text-white">
								<div class="section_title mb_50 wow fadeInUp2" data-wow-delay=".3s">
									<h4 class="small_title text-white">Nos competences</h4>
									<h2 class="big_title text-white mb-0">
										Compétences professionnelles pour l’impression
									</h2>
									<span class="biggest_title">Les competences</span>
								</div>

								<p class="mb-0 wow fadeInUp2" data-wow-delay=".4s">
									Bénéficier d'un travail professionnel avec notre équipe compétente et professionnelle
								</p>

								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".5s">
										<div class="circle_progress_item">
											<div class="printing_bar circle_progress">
												<strong class="percentage_text text-white"></strong>
											</div>
											<h4 class="item_title text-white">Impression et conception</h4>
											<p class="mb-0">
												L'univers de la créativité avec grande passion dans la conception des solutions digitales.
											</p>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".6s">
										<div class="circle_progress_item">
											<div class="branding_bar circle_progress">
												<strong class="percentage_text text-white"></strong>
											</div>
											<h4 class="item_title text-white">Design et image de marque</h4>
											<p class="mb-0">
												Faites parler votre coeur et vos idées
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- skill_section - end
			================================================== -->


			<!-- testimonial_section - start
			================================================== -->
			<section class="testimonial_section sec_ptb_130 bg_gray clearfix">
				<div class="container">

					<div class="row justify-content-center">
						<div class="col-lg-6 col-md-7 col-sm-9">
							<div class="section_title text-center mb_30 wow fadeInUp2" data-wow-delay=".1s">
								<h4 class="small_title">Avis de nos clients</h4>
								<h2 class="big_title mb-0">
									Ce que nos clients disent sur nos oeuvres
								</h2>
								<span class="biggest_title">Dit</span>
							</div>
						</div>
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
			</section>
			<!-- testimonial_section - end
			================================================== -->


		</main>