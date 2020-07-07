<!DOCTYPE html>
<html>
<head>
	<title>Boppo Technologies </title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Fa Fa ICon -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	<style type="text/css">
		.border_black{
			border: 1px solid;
		}
		
		form label {
		  display: inline-block;
		  width: 100px;
		}

		form div {
		  margin-bottom: 10px;
		}

		.error {
		  color: red;
		  margin-left: 5px;
		}

		label.error {
		  display: inline;
		}
</style>
	</style>
</head>
<body>
	<div class="container-fluid"> 	
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">

		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">Boppo Technologies</a>
		    </div>
		    
		    <ul class="nav navbar-nav">
		      <li class="active"><a href="<?php echo base_url('dashboard'); ?>">All Users</a></li>
		      <li><a href="<?php echo base_url('register'); ?>">Add User</a></li>
		    </ul>
		  </div>
		</nav>
