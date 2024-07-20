
<div class="main-container">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4>Presentation</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Presentation</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-6 col-sm-12 text-right">

            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div
                        class="d-flex justify-content-between"
                >
                    <div>
                        <h3 class="fw-bold mb-3"> <i class="icon-layers"></i> A propos  de l'entreprise </h3>

                    </div>
                    <div class="ms-md-auto py-2 py-md-0">

                        <button href="#" class="btn btn-primary btn-round fs-6" data-bs-toggle="modal" data-bs-target="#exampleModal1"
                            <?php
                            if(!empty($TabPresentaion)){
                                ?>
                                disabled
                                title="Vous ne pouvez plus ajouter d'informations"
                                <?php
                            }
                            ?>> <i class="icon-plus"></i> Ajouter des informations</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table
                            id="basic-datatables"
                            class="display table table-striped table-hover"
                    >
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Titre</th>
                            <th>Contenu</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Image</th>
                            <th>Titre</th>
                            <th>Contenu</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php
                        if (!empty($TabPresentaion)) {
                        foreach($TabPresentaion as $value) :
                        ?>
                        <tr>
                            <td><img src="upload/<?= $value['image']; ?>" width="45px" alt=""> </td>
                            <td><?= $value['titre']; ?></td>
                            <td><?= $value['contenu']; ?></td>

                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                       href="#" role="button" data-toggle="dropdown">
                                        <i class="dw dw-more"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                        <a class="dropdown-item" href="<?=LINK?>editPresentation/<?=$value[0]?>"><i class="dw dw-edit2"></i> Edit</a>

                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php
                        endforeach;
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">A propos de Spa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form   method="post" class="card-body" enctype="multipart/form-data">

                    <div class="modal-body ">
                        <div class="form-group">
                            <label for="exampleFormControlFile1"
                            >Ajouter une image</label
                            >
                            <input
                                    type="file"
                                    class="form-control"
                                    id="exampleFormControlFile1"
                                    name="image"
                            />
                        </div>

                        <div class="form-group form-group-default">
                            <label>Titre</label>
                            <input
                                    name="titre"
                                    type="text"
                                    class="form-control"
                            />
                        </div>

                        <div class="form-group form-group-default">
                            <label>Contenu</label>
                            <textarea
                                    name="contenu"
                                    type="email"
                                    class="form-control"
                            ></textarea>
                        </div>
                        <div class="form-group form-group-default">
                            <label>Detail contenu</label>
                            <textarea
                                        name="detail_contenu"
                                    type="text"
                                    class="textarea_editor form-control border-radius-0"
                            ></textarea>
                        </div>

                        <div class="form-group form-group-default">
                            <label>selectionner une entreprise</label>
                            <select
                                    class="form-control"
                                    id="formGroupDefaultSelect"
                                    name="identreprise">
                                <?php
                                if (!empty($TabEntreprise)) {
                                    foreach($TabEntreprise as $value) :
                                    ?>
                                        <option value="<?= $value[0]; ?>"><?= $value['nom']; ?></option>
                                    <?php
                                    endforeach;
                                    }
                                    ?>
                            </select>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
