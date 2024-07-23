<?=
include './includes/admin/pre-loader.php';
include './includes/admin/header.php';
include './includes/admin/side_bar.php';
?>

<div class="mobile-menu-overlay"></div>
    <div class="main-container">
        
		<div class="pd-ltr-20">
        
                <div class="page-header"> 
                <div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Type de services</h4>
							</div>
						</div>       <!-- Modal -->
                    <form method="post" class="" style="padding-left: 2%;height: 120px;">
                       <div class="row" style="height: 100px;">
                            <div class="form-group  d-flex flex-column justify-content-center  " style="width:42%">
                                <label class="col-sm-12 col-md-2 col-form-label">libelle</label>
                                <div class="col-sm-12 col-md-10">
                                    <?php if (!empty($_GET['id'])) :?>
                                    <input class="form-control w-100" value="<?=$Requete['libelle']?>"  name="libelle" type="text" placeholder="Donnez un titre au service " required>
                                    <?php endif; ?>
                                    <?php if (empty($_GET['id'])) :?>
                                    <input class="form-control w-100"  name="libelle" type="text" placeholder="Donnez un titre au service " required>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group   d-flex flex-column justify-content-center " style="width:42%">
                                <label class="col-sm-12 col-md-2 col-form-label">description</label>
                                <div class="col-sm-12 col-md-10">
                                <?php if (empty($_GET['id'])) :?>
                                    <textarea style="height: 50px;" name="description" id="" class="form-control" cols="30" rows="1"></textarea>
                                    <?php endif; ?>
                                    <?php if (!empty($_GET['id'])) :?>
                                    <textarea style="height: 50px;"  name="description" id="" class="form-control" cols="30" rows="1"><?=$Requete['description']?></textarea>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php if (empty($_GET['id'])) :?>
                            <input type="submit" class="btn btn-success" value="Enregistrer">
                            <?php endif; ?>
                            <?php if (!empty($_GET['id'])) :?>
                            <input type="submit" class="btn btn-warning" value="modifier">
                            <?php endif; ?>
                            </div>                            
                    </form>
                    </div>
                    

                <!-- modal modier  -->
           <!-- Modal -->
           <div class="modal fade" id="modifierModalCenter" tabindex="-1" role="dialog" aria-labelledby="modifierModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center w-100" id="exampleModalLabel">Modifier</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form method="post" style="padding-left: 2%;">
                       
                            <div class="form-group d-flex flex-column justify-content-center  ">
                                <label class="col-sm-12 col-md-2 col-form-label">libelle</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control w-100" name="libelle" type="text" placeholder="Donnez un titre au service " required>
                                </div>
                            </div>

                            <div class="form-group d-flex flex-column justify-content-center ">
                                <label class="col-sm-12 col-md-2 col-form-label">description</label>
                                <div class="col-sm-12 col-md-10">
                                    <textarea name="description" id="" class="form-control w-100" cols="50" rows="10"></textarea>
                                </div>
                            </div>
                            
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>
                        <input type="submit" class="btn btn-warning" value="modifier">
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
									<th>libelle</th>
									<th>description</th>
                                    <th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
                                <?php $i = 0; foreach ($response as $data):
                                    if($data['status']==1) :
                                        $service=$data['id'];
                                ?>
								<tr>
									<td class="table-plus"><?= ++$i?></td>
									<td><?= $data['libelle']?></td>
									
									<td><?= $data['description']?></td>
                                    <td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
												href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
												<a class="dropdown-item"  href="<?= LINK ?>__type_services/edit-<?= $data['id']?>"><i class="dw dw-edit2"></i> Edit</a>
												<a class="dropdown-item" href="<?= LINK ?>__type_services/delete-<?= $data['id']?>"><i class="dw dw-delete-3"></i>
													Delete</a>
											</div>
										</div>
									</td>
								</tr>
                                <?php endif; endforeach; ?>
                               	
							</tbody>
						</table>
					</div>
				</div>
        </div>

         <!-- modal modier  -->
           <!-- Modal -->
           <div class="modal fade" id="modifierModalCenter" tabindex="-1" role="dialog" aria-labelledby="modifierModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center w-100" id="exampleModalLabel">Modifier</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form method="post" style="padding-left: 2%;">
                       
                            <div class="form-group d-flex flex-column justify-content-center  ">
                                <label class="col-sm-12 col-md-2 col-form-label">libelle</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control w-100" name="libelle" type="text" value="" placeholder="Donnez un titre au service " required>
                                </div>
                            </div>

                            <div class="form-group d-flex flex-column justify-content-center ">
                                <label class="col-sm-12 col-md-2 col-form-label">description</label>
                                <div class="col-sm-12 col-md-10">
                                    <textarea name="description" id="" class="form-control w-100" cols="50" rows="10"></textarea>
                                </div>
                            </div>
                            
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>
                        <input type="submit" class="btn btn-warning" value="modifier">
                    </div>
                    </form>
                    </div>
                </div>
                </div>

