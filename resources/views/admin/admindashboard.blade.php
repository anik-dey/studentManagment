
<!doctype html>
<html lang="en">

<head>
	<title>Profile | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="/assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="/assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="{{URL::to('/admindashboard')}}"><img src="/assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form>
				
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="/assets/img/user.png" class="img-circle" alt="Avatar"> <span>Samuel</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="{{URL::to('/adminprofile')}}"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
								
								<li><a href="{{URL::to('/logout')}}"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="{{URL::to('/admindashboard')}}" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="{{URL::to('/studentinfo')}}" class=""><i class="lnr lnr-code"></i> <span>Student Information</span></a></li>
						
						<li><a href="{{URL::to('/allstudent')}}" class=""><i class="lnr lnr-cog"></i> <span>All Student</span></a></li>
						<li><a href="{{URL::to('/addstudent')}}" class=""><i class="lnr lnr-alarm"></i> <span>Add Student</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="active"><i class="lnr lnr-file-empty"></i> <span>Course</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse in">
								<ul class="nav">
									<li><a href="{{URL::to('/cse')}}" class="active">CSE</a></li>
									<li><a href="{{URL::to('/eee')}}" class="">EEE</a></li>
									<li><a href="{{URL::to('/bba')}}" class="">BBA</a></li>
								</ul>
							</div>
						</li>
						<li><a href="tables.html" class=""><i class="lnr lnr-dice"></i> <span>Tables</span></a></li>
						<li><a href="{{URL::to('/addteacher')}}" class=""><i class="lnr lnr-text-format"></i> <span>Add Teacher</span></a></li>
						<li><a href="{{URL::to('/allteacher')}}" class=""><i class="lnr lnr-linearicons"></i> <span>All Teacher</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
										<img src="/assets/img/user-medium.png" class="img-circle" alt="Avatar">
										<?php
										$exception4=Session::get('admin_name');
										Session::put('exception4',null);

										?>
										<h3 class="name">{{$exception4}}</h3>
										<span class="online-status status-available">Available</span>
									</div>
									<div class="profile-stat">
										<div class="row">
											<div class="col-md-4 stat-item">
												@php

											     $student=DB::table('student_tbl')
												 ->count('student_id')
												@endphp
												{{$student}} <span>All Student</span>
											</div>
											<div class="col-md-4 stat-item">
												@php

											     $teacher=DB::table('teachers_tbl')
												 ->count('teacher_id')
												@endphp

												{{$teacher}}<span>All Teacher</span>
											</div>
											<div class="col-md-4 stat-item">
												2174 <span>Points</span>
											</div>
										</div>
									</div>
								</div>
								<form action="" method="GET">
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
								<div class="profile-detail">
									<div class="profile-info">
										<h4 class="heading">Basic Info</h4>
										<ul class="list-unstyled list-justify">
											  <p class="alert-success"><?php
												$exception1=Session::get('admin_id');
												$exception2=Session::get('admin_email');
												$exception3=Session::get('admin_name');
												

												// if($exception)
												// {
												  
												//  // Session::put('exception',null);
												// }
												Session::put('exception1',null);
												Session::put('exception2',null);
												Session::put('exception3',null);
												?>
											<li>ID <span>{{$exception1}}</span></li>
											<li>Name <span>{{$exception3}}</span></li>
											<li>Email <span>{{$exception2}}</span></li>
											
										</ul>
									</div>
								</form>
									<div class="profile-info">
										<h4 class="heading">Social</h4>
										<ul class="list-inline social-icons">
											<li><a href="https://www.facebook.com" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
											<li><a href="https://www.twitter.com" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
											<li><a href="https://www.google.com" class="google-plus-bg"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="https://www.github.com" class="github-bg"><i class="fa fa-github"></i></a></li>
										</ul>
									</div>
									<div class="profile-info">
										<h4 class="heading">About</h4>
										<p>Interactively fashion excellent information after distinctive outsourcing.</p>
									</div>
									<div class="text-center"><a href="#" class="btn btn-primary">Edit Profile</a></div>
								</div>
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right">
								
								@yield('content')
								
							</div>
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="/assets/vendor/jquery/jquery.min.js"></script>
	<script src="/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="/assets/scripts/klorofil-common.js"></script>
</body>

</html>

