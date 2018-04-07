<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Offre tous les actualités de la grande-ile du politique,faits-divers,sport ... acces à vos informations simplement" charset="utf-8">
		<meta name="keywords" content="InMalaza,news,madagascar,actualité,actu,malaza,vaovao,actu,nico,andriamalala
		<?php foreach($categories as $categorie){ 
         	echo ",".$categorie->nom; 
         } ?>" charset="utf-8">

		<title>InMalaza</title>

		<!-- Google font -->
		
		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>FO-Assets/css/bootstrap.min.css"/>

		<!-- Owl Carousel -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>FO-Assets/css/owl.carousel.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>FO-Assets/css/owl.theme.default.css" />
        <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>FO-Assets/css/core-style.css" />
        <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>FO-Assets/css/animate.css" />
        <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>FO-Assets/css/jquery-ui.min.css" />
        <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>FO-Assets/css/responsive.css" />
        <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>FO-Assets/css/pe-icon-7-stroke.css" />
        <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>FO-Assets/css/magnific-popup.css" />
        <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>FO-Assets/css/mystyle.css" />
		
		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="<?php echo base_url() ?>FO-Assets/css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>FO-Assets/css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
	
		<!-- Header -->
		<header id="header">
			<div id="nav-header">
				<div class="container">
                    <a href="<?php echo base_url() ?>Home" class="logo"><h1 style="color: white">InMalaza</h1><div style="color:grey">by ANDRIAMALALA Louison Mamy Nico s6 n°02B</div></a>
					<nav id="main-nav">
                            
						<ul class="main-nav nav navbar-nav">
							<li id="home"><a href="<?php echo base_url() ?>Home">Home</a></li>
							<?php foreach($categories as $categorie){ ?>
                                <li id="<?php echo $categorie->nom ?>"><a href="<?php echo base_url() ?>categorie/<?php echo str_replace(' ', '-', $categorie->nom) ?>-<?php echo $categorie->id ?>"><?php echo $categorie->nom ?></a></li>              
                            <?php } ?>
						</ul>
					</nav>
					<div class="button-nav">
						<div class="row">
							<div class="col-md-6">
								<a href="https://www.facebook.com/nico.andriamalala"><div id="fb"></div></a>
							</div>
							<div class="col-md-6">
								<a href="https://www.instagram.com/nicoandria/"><div id="insta"></div></a>
							</div>
						</div>
					</div>
				</div>
			</div>
            <div class="latest-news-marquee-area">
        <div class="simple-marquee-container">
            <div class="marquee">
                <ul class="marquee-content-items">
                    <?php foreach($breakingnews as $breakingnew){ 
                        $breakingnew->dateSorti = date_create_from_format('Y-m-d H:i:s', $breakingnew->dateSorti)->format('d-m-Y H:i:s'); 
                    ?>
                    <li>
                        <a href="<?php echo base_url() ?>article/<?php echo str_replace(' ', '-', $breakingnew->titre) ?>-<?php echo $breakingnew->id ?>"><span class="latest-news-time"><?php echo $breakingnew->dateSorti ?></span><?php echo $breakingnew->description ?></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
			<!-- /Nav Header -->
		</header>
		<!-- /Header -->
