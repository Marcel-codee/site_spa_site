
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
                            <h3 class="fw-bold mb-3"> <i class="icon-layers"></i>l'entreprise en question</h3>

                        </div>
                        <div class="ms-md-auto py-2 py-md-0">

                            <button href="#" class="btn btn-primary btn-round fs-6" data-bs-toggle="modal" data-bs-target="#exampleModal1"
                                <?php
                                     if(!empty($TabEntreprise)){
                                ?>
                                    disabled
                                    title="Vous ne pouvez plus ajouter d'informations"
                                    <?php
                                        }
                                    ?>
                            > <i class="icon-plus"></i> Ajouter des informations</button>
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
                                <th>Logo</th>
                                <th>nom</th>
                                <th>email</th>
                                <th>adresse</th>
                                <th>Site web</th>
                                <th>Contact</th>
                                <th>action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Logo</th>
                                <th>nom</th>
                                <th>email</th>
                                <th>adresse</th>
                                <th>Site web</th>
                                <th>Contact</th>
                                <th>action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <?php
                            if (!empty($TabEntreprise)) {
                                foreach($TabEntreprise as $value) :
                                ?>
                                <tr>
                                    <td><img src="upload/<?= $value['logo']; ?>" width="45px" alt=""> </td>
                                    <td><?= $value['nom']; ?></td>
                                    <td><?= $value['email']; ?></td>
                                    <td><?= $value['adresse']; ?></td>
                                    <td><?= $value['site_web']; ?></td>
                                    <td><?= $value['contact']; ?></td>
                                    <td><div class="dropdown">
                                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                               href="#" role="button" data-toggle="dropdown">
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">

                                                <a class="dropdown-item" href="<?=LINK?>editEntreprise/<?=$value[0]?>"><i class="dw dw-edit2"></i> Edit</a>


                                            </div>
                                        </div></td>
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
        <div class="modal-dialog modal-lg modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Informations pour Spa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form   method="post" class="card-body"  enctype="multipart/form-data">

                    <div class="modal-body ">
                        <div class="form-group border p-2">
                            <label for="exampleFormControlFile1"
                            >Ajouter le logo</label
                            >
                            <input
                                    type="file"
                                    class="form-control-file"
                                    id="exampleFormControlFile1"
                                    name="logo"
                            />
                        </div>


                        <div class="form-group form-group-default">
                            <label>Nom de l'entreprise</label>
                            <input  name="nom"
                                    type="text"
                                    class="form-control"
                            />
                        </div>
                        <div class="form-group form-group-default">
                            <label>Email de l'entreprise</label>
                            <input
                                    name="email"
                                    type="email"
                                    class="form-control"
                            />
                        </div>
                        <div class="form-group form-group-default">
                            <label>Adresse de l'entreprise</label>
                            <input
                                    name="adresse"
                                    type="text"
                                    class="form-control"
                            />
                        </div>

                        <div class="form-group form-group-default">
                            <label>Site web</label>
                            <input
                                    name="site_web"
                                    type="text"
                                    class="form-control"
                            />
                        </div>



                        <div class="form-group form-group-default">
                            <label>Contact</label>
                            <input
                                    name="contact"
                                    type="text"
                                    class="form-control"
                            />
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


<script>
    $(document).ready(function () {
        $("#basic-datatables").DataTable({});

        $("#multi-filter-select").DataTable({
            pageLength: 5,
            initComplete: function () {
                this.api()
                    .columns()
                    .every(function () {
                        var column = this;
                        var select = $(
                            '<select class="form-select"><option value=""></option></select>'
                        )
                            .appendTo($(column.footer()).empty())
                            .on("change", function () {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());

                                column
                                    .search(val ? "^" + val + "$" : "", true, false)
                                    .draw();
                            });

                        column
                            .data()
                            .unique()
                            .sort()
                            .each(function (d, j) {
                                select.append(
                                    '<option value="' + d + '">' + d + "</option>"
                                );
                            });
                    });
            },
        });

        // Add Row
        $("#add-row").DataTable({
            pageLength: 5,
        });

        var action =
            '<td> <div class="form-button-action"> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

        $("#addRowButton").click(function () {
            $("#add-row")
                .dataTable()
                .fnAddData([
                    $("#addName").val(),
                    $("#addPosition").val(),
                    $("#addOffice").val(),
                    action,
                ]);
            $("#addRowModal").modal("hide");
        });
    });
</script>