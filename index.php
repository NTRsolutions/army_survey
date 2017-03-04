<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Army Survey Portal</title>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet"
	href="css/font-awesome/css/font-awesome.min.css">
<link href="css/main.css" rel="stylesheet">
<!-- jQuery Version 1.11.1 -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- Custom CSS -->
<style>
body {
	padding-top: 70px;
	/* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
}
</style>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Survey Portal</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse"
				id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="#" data-toggle="modal" data-target="#survey_form">Take Survey</a></li>
					<li><a href="find_loc.php">Find a Location</a></li>
					<li><a href="#" data-toggle="modal" data-target="#adminLogin">Admin</a>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>

	<!-- Page Content -->
	<div class="container">

		<div class="row">
			<div class="col-lg-12 text-center">
				<h1>Welcome to the Station Satisfaction Index.</h1>
				<p class="lead">Check out surveys to find the best location to stay
					in!!</p>
				<ul class="list-unstyled">
					<li></li>
					<li></li>
				</ul>
				<hr>
			</div>
		</div>
		<!-- /.row -->
		<div class="row">
			<div class="col-lg-4">
				<div class="panel panel-success" style="border-color: #467347;">
					<div class="panel-heading1"></div>
					<div class="panel-body"
						style="min-height: 170px; text-align: center;">
						<i class="fa fa-pencil-square-o fa-3x" aria-hidden="true"
							style="font-size: 135px; color: #467347;"></i>
					</div>
					<div class="panel-footer">
						<button type="button" class="btn btn-primary btn-lg btn-block"
							data-toggle="modal" data-target="#survey_form">
							<i class="fa fa-hand-pointer-o" aria-hidden="true"></i> Submit
							Survey
						</button>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="panel panel-success" style="border-color: #467347;">
					<div class="panel-heading1"></div>
					<div class="panel-body"
						style="min-height: 170px; text-align: center;">
						<i class="fa fa-search fa-3x" aria-hidden="true"
							style="font-size: 135px; color: #467347;"></i>
					</div>
					<div class="panel-footer">
					<a href="find_loc.php" class="btn btn-primary btn-lg btn-block"><i class="fa fa-hand-pointer-o" aria-hidden="true"></i> Find
							Location</a>
						
					</div>
				</div>
			</div>
			<div class="col-lg-4" text-center>
				<div class="panel panel-success" style="border-color: #467347;">
					<div class="panel-heading1"></div>
					<div class="panel-body"
						style="min-height: 170px; text-align: center;">
						<i class="fa fa-user-plus fa-3x" aria-hidden="true"
							style="font-size: 135px; color: #467347;"></i>
					</div>
					<div class="panel-footer">
						<button type="button" class="btn btn-primary btn-lg btn-block" 
							data-toggle="modal" data-target="#adminLogin"
							data-whatever="@mdo">
							<i class="fa fa-hand-pointer-o" aria-hidden="true"></i> Admin
							Login
						</button>

					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- /.container -->



<?php include_once 'includes/modal1.php';?>
	<script src="js/main.js">	</script>
</body>
<!-- Modal for login -->

</html>