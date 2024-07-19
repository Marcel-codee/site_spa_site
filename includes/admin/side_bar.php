<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
				Fenêtre de réglage
				<span class="btn-block font-weight-400 font-12">Utilisateur d'interface de reglage</span>
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Arrière plan d'entête</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">Blanc</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Noir</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Arrière plan du sidebar</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">Blanc</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Noir</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
				<div class="sidebar-radio-group pb-10 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
						<label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
						<label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
						<label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
					</div>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
				<div class="sidebar-radio-group pb-30 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
						<label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
						<label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
						<label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
						<label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
						<label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
						<label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
					</div>
				</div>

				<div class="reset-options pt-30 text-center">
					<button class="btn btn-danger" id="reset-settings">Reinitialiser les réglages</button>
				</div>
			</div>
		</div>
	</div>
<div class="left-side-bar">
		<div class="brand-logo">
			<a href="<?= LINK . '___dashboard' ?>">
				<img src="<?= LINK?>assets/admin/vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
				<img src="<?= LINK?>assets/admin/vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li>
						<a href="<?= LINK ?>___spa" class="dropdown-toggle no-arrow <?= ($page=="___spa")?'active':'' ?>">
							<span class="micon dw dw-diagram"></span><span class="mtext">S.P.A TECHNOLOGY</span>
						</a>
					</li>
					<li>
						<a href="<?= LINK ?>___postes" class="dropdown-toggle no-arrow <?= ($page=="___postes" || $page=="___add___postes")?'active':'' ?>">
							<span class="micon dw dw-chat3"></span><span class="mtext">Postes</span>
						</a>
					</li>
					<li>
						<a href="<?= LINK ?>___employes" class="dropdown-toggle no-arrow <?= ($page=="___employes" || $page=="___add___employes")?'active':'' ?>">
							<span class="micon dw dw-invoice"></span><span class="mtext">Employés</span>
						</a>
					</li>
					<li>
						<a href="#" class="dropdown-toggle no-arrow <?= ($page=="___services")?'active':'' ?>">
							<span class="micon dw dw-invoice"></span><span class="mtext">Nos services</span>
						</a>
					</li>
					<li>
						<a href="#" class="dropdown-toggle no-arrow <?= ($page=="___blog")?'active':'' ?>">
							<span class="micon dw dw-invoice"></span><span class="mtext">Blog</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>