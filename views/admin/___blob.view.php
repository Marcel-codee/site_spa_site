<div class="mobile-menu-overlay"></div>

<div class="main-container m-0">
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
    </div>
</div>

<div class="main-container" style="margin-top:-10%;">
    <div class="pd-ltr-20">
        <div class="card-box mb-30 p-4">
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Enregistrement</button>
            </div>
            <h2 class="h4 pd-20">Gestion d'activité</h2>
            <table class="data-table table nowrap">
                <thead>
                    <tr>
                        <th class="table-plus datatable-nosort">Image</th>
                        <th>Titre</th>
                        <th>Contenu</th>
                        <th>Details</th>
                        <th class="datatable-nosort">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listArticle as $article) : ?>
                        <tr>
                            <td class="table-plus">
                                <img src="<?php echo htmlspecialchars($article['Image']); ?>" width="70" height="70" alt="">
                            </td>
                            <td>
                                <h5 class="font-16"><?= $article['Titre']; ?></h5>
                            </td>
                            <td><?= substr($article['Contenu'], 0, 20) ?><p>...</p>
                            </td>
                            <td><?= substr($article['Detail_Contenu'], 0, 20) ?><p>...</p>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                        <i class="dw dw-more"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                        <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal1-<?= $article['id'] ?>" data-bs-whatever="@mdo" class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                        <a class="dropdown-item" href="<?= LINK ?>___blob/del-<?= $article['id'] ?>"><i class="dw dw-delete-3"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <div class="modal fade w-100" id="exampleModal1-<?= $article['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" style="max-width:70%;margin:auto;">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5 text-center w-100" id="exampleModalLabel">Modification de l'actualité</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="<?= LINK ?>___blob/edit-<?= $article['id'] ?>" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <label for="Titre" class="col-form-label">Titre:</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fas fa-heading"></i></span>
                                                    <input type="text" class="form-control" id="Titre" name="Titre" placeholder="Titre" value="<?= $article['Titre'] ?>" required>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="Contenu" class="col-form-label">Contenu:</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fas fa-align-left"></i></span>
                                                    <textarea name="Contenu" id="Contenu" class="form-control" placeholder="Contenu bref" required><?= $article['Contenu'] ?></textarea>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="Image" class="col-form-label">Image:</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fas fa-image"></i></span>
                                                    <input type="file" class="form-control" id="Image" name="Image">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="editor-textarea1" class="col-form-label">Détail Contenu:</label>
                                                <textarea class="editor-textarea1" name="Detail_Contenu" style="width: 100%; height: 200px;" required><?= $article['Detail_Contenu'] ?></textarea>
                                            </div>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="modal fade w-100" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="max-width:70%;margin:auto;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-center w-100" id="exampleModalLabel">Ajout de l'actualité</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="Titre" class="col-form-label">Titre:</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-heading"></i></span>
                                    <input type="text" class="form-control" id="Titre" name="Titre" placeholder="Titre" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="Contenu" class="col-form-label">Contenu:</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-align-left"></i></span>
                                    <textarea name="Contenu" id="Contenu" class="form-control" placeholder="Contenu bref" required></textarea>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="Image" class="col-form-label">Image:</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-image"></i></span>
                                    <input type="file" class="form-control" id="Image" name="Image" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="editor-textarea" class="col-form-label">Détail Contenu:</label>
                                <textarea id="editor-textarea" name="Detail_Contenu" style="width: 100%; height: 200px;" required></textarea>
                            </div>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
