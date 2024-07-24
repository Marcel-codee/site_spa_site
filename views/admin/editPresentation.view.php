
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

                    </div>
                </div>
            </div>
            <?php

        if(!empty($recc)){
        ?>
            <div class="card-body">

                <form   method="post" class="card-body" enctype="multipart/form-data">


                        <div class="form-group">
                            <label for="exampleFormControlFile1"
                            >Ajouter une image</label
                            >
                            <input
                                type="file"
                                class="form-control"
                                id="exampleFormControlFile1"
                                name="image"
                                value="<?=$recc['image']?>"

                            />
                        </div>

                        <div class="form-group form-group-default">
                            <label>Titre</label>
                            <input
                                name="titre"
                                type="text"
                                class="form-control"
                                value="<?=$recc['titre']?>"

                            />
                        </div>

                        <div class="form-group form-group-default">
                            <label>Contenu</label>
                            <textarea
                                name="Contenu"
                                type="email"
                                value="<?=$recc['contenu']?>"
                                class="form-control"
                            ><?=$recc['contenu']?></textarea>
                        </div>
                        <div class="form-group form-group-default">
                            <label>Detail contenu</label>
                            <textarea
                                name="detail_contenu"
                                type="text"
                                value="<?=$recc['detail_contenu']?>"
                                class="textarea_editor form-control border-radius-0"
                            ><?=$recc['detail_contenu']?></textarea>
                        </div>


                        <button type="submit" class="btn btn-primary">Modifier les informations</button>

                </form>

            </div>
        </div>
    </div>
</div>


<?php
}