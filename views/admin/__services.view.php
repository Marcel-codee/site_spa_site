<?=
include './includes/admin/pre-loader.php';
include './includes/admin/header.php';
include './includes/admin/side_bar.php';
?>

<div class="mobile-menu-overlay"></div>
    <div class="main-container">
        
		<div class="pd-ltr-20">
        <div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Form</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Form Basic</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
                               Ajouter
                            </button>
						</div>
					</div>
				</div>
                            <!-- Modal -->
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center w-100" id="exampleModalLabel">Formulaire d'ajout</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" class="container" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="d-flex gap-2  pt-2   justify-content-between">
                            <div class="form-group  row">
                                <label class="col-sm-12 col-md-2 col-form-label">Titre</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" name="titre" type="text" placeholder="Donnez un titre au service " required>
                                </div>
                            </div>
                            <div class="form-group   d-flex gap-0">
                                <label class=" ml-2  col-sm-12 col-md-2 col-form-label">Image</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="  form-control" name="image" placeholder="choisir une photo" type="file" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group   row">
                                <label class="col-sm-12  col-md-1 col-form-label">Type</label>
                                <div class="col-sm-12 col-md-11">
                                    <select name="idtype_service" class="custom-select  col-12">
                                        <option selected="" >Choisir le type de service</option>
                                        <?php $i = 0; foreach ($typeService as $data):
                                            if($data['status']==1) :
                                        ?>
                                        <option value="<?=++$i ?>"><?=$data['libelle'] ?></option>
                                        <?php endif; endforeach; ?>
                                    </select>
                                </div>
                            </div>
						<div class="row  justify-content-between">
                                 <div class="form-group d-flex">
									<label class="col-sm-12 col-md-4 col-form-label  ">Date de debut</label>
									<input class="  form-control date-picker" name="dateDebut" placeholder="Select Date" type="text">
								</div>
                            <div class="form-group  row">
                                <label class="col-sm-12  col-md-4 col-form-label">Durée(mois)</label>
                                <div class="col-sm-12 col-md-8 ">
                                    <input class="form-control" value="" name="duree" type="number">
                                </div>
                            </div>
                            
                        </div>
						
                        <div class="row container ">
                            
                            <div class="form-group  w-50 row">
                                <label class="col-sm-12  col-md-2 col-form-label">Cout</label>
                                <div class="col-sm-12  col-md-10">
                                    <input class="form-control" name="cout"  type="number">
                                </div>
                            </div>
                            <div class="form-group  w-50 d-flex">
                                    <label class=" ml-2  col-sm-12 col-md-2 col-form-label">Fchier</label>
                                    <div class="col-sm-12 col-md-12">

                                        <input class="form-control" name="fichier" placeholder="choisir une photo" type="file" >
                                    </div>
                                </div>
                        </div>
						
                        <div class="html-editor pd-20  mb-30">
                            <h4 class="h4 text-blue">Contenue du service</h4>
                            <textarea name="contenu" class="textarea_editor form-control border-radius-0" row="2" placeholder="Enter text ..."></textarea>
				        </div>
                        <div class="form-group d-flex flex-column justify-content-center ">
                                <label class="col-sm-12 col-md-6 col-form-label">Detail du contenu</label>
                                <div class="col-sm-12 col-md-12">
                                    <textarea name="detail_contenu" id="" class="form-control w-100" cols="50" rows="10"></textarea>
                                </div>
                            </div>
                    </div>
                    
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>
                            <input type="submit" class="btn btn-success" value="Enregistrer">
                        </div>
                    </form>

                    </div>
                </div>
                </div>
        <div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Listes des services</h4>
					</div>
					<div class="pb-20">
						<table class="table hover multiple-select-row data-table-export nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">#</th>
									<th>Titre</th>
									<th>Image</th>
									<th>Cout</th>
									<th>Date début</th>
									<th>Durée</th>
									<th>file</th>
                                    <th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
                                <?php $i=0 ; foreach ($service as $data): 
                                     if($data['status']==1) :
                                ?>

								<tr>
									<td class="table-plus"><?=++$i?></td>
									<td><?=$data['titre'] ?></td>
									<td>

                                        <img src="<?=LINK?>uploads/<?=$data['image']?>" width="50px">
                                    </td>
									<td><?=$data['cout'] ?> GNF</td>
									<td><?=$data['dateDebut'] ?></td>
									<td><?=$data['duree'] ?> mois</td>
									<td><?=$data['fichier'] ?></td>
                                    <td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
												href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <button type="button"  data-toggle="modal" data-target=".bd-example-modal-lg1"><i class="dw dw-edit2"></i> Edit</button>
												<a class="dropdown-item" href="<?= LINK ?>__services/delete-<?= $data['id']?>"><i class="dw dw-delete-3"></i>
													Delete</a>
											</div>
										</div>
									</td>
								</tr>
                                <!-- Button trigger modal -->

                                <!-- Modal -->
                                <div class="modal fade bd-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modifier un service</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form method="post" class="container" enctype="multipart/form-data">
                                                    <div class="modal-body">
                                                        <div class="d-flex gap-2  pt-2   justify-content-between">
                                                            <div class="form-group  row">
                                                                <label class="col-sm-12 col-md-2 col-form-label">Titre</label>
                                                                <div class="col-sm-12 col-md-10">
                                                                    <input class="form-control" value="<?=$data['titre'] ?>" name="titre" type="text" placeholder="Donnez un titre au service " required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group   d-flex gap-0">
                                                                <label class=" ml-2  col-sm-12 col-md-2 col-form-label">Image</label>
                                                                <div class="col-sm-12 col-md-10">
                                                                <input class="form-control" value="<?=$data['titre'] ?>" name="image" placeholder="choisir une photo" type="file" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group   row">
                                                                <label class="col-sm-12  col-md-1 col-form-label">Type</label>
                                                                <div class="col-sm-12 col-md-11">
                                                                    <select name="idtype_service" class="custom-select  col-12">
                                                                        <option selected="" >Choisir le type de service</option>
                                                                        <?php $i = 0; foreach ($typeService as $data):
                                                                            if($data['status']==1) :
                                                                            
                                                                        ?>
                                                                        <option value="<?=++$i ?>"><?=$data['libelle'] ?></option>
                                                                        <?php endif; endforeach; ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        <div class="row  justify-content-between">
                                                                <div class="form-group d-flex">
                                                                    <label class="col-sm-12 col-md-4 col-form-label  ">Date de debut</label>
                                                                    <input class="form-control " value="<?=$data['dateDebut'] ?>" name="dateDebut" placeholder="Select Date" type="text">
                                                                </div>
                                                            <div class="form-group  row">
                                                                <label class="col-sm-12  col-md-4 col-form-label">Durée(mois)</label>
                                                                <div class="col-sm-12 col-md-8 ">
                                                                    <input class="form-control" value="<?=$data['duree'] ?>" name="duree" type="number">
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                        <div class="row container ">
                                                            
                                                            <div class="form-group  w-50 row">
                                                                <label class="col-sm-12  col-md-2 col-form-label">Cout</label>
                                                                <div class="col-sm-12  col-md-10">
                                                                    <input class="form-control" name="cout" value="<?=$data['cout'] ?>"  type="number">
                                                                </div>
                                                            </div>
                                                            <div class="form-group  w-50 d-flex">
                                                                    <label class=" ml-2  col-sm-12 col-md-2 col-form-label">Fchier</label>
                                                                    <div class="col-sm-12 col-md-12">

                                                                        <input class="form-control" name="fichier" value="<?=$data['fichier'] ?>" placeholder="choisir une photo" type="file" >
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        
                                                        <div class="html-editor pd-20  mb-30">
                                                            <h4 class="h4 text-blue">Contenue du service</h4>
                                                            <textarea name="contenu" class="textarea_editor form-control border-radius-0"  row="2" placeholder="Enter text ..."> <?=$data[3] ?></textarea>
                                                        </div>
                                                        <div class="form-group d-flex flex-column justify-content-center ">
                                                                <label class="col-sm-12 col-md-6 col-form-label">Detail du contenu</label>
                                                                <div class="col-sm-12 col-md-12">
                                                                    <textarea name="detail_contenu" id="" class="form-control w-100" cols="50" rows="10"><?=$data[4] ?></textarea>
                                                                </div>
                                                            </div>
                                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                        <button type="button" class="btn btn-warning"><a href="<?= LINK ?>__services/edit-<?= $data['id']?>">modifier</a></button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <?php endif; endforeach; ?>
                                
							</tbody>
						</table>
					</div>
				</div>
        </div>
        </div>
</div>

