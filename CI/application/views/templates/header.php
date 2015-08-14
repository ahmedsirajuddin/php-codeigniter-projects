<!DOCTYPE html>
<html>
    <head>
	<meta charset="utf-8">
	<title>Code Igniter Tutorial</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
	<link href='http://fonts.googleapis.com/css?family=NTR' rel='stylesheet' type='text/css'>
	<style>
	    p, li, a {
		font-size: 16px;
	    }

	    .footer {
		margin-top: 2%;
	    }

	    .fill {
		background-color: #b52121;
		color: white;
		font-family: "NTR";
		padding-bottom: 2%;
	    }

	    h1 {
		font-size: 5em;
	    }

	    .container-body {
		color: #b52121;
	    }

	    .custom-nav-pills > li.active > a, .custom-nav-pills > li.active > a:hover, .custom-nav-pills > li.active > a:focus {
		background-color: #d44141;
	    }

	    .custom-nav-pills > li > a:hover  {
		background-color: #8f0909;
		color: #ebd8bc;
	    }
	    
	    .custom-nav-pills > li > a:focus {
		background-color: #8f0909;
	    }


	    .custom-nav-pills > li > a {
		background-color: #8f0909;
		color: white;
	    }
	</style>
    </head>
    <body ng-app="blog">
	<div class="container-fluid">
	    <div class="row">
		<div class="col-lg-12 fill">
		    <div class="container">
			<h1>PHP Blog</h1>
			<ul class="nav nav-pills nav-stacked custom-nav-pills">
			    <li <?php if($active_menu == 'home'): ?>class="active"<?php endif; ?>><a href="/index.php"><strong>Home</strong></a></li>
			    <li <?php if($active_menu == 'blogs'): ?>class="active"<?php endif; ?>><a href="/blogs"><strong>View Blogs</strong></a></li>
			    <li <?php if($active_menu == 'create'): ?>class="active"<?php endif; ?>><a href="/blogs/create"><strong>Create a Blog</strong></a></li>
			</ul>
		    </div>
		</div>
	    </div>
	</div>

	<div class="container container-body">
