<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Static Navigation - SB Admin</title>

	<!-- Favicon-->
	<link href="assets/ico/favicon.ico" type="image/x-icon" rel="icon">
	<!-- Bootstrap core CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" rel="stylesheet">
	<!-- Bootstrap Icons CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous" rel="stylesheet">
	<!-- Core theme CSS -->
	<link href="assets/css/sb-admin.css" rel="stylesheet">
	<!-- Font Awesome icons (free version)-->
	<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" integrity="sha384-QM3vQ1ro1SUguF26PKxC17ZxibTi/ixpgL9NRL5/RHw1AmA0pfSeGCh6k+uqbyzJ" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
		<!-- Navbar Brand-->
		<a class="navbar-brand ps-3" href="index.php">Start Bootstrap</a>
		<!-- Sidebar Toggle-->
		<button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
		<!-- Navbar Search-->
		<form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
			<div class="input-group">
				<input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch">
				<button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
			</div>
		</form>
		<!-- Navbar-->
		<ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
				<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
					<li><a class="dropdown-item" href="#!">Settings</a></li>
					<li><a class="dropdown-item" href="#!">Activity Log</a></li>
					<li><hr class="dropdown-divider"></li>
					<li><a class="dropdown-item" href="#!">Logout</a></li>
				</ul>
			</li>
		</ul>
	</nav>
	<div id="layoutSidenav">
		<div id="layoutSidenav_nav">
			<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
				<div class="sb-sidenav-menu">
					<div class="nav">
						<div class="sb-sidenav-menu-heading">Core</div>
						<a class="nav-link" href="index.php">
							<div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
							Dashboard
						</a>
						<div class="sb-sidenav-menu-heading">Interface</div>
						<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
							<div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
							Layouts
							<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
						</a>
						<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
							<nav class="sb-sidenav-menu-nested nav">
								<a class="nav-link" href="layout-static.php">Static Navigation</a>
								<a class="nav-link" href="layout-sidenav-light.php">Light Sidenav</a>
							</nav>
						</div>
						<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
							<div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
							Pages
							<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
						</a>
						<div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
							<nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
								<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
									Authentication
									<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
								</a>
								<div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
									<nav class="sb-sidenav-menu-nested nav">
										<a class="nav-link" href="login.php">Login</a>
										<a class="nav-link" href="register.php">Register</a>
										<a class="nav-link" href="password.php">Forgot Password</a>
									</nav>
								</div>
								<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
									Error
									<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
								</a>
								<div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
									<nav class="sb-sidenav-menu-nested nav">
										<a class="nav-link" href="401.php">401 Page</a>
										<a class="nav-link" href="404.php">404 Page</a>
										<a class="nav-link" href="500.php">500 Page</a>
									</nav>
								</div>
							</nav>
						</div>
						<div class="sb-sidenav-menu-heading">Addons</div>
						<a class="nav-link" href="charts.php">
							<div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
							Charts
						</a>
						<a class="nav-link" href="tables.php">
							<div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
							Tables
						</a>
					</div>
				</div>
				<div class="sb-sidenav-footer">
					<div class="small">Logged in as:</div>
					Start Bootstrap
				</div>
			</nav>
		</div>
		<div id="layoutSidenav_content">
			<main>
				<div class="container-fluid px-4">
					<h1 class="mt-4">Static Navigation</h1>
					<ol class="breadcrumb mb-4">
						<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
						<li class="breadcrumb-item active">Static Navigation</li>
					</ol>
					<div class="card mb-4">
						<div class="card-body">
							<p class="mb-0">
								This page is an example of using static navigation. By removing the
								<code>.sb-nav-fixed</code>
								class from the
								<code>body</code>
								, the top navigation and side navigation will become static on scroll. Scroll down this page to see an example.
							</p>
						</div>
					</div>
					<div style="height: 100vh"></div>
					<div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
				</div>
			</main>
			<footer class="py-4 bg-light mt-auto">
				<div class="container-fluid px-4">
					<div class="d-flex align-items-center justify-content-between small">
						<div class="text-muted">Copyright &copy; Your Website 2023</div>
						<div>
							<a href="#">Privacy Policy</a>
							&middot;
							<a href="#">Terms &amp; Conditions</a>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha384-1H217gwSVyLSIfaLxHbE7dRb3v4mYCKbpQvzx0cegeju1MVsGrX5xXxAvs/HgeFs" crossorigin="anonymous"></script>
	<!-- Bootstrap core JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<!-- Core theme JS-->
	<script src="assets/js/sb-admin.js"></script>
</body>
</html>
