<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php  echo base_url() ?>BO-Assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php  echo base_url() ?>BO-Assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>InMalaza-Admin</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php  echo base_url() ?>BO-Assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php  echo base_url() ?>BO-Assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="<?php  echo base_url() ?>BO-Assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php  echo base_url() ?>BO-Assets/css/demo.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="<?php  echo base_url() ?>BO-Assets/css/themify-icons.css" rel="stylesheet">
    
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>

</head>
<body>

<div class="wrapper">
	<div class="sidebar" data-background-color="white" data-active-color="danger">

	<!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

		<div class="sidebar-wrapper">
            <div class="logo">
                <a href="<?php echo base_url() ?>Admin/Articles" class="simple-text">
                    InMalaza-Admin
                </a>
            </div>

            <ul class="nav">
                <li id="articles">
                    <a href="<?php echo base_url() ?>Admin/Articles">
                        <i class="ti-text"></i>
                        <p>Articles</p>
                    </a>
                </li>
                <li id="categories">
                    <a href="<?php echo base_url() ?>Admin/Categories">
                        <i class="ti-view-list-alt"></i>
                        <p>Categories</p>
                    </a>
                </li>
                <li id="alaune">
                    <a href="<?php echo base_url() ?>Admin/Alaune">
                        <i class="ti-angle-double-up"></i>
                        <p>A La Une</p>
                    </a>
                </li>
                <li id="breakingnews">
                    <a href="<?php echo base_url() ?>Admin/BreakingNews">
                        <i class="ti-info-alt"></i>
                        <p>Breaking News</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#" id="navbar-text"></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
						<li>
                            <div class="row" style="padding-top: 20px">
                                <div class="col-md-8">
                                  <small> by  Nico ANDRIAMALALA S6 n°02B</small>
                                </div>
                                <div class="col-md-4">
                                    <a href="<?php echo base_url() ?>Admin/Deconnexion">
                                        <p>Déconnexion</p>
                                    </a>
                                </div>
                          </div>

                        </li>
                    </ul>

                </div>
            </div>
        </nav>
