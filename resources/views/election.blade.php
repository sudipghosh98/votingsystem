<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Election</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Voting</span>System</a>
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="abhi.jpg" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Username</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="/index"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="/profile"><em class="fa fa-user">&nbsp;</em> Profile</a></li>
			<li class="active"><a href="/election"><em class="fa fa-bar-chart">&nbsp;</em> Election</a></li>
			
			
			<li><a href="/login"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Election</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Currently Running Elections</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<div class="easypiechart" id="easypiechart-teal" data-percent="56" ><span class="percent">56%</span></div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<div class="easypiechart" id="easypiechart-blue" data-percent="92" ><span class="percent">92%</span></div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<div class="easypiechart" id="easypiechart-orange" data-percent="65" ><span class="percent">65%</span></div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<div class="easypiechart" id="easypiechart-red" data-percent="27" ><span class="percent">27%</span></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		@foreach ($a as $show)
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-success">
					<div class="panel-heading">
						{{$show->election_name}}
					</div>
					<div class="panel-body">
						<!-- First candidate-->
						<div class="row">
							<div class="col-md-3">
							<img src="{{$show->pic1}}" class="img-rounded" alt="Cinque Terre" width="140px"; height="140px"; style="margin-top: 15%; margin-left: 35px;">
													
							</div>
							<form>
								<div class="form-horizontal col-md-7">	
		                                <!-- Name-->
									    <div class="form-group">
											<label class="col-md-2 control-label" for="email">Name:</label>
											<div class="col-md-8" style="margin-top: 6px;">
												<b>{{$show->can1}}</b>
											</div>
										</div>									
																		
										<!-- Won -->
										<div class="form-group">
											<label class="col-md-2 control-label" for="message">Email:</label>
											<div class="col-md-8" style="margin-top: 6px;">
												<b>{{$show->email1}}</b>
											</div>
										</div>
		                                <!-- Lost -->
									
		                                <!-- Phone Number -->
										<div class="form-group">
											<label class="col-md-2 control-label" for="message">Bio:</label>
											<div class="col-md-8" style="margin-top: 6px;">
												<b>{{$show->bio1}}</b>
											</div>
										</div>
																											
								</div>
								<!-- Form actions -->
								<div class="col-md-2" style="margin-top: 5%;">
									<a href="/count/{{$show->id}}/vote1"><button type="button" class="btn btn-md btn-primary">Vote</button></a>
								</div>
							</form>
						</div><!-- close row -->
						<hr>
							<div class="row">
							<div class="col-md-3">
							<img src="{{$show->pic2}}" class="img-rounded" alt="Cinque Terre" width="140px"; height="140px"; style="margin-top: 15%; margin-left: 35px;">
													
							</div>
							<form>
								<div class="form-horizontal col-md-7">	
		                                <!-- Name-->
									    <div class="form-group">
											<label class="col-md-2 control-label" for="email">Name:</label>
											<div class="col-md-8" style="margin-top: 6px;">
												<b>{{$show->can2}}</b>
											</div>
										</div>									
																		
										<!-- Won -->
										<div class="form-group">
											<label class="col-md-2 control-label" for="message">Email:</label>
											<div class="col-md-8" style="margin-top: 6px;">
												<b>{{$show->email2}}</b>
											</div>
										</div>
		                                <!-- Lost -->
									
		                                <!-- Phone Number -->
										<div class="form-group">
											<label class="col-md-2 control-label" for="message">Bio:</label>
											<div class="col-md-8" style="margin-top: 6px;">
												<b>{{$show->bio2}}</b>
											</div>
										</div>
																											
								</div>
								<!-- Form actions -->
								<div class="col-md-2" style="margin-top: 5%;">
									<a href="/count/{{$show->id}}/vote2"><button type="button" class="btn btn-md btn-primary">Vote</button></a>
								</div>
							</form>
						</div><!-- close row -->
						<hr>


						<div class="row">
							<div class="col-md-3">
							<img src="{{$show->pic3}}" class="img-rounded" alt="Cinque Terre" width="140px"; height="140px"; style="margin-top: 15%; margin-left: 35px;">
													
							</div>
							<form>
								<div class="form-horizontal col-md-7">	
		                                <!-- Name-->
									    <div class="form-group">
											<label class="col-md-2 control-label" for="email">Name:</label>
											<div class="col-md-8" style="margin-top: 6px;">
												<b>{{$show->can3}}</b>
											</div>
										</div>									
																		
										<!-- Won -->
										<div class="form-group">
											<label class="col-md-2 control-label" for="message">Email:</label>
											<div class="col-md-8" style="margin-top: 6px;">
												<b>{{$show->email3}}</b>
											</div>
										</div>
		                                <!-- Lost -->
									
		                                <!-- Phone Number -->
										<div class="form-group">
											<label class="col-md-2 control-label" for="message">Bio:</label>
											<div class="col-md-8" style="margin-top: 6px;">
												<b>{{$show->bio3}}</b>
											</div>
										</div>
																											
								</div>
								<!-- Form actions -->
								<div class="col-md-2" style="margin-top: 5%;">
									<a href="/count/{{$show->id}}/vote3"><button type="button" class="btn btn-md btn-primary">Vote</button></a>
								</div>
							</form>
						</div><!-- close row -->
						<hr>
							@endforeach

						<!-- second Candidate-->
						
								<!-- Form actions -->
								
							</form>
						</div><!-- close row -->	
					</div><!-- panel-body -->
				</div><!-- panel -->
			</div><!-- col -->
		</div><!--/.row-->
		
		
		
		
		
	</div>	<!--/.main-->
	  
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>

</body>
</html>
