<div class="mobile-menu-overlay"></div>

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Ajout d'un employé</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= LINK ?>___employes">Liste employés</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Modification des informations d'un employé</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Default Basic Forms Start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Employé</h4>
                        <p class="mb-30">Modification des informations d'un employé</p>
                    </div>
                </div>
                    <?php if (!empty($error)): ?>
                    <div class="alert alert-danger p-1"><?= $error ?></div>
                    <?php elseif (!empty($success)): ?>
                        <div class="alert alert-success p-1"><?= $success ?></div>
                    <?php else: ?>
                    <?php endif; ?>
                <form method="POST" action="" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Nom</label>
                        <div class="col-sm-12 col-md-10">
                            <input name="nom" class="form-control" value="<?=$employe['nom']?>" type="text" placeholder="Nom de l'employé">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Prenom</label>
                        <div class="col-sm-12 col-md-10">
                            <input name="prenom" class="form-control" value="<?=$employe['prenom']?>" type="text" placeholder="Prénom de l'employé">
                        </div>
                    </div>                   
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Telephone</label>
                        <div class="col-sm-12 col-md-10">
                            <input name="telephone" class="form-control" value="<?=$employe['telephone']?>" value="" type="tel">
                        </div>
                    </div>
                    <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Photo</label>
							<div class="custom-file col-sm-12 col-md-10">
								<input type="file" name="photo" value="<?=$employe['photo']?>">
							</div>
						</div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Poste</label>
                        <div class="col-sm-12 col-md-10">
                            <select name="idposte" class="custom-select col-12">
                                <option selected="">Selectionnez...</option>
                                <?php foreach($postess as $poste): ?>
                                    <option value="<?=$poste['idposte']?>"><?= $poste['Libelle']?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="btn-list">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Modifier</button>
                    </div>
                </form>
            </div>
            <!-- horizontal Basic Forms End -->


           
