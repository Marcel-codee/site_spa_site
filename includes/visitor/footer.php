<!-- Footer Start -->
<div class="container-fluid footer position-relative bg-dark text-white-50 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5 py-5">
            <div class="col-lg-6 pe-lg-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="h1 text-primary mb-0">Lab<span class="text-white">sky</span></h1>
                </a>
                <p class="fs-5 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue,
                    iaculis id elit eget, ultrices pulvinar tortor.</p>
                <p><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</p>
                <p><i class="fa fa-phone-alt me-2"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope me-2"></i>info@example.com</p>
                <div class="d-flex mt-4">
                    <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <div class="row g-5">
                    <div class="col-sm-6">
                        <h4 class="text-light mb-4">Quick Links</h4>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Our Services</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">Support</a>
                    </div>
                    <div class="col-sm-6">
                        <h4 class="text-light mb-4">Popular Links</h4>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Our Services</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">Support</a>
                    </div>
                    <div class="col-sm-12">
                        <h4 class="text-light mb-4">Newsletter</h4>
                        <div class="w-100">
                            <div class="input-group">
                                <input type="text" class="form-control border-0 py-3 px-4"
                                    style="background: rgba(255, 255, 255, .1);"
                                    placeholder="Your Email Address"><button class="btn btn-primary px-4">Sign
                                    Up</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid copyright bg-dark text-white-50 py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-0">&copy; <a href="#">Your Site Name</a>. All Rights Reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                <p class="mb-0">Designed by <a href="https://htmlcodex.com">HTML Codex</a><br>Distributed by <a
                        href="https://themewagon.com">ThemeWagon</a></p>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= LINK ?>assets/visitor/lib/wow/wow.min.js"></script>
<script src="<?= LINK ?>assets/visitor/lib/easing/easing.min.js"></script>
<script src="<?= LINK ?>assets/visitor/lib/waypoints/waypoints.min.js"></script>
<script src="<?= LINK ?>assets/visitor/lib/counterup/counterup.min.js"></script>
<script src="<?= LINK ?>assets/visitor/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="<?= LINK ?>assets/visitor/js/main.js"></script>
<?php if(in_array($page,['detailService'])):?>
    <script src="<?= LINK?>assets/admin/vendors/scripts/core.js"></script>
	<script src="<?= LINK?>assets/admin/vendors/scripts/script.min.js"></script>
	<script src="<?= LINK?>assets/admin/vendors/scripts/process.js"></script>
	<script src="<?= LINK?>assets/admin/vendors/scripts/layout-settings.js"></script>
	<script src="<?= LINK?>assets/admin/src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="<?= LINK?>assets/admin/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="<?= LINK?>assets/admin/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="<?= LINK?>assets/admin/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="<?= LINK?>assets/admin/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="<?= LINK?>assets/admin/vendors/scripts/dashboard.js"></script>

<?php endif;?>
</body>

</html>