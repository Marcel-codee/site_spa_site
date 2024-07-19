<div class="mobile-menu-overlay"></div>

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Ajout d'un admin</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= LINK ?>___profile">Liste admin</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Ajout d'un admin</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Default Basic Forms Start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Admin</h4>
                        <p class="mb-30">Ajout d'un administrateur</p>
                    </div>
                </div>
                <form method="POST" action="">
                    <?php if (!empty($error)): ?>
                    <div class="alert alert-danger p-1"><?= $error ?></div>
                    <?php elseif (!empty($success)): ?>
                        <div class="alert alert-success p-1"><?= $success ?></div>
                    <?php else: ?>
                    <?php endif; ?>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Login</label>
                        <div class="col-sm-12 col-md-10">
                            <input name="login" class="form-control" type="text" placeholder="Login">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Mot de passe</label>
                        <div class="col-sm-12 col-md-10">
                            <input name="password" class="form-control" type="password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Identifiant employé</label>
                        <div class="col-sm-12 col-md-10">
                            <input name="idpersonne" class="form-control" type="number">
                        </div>
                    </div>
                    <div class="btn-list">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Ajouter</button>
                    </div>
                </form>
            </div>
            <!-- horizontal Basic Forms End -->


           
