

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
                       
<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Listes des services</h4>
					</div>
					<div class="pb-20">
						<table class="table hover multiple-select-row data-table-export nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">#</th>
									<th>Image</th>
									<th>Nom</th>
									<th>Prenom</th>
									<th>Tel</th>
									<th>Email</th>
									<th>Service</th>
									<th>Status</th>
                                    <th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
                                <?php $i=0 ; foreach ($client as $data): 
                                     if($data['status']!=0) :
                                ?>

								<tr>
									<td class="table-plus"><?=++$i?></td>
									<td>
                                        <img src="<?=LINK?>uploads/<?=$data['photo']?>" width="50px">
                                    </td>
									<td><?=$data['nom'] ?></td>
									<td><?=$data['prenom'] ?> </td>
									<td><?=$data['telephone'] ?></td>
									<td><?=$data['email'] ?> </td>
									<td><?=$data['titre'] ?> </td>
									
									<td>
                                    <?php if($data['status']==1) : ?>
                                        <a class="btn btn-warning" href="<?= LINK ?>__client/<?= $data['idclient']?>">Approuvez</a>
                                    </td>
                                    <?php endif; if($data['status']==2) : ?>
                                        <span class="info info-success"> Inscrit </span>
                                    <?php endif;?>
                                    <td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
												href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
												<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
												<a class="dropdown-item" href="<?= LINK ?>__services/delete-<?= $data['id']?>"><i class="dw dw-delete-3"></i>
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
        </div>
</div>

