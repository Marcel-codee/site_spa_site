<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SPA TECHNOLOGY</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Red+Rose:wght@600;700&display=swap"
    rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    
    <!-- Libraries Stylesheet -->
    <link href="<?= LINK ?>assets/visitor/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= LINK ?>assets/visitor/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    
    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= LINK ?>assets/visitor/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Template Stylesheet -->
    <link href="<?= LINK ?>assets/visitor/css/style.css" rel="stylesheet">
    <?php if(in_array($page,['detailService'])):?>
    
    <!-- KQLJSDFMJQSLKF -->
    <!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?= LINK ?>assets/admin/vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= LINK ?>assets/admin/vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= LINK ?>assets/admin/vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?= LINK ?>assets/admin/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="<?= LINK ?>assets/admin/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?= LINK ?>assets/admin/vendors/styles/style.css">
    <link rel="stylesheet" type="text/css" href="<?= LINK ?>assets/admin/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="<?= LINK ?>assets/admin/src/plugins/datatables/css/responsive.bootstrap4.min.css">

	<link rel="stylesheet" type="text/css"href="<?= LINK ?>assets/admin/vendors/styles/style.css">
    <?php endif;?>
</head>


<body>
    <!-- Spinner Start -->
    <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
</div>
<!-- Spinner End -->

<!-- Topbar Start -->
<div class="container-fluid py-2 d-none d-lg-flex">
    <div class="container">
        <div class="d-flex justify-content-between">
                <div>
                    <small class="me-3"><i class="fa fa-map-marker-alt me-2"></i><?= $TabEntreprise[0]['adresse']; ?>, Conakry, Guinée</small>
                    <small class="me-3"><i class="fa fa-clock me-2"></i>Mon-Sat 09am-5pm, Sun Closed</small>
                </div>
                <nav class="breadcrumb mb-0">
                    <a class="breadcrumb-item small text-body" href="#">Career</a>
                    <a class="breadcrumb-item small text-body" href="#">Support</a>
                    <a class="breadcrumb-item small text-body" href="#">Terms</a>
                    <a class="breadcrumb-item small text-body" href="#">FAQs</a>
                </nav>
            </div>
        </div>
    </div>
    <!-- Topbar End -->