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
							<h1 class="page_title mb-0">Contactez-nous</h1>
						</div>

						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay=".1s">
							<ul class="breadcrumb_nav ul_li_right clearfix">
								<li><a href="<?= LINK ?>">Accueil</a></li>
								<li>Contactez-nous</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- breadcrumb_section - end
			================================================== -->


			<!-- contact_section - start
			================================================== -->
			<section class="contact_section sec_ptb_130 clearfix">
				<div class="container">
					<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">

						<div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
							<div class="contact_content">
								<div class="section_title mb_30 wow fadeInUp2" data-wow-delay=".1s">
									<h4 class="small_title">Contactez-nous</h4>
									<h2 class="big_title mb-0">
                                        Chaque mise à jour pour nous contacter
									</h2>
									<span class="biggest_title">Contact</span>
								</div>
								<p class="mb_30 wow fadeInUp2" data-wow-delay=".2s">
									Contactez-nous aujourd'hui pour tout besoin.
								</p>
								<ul class="contact_information_list ul_li_block clearfix">
									<li class="wow fadeInUp2" data-wow-delay=".3s">
										<div class="item_icon bg_default_orange"><i class="fal fa-map-marker-alt"></i></div>
										<div class="item_content">
											<h4>Adresse</h4>
											<p>KM36, Guinée-conakry</p>
										</div>
									</li>
									<li class="wow fadeInUp2" data-wow-delay=".4s">
										<div class="item_icon bg_default_yellow"><i class="fal fa-envelope"></i></div>
										<div class="item_content">
											<h4>Notre email</h4>
											<p>md3corporate-communication@gmail.com</p>
										</div>
									</li>
									<li class="wow fadeInUp2" data-wow-delay=".5s">
										<div class="item_icon bg_default_lightblue"><i class="fal fa-phone"></i></div>
										<div class="item_content">
											<h4>Applez-nous</h4>
											<p>+224 (610) 483 872</p>
										</div>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
							<div class="contact_form">
								<form id="contact-form" action="#" method="POST">
									<div class="form_item wow fadeInUp2" data-wow-delay=".1s">
										<span class="input_title">Nom complet</span>
										<div class="position-relative">
											<input id="input_user" type="text" name="name" placeholder="Ecrivez votre nom">
											<label class="input_icon" for="input_user"><i class="fal fa-user"></i></label>
										</div>
									</div>

									<div class="form_item wow fadeInUp2" data-wow-delay=".2s">
										<span class="input_title">Adresse email</span>
										<div class="position-relative">
											<input id="input_email" type="email" name="email" placeholder="Redigez votre Email">
											<label class="input_icon" for="input_email"><i class="fal fa-envelope"></i></label>
										</div>
									</div>

									<div class="form_item wow fadeInUp2" data-wow-delay=".3s">
										<span class="input_title">Numero de telephone</span>
										<div class="position-relative">
											<input id="input_phone" type="tel" name="phone" placeholder="Ecrivez votre numero de telephone">
											<label class="input_icon" for="input_phone"><i class="fal fa-phone"></i></label>
										</div>
									</div>

									<div class="form_item wow fadeInUp2" data-wow-delay=".4s">
										<span class="input_title">Laisser un message</span>
										<textarea name="message" placeholder="Redigez-votre message"></textarea>
									</div>

									<button type="submit" class="custom_btn bg_default_orange wow fadeInUp2" data-wow-delay=".5s">
										Envoyer un message
										<span><i class="fal fa-arrow-right"></i></span>
									</button>
									<p class="ajax-response"></p>
								</form>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- contact_section - end
			================================================== -->


			<!-- google map - start
			================================================== -->
			<!-- <div class="map_section wow fadeIn clearfix" data-wow-delay=".1s">
				<div id="mapBox" data-lat="40.701083" data-lon="-74.1522848" data-zoom="12" data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia." data-mlat="40.701083" data-mlon="-74.1522848">
				</div>
			</div> -->
			<!-- google map - end
			================================================== -->


		</main>