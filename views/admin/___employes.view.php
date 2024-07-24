<div class="mobile-menu-overlay"></div>

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Employés</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Employés</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Liste</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="primary">
                            <a class="btn btn-primary " href="<?= LINK ?>___add___employes" role="button"
                                >
                                Ajouter un Employé
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Simple Datatable start -->
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Liste de nos Employés</h4>
                </div>
                <div class="pb-20">
                    <?php if (!empty($error)): ?>
                    <div class="alert alert-danger p-1"><?= $error ?></div>
                    <?php elseif (!empty($success)): ?>
                        <div class="alert alert-success p-1"><?= $success ?></div>
                    <?php else: ?>
                    <?php endif; ?>
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">N°</th>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Telephone</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($les_employes as $k=>$employe): ?>
                            <tr>
                                <td class="table-plus"><?=$k++?></td>
                                <td><?=$employe['id']?></td>
                                <td><?=$employe['nom']?></td>
                                <td><?=$employe['prenom']?></td>
                                <td><?=$employe['telephone']?></td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                            href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="<?= LINK ?>___edit___employes/<?=$employe['id']?>"><i class="dw dw-edit2"></i> Modifier</a>
                                            <a class="dropdown-item" href="<?= LINK ?>___delete___employes/<?=$employe['id']?>"><i class="dw dw-delete-3"></i>
                                                Supprimer</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Simple Datatable End -->
        </div>