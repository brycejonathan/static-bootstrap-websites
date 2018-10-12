<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle Navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a href="#" id="sidebar-toggle" data-target="#sidebar" data-toggle="collapse">
			<i class="fa fa-navicon fa-2x py-2 p-1"></i>
		</a>

		<div class="collapse navbar-collapse" id="navbarToggler">
			<ul class="navbar-nav mr-auto mt-2 mt-md-0"></ul>

			<form class="form-inline my-2 my-lg-0">
				<input type="text" class="form-control mr-sm-2" placeholder="Search">

				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>

	<div class="container-fluid">
		<div class="row d-flex d-md-block flex-nowrap wrapper">
			<div class="col-md-3 float-left col-1 pl-0 pr-0 collapse width show" id="sidebar">
				<div class="list-group border-0 card text-center text-md-left">
					<a href="#menu-option" class="list-group-item d-inline-block collapsed" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false">
						<i class="fa fa-dashboard"></i>
						<span class="hidden-sm-down">Account</span>
					</a>

					<div class="collapse" id="menu-option">
						<a href="#" class="list-group-item" data-parent="#menu-option">Profile</a>

						<a href="#" class="list-group-item" data-parent="#menu-option">Notifications</a>

						<a href="#" class="list-group-item" data-parent="#menu-option">Messages</a>
					</div>

					<a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar">
						<i class="fa fa-film"></i>
						<span class="hidden-sm-down">Home</span>
					</a>
				</div>
			</div>
		<main class="col-md-9 float-left col px-5 pl-md-2 pt-2 main">
		