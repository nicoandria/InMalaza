<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="/BO-Assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/BO-Assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>InMalaza-Admin</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="/BO-Assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="/BO-Assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="/BO-Assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="/BO-Assets/css/demo.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="/BO-Assets/css/themify-icons.css" rel="stylesheet">
</head>
<body class="container">
	
    <div class="col-md-4"></div>
        <div class="col-md-4" >
        <h3>InMalaza-Admin</h3>
        <?php if(isset($_GET['error'])&& $_GET['error']==1){ ?>
		<h5 style="color: red">Veuillez vous connecter</h5>
	<?php }else if(isset($_GET['error'])&& $_GET['error']==2){ ?>
		<h5 style="color: red">Nom d'utilisateur ou Mots de passe incorrect</h5>
	<?php } ?>
    <div class="form-group">
        <form action="/Admin/Login/connect" method="post">
	        <div class="form-group">
	            <label for="text">Nom d'utilisateur:</label>
	            <input class="form-control border-input" type="text" name="username"/>
	            <label for="text">Mots de passe:</label>
	            <input class="form-control border-input" type="password" name="password"/>
	        </div>
	        <input type="submit" class="btn btn-success btn-fill" value="Se Connecter">
        </form>
</body>
<!--   Core JS Files   -->
<script src="/BO-Assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="/BO-Assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="/BO-Assets/js/bootstrap-checkbox-radio.js"></script>

<!--  Charts Plugin -->
<script src="/BO-Assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="/BO-Assets/js/bootstrap-notify.js"></script>

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="/BO-Assets/js/paper-dashboard.js"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="/BO-Assets/js/demo.js"></script>
</html>