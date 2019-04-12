<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script> e3A	
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
			
			
			<li class="active"><a href="/default.admin"><em class="fa fa-dashboard">&nbsp;</em> Admin-Dashboard</a></li>
			
			<li><a href="/login"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		
			
		

		<!-- New election -->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-warning">
					<div class="panel-heading">
						Coming Up Election Date
					</div>
					<div class="panel-body">		
						<!-- Name-->
						@foreach($newelection as $shownewelection)
						<div class="row">
							<div class="col-md-3 col-sm-3 ">
											<b>{{$shownewelection->name}}</b>			
							</div>
							
								<div class="form-horizontal col-md-7 col-sm-7">	
		                                <!-- Name-->
									    <div class="form-group">
											<label class="col-md-2 col-sm-2 control-label" style="margin-top: -10px;">Date:</label>
											<div class="col-md-8 col-sm-8" style="margin-top: -3px;">
												<b>{{$shownewelection->date}}</b>
											</div>
										</div>																				
								</div>
								<div class="col-ml-2">
									<a href="#" ><em class="fa fa-lg fa-close"></em></a>
								</div>
						</div><!-- close row -->
						
						<hr>
                         
                        @endforeach

					</div><!-- panel-body -->
				</div><!-- panel -->
			</div>		
		</div><!--/.row-->

        <!-- Older Election Result -->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-success">
					<div class="panel-heading">
						Older Elections Result
					</div>
					<div class="panel-body">
						<!-- second Candidate-->
						@foreach($olderelection as $showolderelection)
						<div class="row">							
							<div class="col-md-3">								
								<label style="margin-top: 15%;">{{$showolderelection->name}}</label>
							</div>
							
								<div class="form-horizontal col-md-9">	
		                                <!-- Name-->
									    <div class="form-group">
											<label class="col-md-3 control-label" for="email">Winner Name:</label>
											<div class="col-md-9" style="margin-top: 6px;">
												<b>{{$showolderelection->winnername}}</b>
											</div>
										</div>									
																		
										<!-- Votes -->
										<div class="form-group">
											<label class="col-md-3 control-label" for="message">Votes:</label>
											<div class="col-md-9" style="margin-top: 6px;">
												<b>{{$showolderelection->votes}} votes</b>
											</div>
										</div>
		                                
		                                <!-- Bio -->
										<div class="form-group">
											<label class="col-md-3 control-label" for="message">Bio:</label>
											<div class="col-md-9" style="margin-top: 6px;">
												<b>{{$showolderelection->bio}}</b>
											</div>
										</div>														
									</div>
								
							
						</div><!-- close row -->
						<hr>
						@endforeach
							
					</div><!-- panel-body -->
				</div><!-- panel -->
			</div>		
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-info">
					<div class="panel-heading">
						ADD Candidate
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<form class="form-horizontal" action="/insertcandidate" method="post">
							{{csrf_field()}}
							<fieldset>
								<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Name:</label>
									<div class="col-md-9">
										<input id="name" name="name" type="text" placeholder="Your name" class="form-control">
									</div>
								</div>
							
								<!-- Email input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">E-mail:</label>
									<div class="col-md-9">
										<input id="email" name="email" type="text" placeholder="Your email" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">Password:</label>
									<div class="col-md-9">
										<input id="password" name="password" type="password" placeholder="Your password" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">DOB:</label>
									<div class="col-md-9">
										<input id="dob" name="dob" type="text" placeholder="Your DOB" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">Gender</label>
									<div class="col-md-9">
										<input id="gender" name="gender" type="text" placeholder="Your gender" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">Number</label>
									<div class="col-md-9">
										<input id="number" name="number" type="number" placeholder="Your number" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">Pic</label>
									<div class="col-md-9">
										<input id="pic" name="pic" type="text" placeholder="Your pic" class="form-control">
									</div>
								</div>
								
								<!-- Message body -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="message">Bio:</label>
									<div class="col-md-9">
										<textarea class="form-control" id="message" name="bio" placeholder="Please enter your Bio here..." rows="5"></textarea>
									</div>
								</div>
								
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<button type="submit" class="btn btn-default btn-md pull-right">ADD</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div><!-- panel-body-->
				</div><!-- panel-->
			</div><!-- col-->
		

			<div class="col-md-6">
				<div class="panel panel-info">
					<div class="panel-heading">
						Add Voter
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<form class="form-horizontal" action="/insertvoter" method="post">
								{{csrf_field()}}
							<fieldset>
								<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Name:</label>
									<div class="col-md-9">
										<input id="name" name="name" type="text" placeholder="Your name" class="form-control">
									</div>
								</div>
							
								<!-- Email input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">E-mail:</label>
									<div class="col-md-9">
										<input id="email" name="email" type="text" placeholder="Your email" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">password:</label>
									<div class="col-md-9">
										<input id="email" name="password" type="text" placeholder="Your email" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">DOB:</label>
									<div class="col-md-9">
										<input id="text" name="dob" type="text" placeholder="Your DOB" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">Gender</label>
									<div class="col-md-9">
										<input id="email" name="gender" type="text" placeholder="Your gender" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">Number</label>
									<div class="col-md-9">
										<input id="email" name="number" type="number" placeholder="Your number" class="form-control">
									</div>
								</div>
								
								<!-- Message body -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="message">PIC:</label>
									<div class="col-md-9">
										<textarea class="form-control" id="message" name="pic" placeholder="Please enter your Bio here..." rows="5"></textarea>
									</div>
								</div>
								
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<button type="submit" class="btn btn-default btn-md pull-right">ADD</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div><!-- panel body-->
				</div><!-- panel-->
			</div><!--col-->
		</div>	<!-- row-->


		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-info">
					<div class="panel-heading">
						Delete Candidate
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<form class="form-horizontal" action="deletecandidate" method="post">
							<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
							<fieldset>
								<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Name:</label>
									<div class="col-md-9">
										<input id="name" name="name" type="text" placeholder="Your name" class="form-control">
									</div>
								</div>
							
								<!-- Email input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">E-mail:</label>
									<div class="col-md-9">
										<input id="email" name="email" type="text" placeholder="Your email" class="form-control">
									</div>
								</div>
								
								
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<button type="submit" class="btn btn-default btn-md pull-right">Delete</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div><!-- panel-body-->
				</div><!-- panel-->
			</div><!-- col-->
		

			<div class="col-md-6">
				<div class="panel panel-info">
					<div class="panel-heading">
						Delete Voter
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<form class="form-horizontal" action="/deletevoter" method="post">
						<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
							<fieldset>
								<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Name:</label>
									<div class="col-md-9">
										<input id="name" name="name" type="text" placeholder="Your name" class="form-control">
									</div>
								</div>
							
								<!-- Email input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">E-mail:</label>
									<div class="col-md-9">
										<input id="email" name="email" type="text" placeholder="Your email" class="form-control">
									</div>
								</div>
								
								
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<button type="submit" class="btn btn-default btn-md pull-right">Delete</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div><!-- panel body-->
				</div><!-- panel-->
			</div><!--col-->
		</div>	<!-- row-->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-info">
					<div class="panel-heading">
						Add Elections
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<form class="form-horizontal" action="/insertelection" method="post">
							{{csrf_field()}}
							<fieldset>

								<!-- Name input-->
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-md-3 control-label" for="name">Name:</label>
										<div class="col-md-9">
											<input id="name" name="name" type="text" placeholder="Your name" class="form-control">
										</div>
									</div>
							    
							    	<div class="form-group">
										<label class="col-md-3 control-label" for="email">Date:</label>
										<div class="col-md-9">
											<input id="email" name="date" type="text" placeholder="Details" class="form-control">
										</div>
									</div>
								<!-- Detail input-->
									<div class="form-group">
										<label class="col-md-3 control-label" for="message">CandidateName1:</label>
										<div class="col-md-9">
											<input id="email" name="name1" type="text" placeholder="Details" class="form-control">
										</div>
									</div>

									

									<div class="form-group">
										<label class="col-md-3 control-label" for="message">Email1:</label>
										<div class="col-md-9">
											<input id="email" name="email1" type="email" placeholder="Email1" class="form-control">
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-3 control-label" for="message">Bio1:</label>
										<div class="col-md-9">
											<input name="bio1" type="text" placeholder="Bio1" class="form-control">
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-3 control-label" for="message">pic1:</label>
										<div class="col-md-9">
											<input name="pic1" type="text" placeholder="Details" class="form-control">
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-3 control-label" for="message">CandidateName2:</label>
										<div class="col-md-9">
											<input id="email" name="name2" type="text" placeholder="Details" class="form-control">
										</div>
									</div>

									
									
									
								</div><!--col-->
								
                                <div class="col-md-6">

                                	<div class="form-group">
										<label class="col-md-3 control-label" for="message">Email2:</label>
										<div class="col-md-9">
											<input id="email" name="email2" type="email" placeholder="Email1" class="form-control">
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-3 control-label" for="message">Bio2:</label>
										<div class="col-md-9">
											<input name="bio2" type="text" placeholder="Bio1" class="form-control">
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-3 control-label" for="message">pic2:</label>
										<div class="col-md-9">
											<input name="pic2" type="text" placeholder="Details" class="form-control">
										</div>
									</div>	

									<div class="form-group">
										<label class="col-md-3 control-label" for="message">CandidateName3:</label>
										<div class="col-md-9">
											<input id="email" name="name3" type="text" placeholder="Details" class="form-control">
										</div>
									</div>

									
									<div class="form-group">
										<label class="col-md-3 control-label" for="message">Email3:</label>
										<div class="col-md-9">
											<input id="email" name="email3" type="email" placeholder="Email1" class="form-control">
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-3 control-label" for="message">Bio3:</label>
										<div class="col-md-9">
											<input name="bio3" type="text" placeholder="Bio1" class="form-control">
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-3 control-label" for="message">pic3:</label>
										<div class="col-md-9">
											<input name="pic3" type="text" placeholder="Details" class="form-control">
										</div>
									</div>

									
									
								</div>

								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<button type="submit" class="btn btn-primary btn-md pull-right">Add</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div><!-- panel body-->
				</div><!-- panel-->
			</div><!--col-->
		</div>	<!-- row-->	
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