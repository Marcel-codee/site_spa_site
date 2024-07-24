
<div class="container-fluid container-service py-5">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<div class="bg-dark" style="height: 200px;">
								<img src="<?=LINK?>uploads/<?=$Requete['image']?>" alt="" class="" height="200px">				
							</div>

							<div class="profile-info">
                                <br>
                                <br>
								<h5 class="mb-20 h5 text-blue">Information sur la formation</h5>
								<ul>
									<li>
										<span>Date de debut</span>
										<?=$Requete['dateDebut']?>
									</li>
									<li>
										<span>Durée</span>
										<?=$Requete['duree']?> mois
									</li>
									<li>
										<span>Cout</span>
										<?=$Requete['cout']?> GNF
									</li>
									<li>
										<span>Fichier pdf</span>
                                     
										<embed src="<?=LINK?>upload/<?=$Requete['fichier']?>" class="d-none" type="application/pdf" id="fichier">
                                        <br>
                                        <a href="<?=LINK?>upload/<?=$Requete['fichier']?>" download><img src="" alt="pdf" width="50px"></a>
                                    </li>
								</ul>
							</div>
							
		
						</div>
					</div>
					<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
						<div class="card-box height-100-p overflow-hidden">
							<div class="profile-tab height-100-p">
								<div class="tab height-100-p">
									<ul class="nav nav-tabs customtab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">Contenu</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#tasks" role="tab">Détail Contenue</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#setting" role="tab">S'inscrire</a>
										</li>
									</ul>
									<div class="tab-content">
										<!-- Timeline Tab start -->
										<div class="tab-pane fade show active" id="timeline" role="tabpanel">
											<div class="pd-20">
                                          <?=$Requete['contenu']?>
											</div>
										</div>
										<!-- Timeline Tab End -->
										<!-- Tasks Tab start -->
										<div class="tab-pane fade" id="tasks" role="tabpanel">
											
										</div>
										<!-- Tasks Tab End -->
										<!-- Setting Tab start -->
										<div class="tab-pane fade height-100-p" id="setting" role="tabpanel">
											<div class="profile-setting">
												<form method="post" enctype="multipart/form-data">
													<ul class="p-3 ">
														<li class="weight-500 w-100">
															<h4 class="text-blue h5 mb-20">Formulaire d'inscription</h4>
															<div class="form-group">
																<label>Titre de la Formation</label>
																<input class="form-control form-control-lg" disabled  type="text" value="<?=$Requete['titre']?>">
															</div>
															<div class="form-group">
																<label>Nom</label>
																<input class="form-control form-control-lg" name="nom" type="text">
															</div>
															<div class="form-group">
																<label>prenom</label>
																<input class="form-control form-control-lg" name="prenom" type="text">
															</div>
															<div class="form-group">
																<label>Email</label>
																<input class="form-control form-control-lg" name="email" type="email">
															</div>
															<div class="form-group">
																<label>Telephone</label>
																<input class="form-control form-control-lg" name="telephone" type="number">
															</div>
															<div class="form-group">
																<label>photo</label>
																<input class="form-control form-control-lg" name="photo" type="file">
															</div>
															<div class="form-group mb-0">
																<input type="submit" class="btn btn-primary" value="S'inscrire">
															</div>
														</li>
														
													</ul>
												</form>
											</div>
										</div>
										<!-- Setting Tab End -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
				DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
			</div>
		</div>
	</div>
   </div>