<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style>
		aside {
			background-color: #1c2239;
			color: white;
			height: 100%;
			position: fixed;
			left: 0;
			top: 0;
			overflow-x: hidden;
			padding-top: 20px;
		}

		aside a {
			color: #f1f1f1;
			display: block;
			padding: 10px;
			text-decoration: none;
		}

		aside a:hover {
			background-color: #0c1323;
			color: #f1f1f1;
		}

		#main {
			margin-left: 250px;
			margin-top: 80px;
			padding: 0px 10px;
		}

		.search-form {
			display: flex;
			align-items: center;
			width: 500px;
			margin-right: 20px;
		}

		.search-input {
			flex: 1;
			padding: 10px;
			font-size: 16px;
			border: none;
			background: #f1f1f1;
		}

		.search-btn {
			padding: 10px 20px;
			font-size: 16px;
			border: none;
			background: #2196F3;
			color: white;
			cursor: pointer;
		}

		.search-btn:hover {
			background-color: #0c7dda;
		}

		.notification-icon {
			position: relative;
			display: inline-block;
			margin-right: 20px;
			cursor: pointer;
		}

		.notification-badge {
			position: absolute;
			top: -10px;
			right: -10px;
			background-color: red;
			color: white;
			border-radius: 50%;
			padding: 5px 10px;
		}
	</style>
</head>
<body>

	<aside>
		<a href="#">Dashboard</a>
		<a href="#">Orders</a>
		<a href="#">Customers</a>
		<a href="#">Reports</a>
	</aside>

	<div id="main">
		<nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top">
			<form class="search-form">
				<input type="text" class="search-input" placeholder="Search">
				<button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
			</form>
			<div class="notification-icon">
				<i class="fa fa-bell"></i>
				<span class="notification-badge">3</span>
			</div>
			<div class="dropdown">
				<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
					User Profile
				</button>
				<div class="
