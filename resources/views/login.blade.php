<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="container">
		<div class="row">
		<div class="panel panel-default">
					<div class="panel-body tabs">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#loginasvoter" data-toggle="tab">Login As Voter</a></li>
							<li><a href="#loginascandidate" data-toggle="tab">Login As Candidate</a></li>
							
						</ul>
						<div class="tab-content">
							<div class="tab-pane fade in active" id="loginasvoter">
								<div class="row">
									<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
										<div class="login-panel panel panel-default">
											<div class="panel-heading">Login As Voter</div>
											<div class="panel-body">
												<form role="form" action="/checkvoter" method="post">
													@csrf
													<fieldset>
														<div class="form-group">
															<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
														</div>
														<div class="form-group">
															<input class="form-control" placeholder="Password" name="password" type="password" value="">
														</div>
														<div class="checkbox">
															<label>
																<input name="remember" type="checkbox" value="Remember Me">Remember Me
															</label>
														</div>
														<button type="submit" class="btn btn-primary">Login</button>
													</fieldset>
												</form>
											</div>
										</div>
									</div><!-- /.col-->
								</div><!-- /.row -->	
							</div>
							<div class="tab-pane fade" id="loginascandidate">
								<div class="row">
									<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
										<div class="login-panel panel panel-default">
											<div class="panel-heading">Login As Candidate</div>
											<div class="panel-body">
												<form role="form" action="/checkcandidate" method="post">
													@csrf
													<fieldset>
														<div class="form-group">
															<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
														</div>
														<div class="form-group">
															<input class="form-control" placeholder="Password" name="password" type="password" value="">
														</div>
														<div class="checkbox">
															<label>
																<input name="remember" type="checkbox" value="Remember Me">Remember Me
															</label>
														</div>
														<button type="submit" class="btn btn-primary" >Login</button>
													</fieldset>
												</form>
											</div>
										</div>
									</div><!-- /.col-->
								</div><!-- /.row -->
							</div>
							
						</div>
					</div>
				</div><!--/.panel-->
	</div>
	</div>
	
		
	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
