<header class="header_section sticky_header header_default clearfix">
			<div class="header_top bg_light clearfix">
				<div class="maxw_1420 container">
					<div class="row align-items-center">
						<div class="col-lg-8">
							<ul class="header_contact_info ul_li clearfix">
								<li><i class="far fa-map-marker-alt"></i> KM36, Guinée-conakry</li>
								<li><i class="far fa-envelope-open"></i> md3corporate-communication@gmail.com</li>
								<li><i class="far fa-clock"></i> Lundi - Samedi, 10h am - 18h</li>
							</ul>
						</div>

						<div class="col-lg-4">
							<ul class="header_items_list ul_li_right clearfix">
								<li>
									<ul class="primary_social_links ul_li clearfix">
										<li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#!"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#!"><i class="fab fa-youtube"></i></a></li>
										<li><a href="#!"><i class="fab fa-linkedin"></i></a></li>
									</ul>
								</li>
								<!-- <li>
									<div class="select_option mb-0">
										<select>
											<option data-display="Select">Select Your Language</option>
											<option value="English" selected>English</option>
											<option value="Spanish">Spanish</option>
											<option value="Portuguese">Portuguese</option>
											<option value="Franch">Franch</option>
										</select>
									</div>
								</li> -->
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="header_bottom bg_default_blue">
				<div class="maxw_1420 container">
					<div class="row align-items-center">

						<div class="col-lg-3">
							<div class="brand_logo">
								<a href="<?= LINK ?>">
									<img src="<?= LINK ?>assets/visitor/assets/images/logo/MDIII_corporate_communication_99.png" srcset="<?= LINK ?>assets/visitor/assets/images/logo/MDIII_corporate_communication_99.png 2x" alt="logo_not_found">
								</a>

								<ul class="mobilemenu_btns_group ul_li_right clearfix">
									<li>
										<button type="button" class="search_btn" data-bs-toggle="collapse" data-bs-target="#search_body_collapse" aria-expanded="false" aria-controls="search_body_collapse">
											<i class="fal fa-search"></i>
										</button>
									</li>
									<li>
										<button type="button" class="mobile_menu_btn"><i class="fal fa-bars"></i></button>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-lg-6">
							<nav class="main_menu clearfix">
								<ul class="ul_li_center clearfix">
									<li class="<?php if($page=="home") echo "active";?>"><a href="<?= LINK ?>">Accueil</a></li>
									<li class="<?php if($page=="about") echo "active"; ?>"><a href="<?= LINK ?>about">A propos</a></li>
									<li class="has_child">
										<a href="#!">Services</a>
										<ul class="submenu">
											<li class="<?php if($page=="service1") echo "active"; ?>"><a href="<?= LINK ?>service1">Service N°1</a></li>
											<li class="<?php if($page=="service2") echo "active"; ?>"><a href="<?= LINK ?>service2">Service N°2</a></li>
											<li class="<?php if($page=="service3") echo "active"; ?>"><a href="<?= LINK ?>service3">Service N°3</a></li>
											<!-- <li class="<?php if($page=="service_details") echo "active"; ?>"><a href="<?= LINK ?>service_details">Details services</a></li> -->
										</ul>
									</li>
									<li class="<?php if($page=="contact") echo "active"; ?>"><a href="<?= LINK ?>contact">Conatct</a></li>    
								</ul>
							</nav>
						</div>

						<div class="col-lg-3">
							<ul class="header_btns_group ul_li_right clearfix">
								<li>
									<button type="button" class="action_btn search_btn bg_default_purple" data-bs-toggle="collapse" data-bs-target="#search_body_collapse" aria-expanded="false" aria-controls="search_body_collapse">
										<i class="fal fa-search"></i>
									</button>
								</li>
								<li>
									<a class="custom_btn bg_default_yellow" href="<?= LINK ?>contact">
										Appelez-nous 
										<span><i class="fal fa-arrow-right"></i></span>
									</a>
								</li>
							</ul>
						</div>

					</div>
				</div>
			</div>

			<div id="search_body_collapse" class="search_body_collapse collapse">
				<div class="search_body">
					<div class="container maxw_1420">
						<form action="#">
							<div class="form_item m-0">
								<input type="search" name="search" placeholder="Tapez pour rechercher">
								<button type="submit"><i class="fal fa-search"></i></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</header>