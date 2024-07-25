	<!-- js -->
	<script src="https://cdn.ckeditor.com/4.22.0/standard/ckeditor.js"></script>
    <script>
        // Initialiser CKEditor sur le textarea
        CKEDITOR.replace('editor-textarea');

        // Fonctionnalité de plein écran
        document.getElementById('btnFullscreen').addEventListener('click', function() {
            if (!document.fullscreenElement) {
                document.documentElement.requestFullscreen();
            } else {
                if (document.exitFullscreen) {
                    document.exitFullscreen();
                }
            }
        });
    </script>
    <script>
        // Initialiser CKEditor sur le textarea
        CKEDITOR.replace('editor-textarea1');

        // Fonctionnalité de plein écran
        document.getElementById('btnFullscreen').addEventListener('click', function() {
            if (!document.fullscreenElement) {
                document.documentElement.requestFullscreen();
            } else {
                if (document.exitFullscreen) {
                    document.exitFullscreen();
                }
            }
        });
    </script>
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
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	
	
	<?php if(in_array($page,['__services','__type_services'])):?>
	<script src="<?= LINK?>assets/admin/vendors/scripts/script.min.js"></script>
	<script src="<?= LINK?>assets/admin/vendors/scripts/script.min.js"></script>
	<script src="<?= LINK?>assets/admin/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="<?= LINK?>assets/admin/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="<?= LINK?>assets/admin/src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="<?= LINK?>assets/admin/src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="<?= LINK?>assets/admin/src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="<?= LINK?>assets/admin/src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="<?= LINK?>assets/admin/src/plugins/datatables/js/vfs_fonts.js"></script>
	<!-- Datatable Setting js -->
	<script src="<?= LINK?>assets/admin/vendors/scripts/datatable-setting.js"></script>
	<?php endif;?>
</body>
</html>