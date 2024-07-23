
<div class="main-container">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4>Entreprise</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Entreprise</li>
                        <li class="breadcrumb-item active" aria-current="page">Modification</li>
                    </ol>
                </nav>
            </div>

        </div>
        <?php
        if(!empty($error)){


        ?>
        <div class="alert alert-danger" role="alert">
            <?=$error?>
        </div>
        <?php
        }
        if(!empty($recc)){
        ?>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div
                        class="d-flex justify-content-between"
                >
                    <div>
                        <h3 class="fw-bold mb-3"> <i class="icon-layers"></i>Modification des informations de l'entreprise</h3>

                    </div>

                </div>
            </div>
            <div class="card-body">
                <form   method="post" class="card-body" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="exampleFormControlFile1"
                            >Ajouter le logo</label
                            >
                            <input
                                    type="file"
                                    class="form-control-file"
                                    id="exampleFormControlFile1"
                                    name="logo"
                                    value="<?=$recc['nom']?>"
                            />
                        </div>


                        <div class="form-group form-group-default">
                            <label>Nom de l'entreprise</label>
                            <input
                                    name="nom"
                                    type="text"
                                    class="form-control"
                                    value="<?=$recc['nom']?>"

                            />
                        </div>
                        <div class="form-group form-group-default">
                            <label>Email de l'entreprise</label>
                            <input
                                    name="email"
                                    type="email"
                                    class="form-control"
                                    value="<?=$recc['email']?>"

                            />
                        </div>
                        <div class="form-group form-group-default">
                            <label>Adresse de l'entreprise</label>
                            <input
                                    name="adresse"
                                    type="text"
                                    class="form-control"
                                    value="<?=$recc['adresse']?>"

                            />
                        </div>

                        <div class="form-group form-group-default">
                            <label>Site web</label>
                            <input
                                    name="Site_web"
                                    type="text"
                                    class="form-control"
                                    value="<?=$recc['site_web']?>"

                            />
                        </div>


                        <div class="form-group form-group-default">
                            <label>Contact</label>
                            <input
                                    name="contact"
                                    type="text"
                                    class="form-control"
                                    value="<?=$recc['contact']?>"

                            />
                        </div>


                        <button type="submit" class="btn btn-primary">Modification</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
}


