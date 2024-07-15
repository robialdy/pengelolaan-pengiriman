<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="position:fixed;">
	<!-- Brand Logo -->
	<a href="#" class="brand-link">
		<img src="https://www.jne.co.id/cfind/source/images/logo-white.svg" alt="AdminLTE Logo" style="width: 90px;" class="ms-5">
	</a>
	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar Menu -->
		<nav class="mt-4">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-item mb-2">
					<a href="<?= base_url('') ?>" class="nav-link <?= ($this->uri->segment(1) == '') ? 'active bg-danger' : ''; ?>">
						<i class="nav-icon fas fa-home"></i>
						<p>Home</p>
					</a>
				</li>
				<li class="nav-item mb-2">
					<a href="<?= base_url('pengiriman/') ?>" class="nav-link <?= ($this->uri->segment(1) == 'pengiriman') ? 'active bg-danger' : ''; ?>">
						<i class="nav-icon fas fa-shipping-fast"></i>
						<p>Pengiriman</p>
					</a>
				</li>
				<li class="nav-item mb-2">
					<a href="../widgets.html" class="nav-link">
						<i class="nav-icon fas fa-map-marker-alt"></i>
						<p>Lokasi</p>
					</a>
				</li>
				<li class="nav-item mb-2">
					<a href="<?= base_url('layanan')?>" class="nav-link">
						<i class="nav-icon fas fa-cogs"></i>
						<p>Layanan</p>
					</a>
				</li>
				<li class="nav-item mb-2">
					<a href="<?= base_url('kategori/') ?>" class="nav-link <?= ($this->uri->segment(1) == 'kategori') ? 'active bg-danger' : ''; ?>">
						<i class="nav-icon fas fa-tags"></i>
						<p>Kategori</p>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>

<!-- Main Content -->
<div class="content-wrapper">
	<section class="content">
			<!-- Your content here -->
