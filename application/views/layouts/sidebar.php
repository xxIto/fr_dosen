 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

 	<!-- Sidebar - Brand -->
 	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
 		<div class="sidebar-brand-icon rotate-n-15">
 			<i class="fas fa-book"></i>
 		</div>
 		<div class="sidebar-brand-text mx-3">SDM FATEK UNMUS</div>
 	</a>

 	<!-- Divider -->
 	<hr class="sidebar-divider my-0">

 	<!-- Nav Item - Dashboard -->
 	<li class="nav-item active">
 		<a class="nav-link" href="<?= base_url('dashboard') ?>">
 			<i class="fas fa-fw fa-tachometer-alt"></i>
 			<span>Dashboard</span></a>
 	</li>

 	<!-- Divider -->
 	<hr class="sidebar-divider">

 	<!-- Nav Item - Pages Collapse Menu -->

 	<div class="sidebar-heading">
 		Master Data
 	</div>

 	<!-- Nav Item - Pages Collapse Menu -->
 	<li class="nav-item">
 		<a class="nav-link" href="<?= base_url('dosen') ?>">
 			<i class="fas fa-fw fa-users"></i>
 			<span>Dosen</span>
 		</a>
 	</li>
 	<li class="nav-item">
 		<a class="nav-link" href="<?= base_url('tubel') ?>">
 			<i class="fas fa-fw fa-users"></i>
 			<span>Sertifikasi Dosen</span>
 		</a>
 	</li>
 	<li class="nav-item">
 		<a class="nav-link" href="<?= base_url('tubel') ?>">
 			<i class="fas fa-fw fa-users"></i>
 			<span>Tubel</span>
 		</a>
 	</li>
 	<li class="nav-item">
 		<a class="nav-link" href="<?= base_url('pppk') ?>">
 			<i class="fas fa-fw fa-users"></i>
 			<span>PPPK Dosen</span>
 		</a>
 	</li>
 	<li class="nav-item">
 		<a class="nav-link" href="<?= base_url('sertifikasidosen') ?>">
 			<i class="fas fa-fw fa-users"></i>
 			<span>Tendik</span>
 		</a>
 	</li>
 	<li class="nav-item">
 		<a class="nav-link" href="<?= base_url('statusdsn') ?>">
 			<i class="fas fa-fw fa-users"></i>
 			<span>Status Dsn</span>
 		</a>
 	</li>
 	<li class="nav-item">
 		<a class="nav-link" href="<?= base_url('statusasn') ?>">
 			<i class="fas fa-fw fa-users"></i>
 			<span>ASN</span>
 		</a>
 	</li>
 	<li class="nav-item">
 		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
 			aria-expanded="true" aria-controls="collapseTwo">
 			<i class="fas fa-fw fa-university"></i>
 			<span>Jurusan</span>
 		</a>
 		<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
 			<div class="bg-white py-2 collapse-inner rounded">
 				<h6 class="collapse-header"> Jurusan :</h6>
 				<a class="collapse-item" href="<?= base_url('tekniksipil') ?>">
 					<span>Teknik Sipil</span>
 				</a>
 				<a class="collapse-item" href="<?= base_url('teknikinformatika') ?>">
 					<span>Teknik Informatika</span>
 				</a>
 				<a class="collapse-item" href="<?= base_url('teknikmesin') ?>">
 					<span>Teknik Mesin</span>
 				</a>
 				<a class="collapse-item" href="<?= base_url('teknikelektro') ?>">
 					<span>Teknik Elektro</span>
 				</a>
 				<a class="collapse-item" href="<?= base_url('sisteminformasi') ?>">
 					<span>Sistem Informasi</span>
 				</a>
 				<a class="collapse-item" href="<?= base_url('arsitektur') ?>">
 					<span>Arsitektur</span>
 				</a>
 			</div>
 		</div>
 	</li>

 	<!-- Divider -->
 	<hr class="sidebar-divider d-none d-md-block">

 	<!-- Sidebar Toggler (Sidebar) -->
 	<div class="text-center d-none d-md-inline">
 		<button class="rounded-circle border-0" id="sidebarToggle"></button>
 	</div>

 </ul>
 <!-- End of Sidebar -->