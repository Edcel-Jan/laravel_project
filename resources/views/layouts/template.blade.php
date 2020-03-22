<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<title>{{ config('app.name') }}</title>
	<link rel="stylesheet" href="{{ asset('css/template.css') }}">

	
</head>
<body>
    <div class="wrapper">
		<div class="main-header">

			<!-- Logo Header -->
				<div class="logo-header" data-background-color='purple'>
					
					<a href="index.html" class="logo">
						<!-- l  o  g  o -->
					</a>

					<!-- large size -->
					<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon">
							<i class="icon-menu"></i>
						</span>
					</button>

					<!-- phone -->
					<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
					<div class="nav-toggle">
						<button class="btn btn-toggle toggle-sidebar">
							<i class="icon-menu"></i>
						</button>
					</div>

				</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
				<nav class="navbar navbar-header navbar-expand-lg"  data-background-color='purple2'>
					<div class="container-fluid">
						<!-- <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
							<li class="nav-item dropdown hidden-caret">
								<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
									<div class="avatar-sm">
										<img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
									</div>
								</a>
								<ul class="dropdown-menu dropdown-user animated fadeIn">
									<div class="dropdown-user-scroll scrollbar-outer">
										<li>
											<div class="user-box">
												<div class="avatar-lg"><img src="../assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
												<div class="u-text">
													<h4>Hizrian</h4>
													<p class="text-muted">hello@example.com</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
												</div>
											</div>
										</li>
										<li>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#">My Profile</a>
											<a class="dropdown-item" href="#">My Balance</a>
											<a class="dropdown-item" href="#">Inbox</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#">Account Setting</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#">Logout</a>
										</li>
									</div>
								</ul>
							</li>
						</ul> -->
					</div>
				</nav>
			<!-- End Navbar -->

		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2" style="background-color: white;">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">

					<!-- user info -->
						<div class="user">
							<div class="avatar-sm float-left mr-2">
								<!-- <img src="../assets/img/bg-abstract2.png" alt="..." class="avatar-img rounded-circle"> -->
							</div>
							<div class="info">
									<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
									<span>
										Edcel Jan
										<span class="user-level">Administrator</span>
										<span class="caret"></span>
									</span>
								</a>
								<div class="clearfix"></div>

								<div class="collapse in" id="collapseExample">
									<ul class="nav">
										<!-- <li>
											<a href="#profile">
												<span class="link-collapse">My Profile</span>
											</a>
										</li>-->
										<li>
											<a href="../assets/php/logout.php">
												<span class="link-collapse">Logout</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					<!-- user info -->

					<!-- content side -->
						<ul class="nav nav-primary">
							<li class="nav-section">
								<span class="sidebar-mini-icon">
									<i class="fa fa-ellipsis-h"></i>
								</span>
							</li>
							<li class="nav-item" id="nav_home">
								<a href="/">
									<i class="fas fa-home"></i>
									<p>Home</p>
									<!-- <span class="badge badge-success">4</span> -->
								</a>
							</li>
						
							<li class="nav-item" id="nav_user">
							<a href="{{ route('user.index') }}">
									<i class="fas fa-user-plus"></i>
									<p>Manage User</p>
									<!-- <span class="badge badge-success">4</span> -->
								</a>
							</li>

							<li class="nav-item" id="nav_category">
								<a href="{{ route('categories.index') }}">
									<i class="fas fa-book"></i>
									<p>Manage Categories</p>
									<!-- <span class="badge badge-success">4</span> -->
								</a>
							</li>
							<li class="nav-item" id="nav_post">
							<a href="{{ route('post.index') }}">
									<i class="fas fa-pen"></i>
									<p>Manage Post</p>
									<!-- <span class="badge badge-success">4</span> -->
								</a>
							</li>

						{{-- <li class="nav-item">
							<a data-toggle="collapse" href="#manage">
								<i class="fas fa-shopping-cart"></i>
								<p>Manage</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="manage">
								<ul class="nav nav-collapse">
										<li class="nav-item" id="program">
											<a href="program.php">
												<i class="fas fa-clipboard"></i>
												<p>Program</p>
												<!-- <span class="badge badge-success">4</span> -->
											</a>
										</li>
										<li class="nav-item" id="curriculum">
											<a href="curriculum.php">
												<i class="fas fa-columns"></i>
												<p>Curriculum</p>
												<!-- <span class="badge badge-success">4</span> -->
											</a>
										</li>
										<li class="nav-item" id="specialist">
											<a href="specialist.php">
												<i class="fas fa-columns"></i>
												<p>Specialist</p>
												<!-- <span class="badge badge-success">4</span> -->
											</a>
										</li>
										<li class="nav-item" id="year_level">
											<a href="year_level.php">
												<i class="fas fa-align-justify"></i>
												<p>Year Level</p>
												<!-- <span class="badge badge-success">4</span> -->
											</a>
										</li>
										<li class="nav-item" id="semester">
											<a href="semester.php">
												<i class="fas fa-align-justify"></i>
												<p>Semester</p>
												<!-- <span class="badge badge-success">4</span> -->
											</a>
										</li>
										<li class="nav-item" id="subject">
											<a href="subject.php">
												<i class="fas fa-book"></i>
												<p>Subject</p>
												<!-- <span class="badge badge-success">4</span> -->
											</a>
										</li>
										<li class="nav-item" id="exam">
											<a href="exam.php">
												<i class="fas fa-book"></i>
												<p>Exam</p>
												<!-- <span class="badge badge-success">4</span> -->
											</a>
										</li>

						
								</ul>
							</div>
						</li> --}}
					{{-- <li class="nav-item" id="report">
								<a href="report.php">
									<i class="fas fa-copy"></i>
									<p>Manage Report</p>
									<!-- <span class="badge badge-success">4</span> -->
								</a>
							</li> --}}	
						</ul>
					<!-- content side -->

				</div>
			</div>
		</div>
		<div class="main-panel">
			<div class="content">
				@yield('content')
			</div>
		</div>
	</div>
	<script src='{{ asset('js/template.js') }}'></script>
	@yield('script')
</body>
</html>