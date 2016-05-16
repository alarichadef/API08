<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Etuville - Accueil</title>

	<link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
	<link rel="manifest" href="images/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body class="home">
	<!-- Barre de navigation -->
	<?php include('header.php');?>
	<!-- /Barre de navigation -->
	<!-- Logo -->
	<?php include('logo_header.php');?>
	<!-- /Logo -->
	<!-- Carrousel d'images -->
	<?php include('caroussel.php');?>
			<a name="association"></a>
	<!-- /Carrousel d'images -->
	<!-- L'asso -->
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
		<div class="margin_bottom text-center col-md-offset-2 col-md-8">
			<?php include('asso_pres.php');?>
			<a name="utceenne"></a>
			<p class="text-center margin_bottom"><a class="btn btn-action btn-lg" role="button" href="association.php">En savoir plus</a></p>
		</div>
	</div>
    <!-- /L'asso -->
	<!-- L'UTCéenne -->
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 background_grey margin_bottom">
		<div class="padding_top col-md-offset-2 col-md-8">
			<div class="margin_bottom">
				<? include('utceenne_pres.php');?>
				<a name="gala"></a>
				<p class="text-center padding_top"><a class="btn btn-action btn-lg margin_bottom" role="button" href="utceenne.php">En savoir plus</a></p>
			</div>
		</div>
	</div>
	<!-- /L'UTCéenne -->
	<!-- Le Gala -->
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">	
		<div class="padding_top col-md-offset-2 col-md-8">
			<div class="margin_bottom">
				<?php include('gala_pres.php');?>
				<p class="text-center padding_top"><a class="btn btn-action btn-lg margin_bottom" role="button" href="gala.php">En savoir plus</a></p>
			</div>
		</div>
	</div>
	<!-- /Le Gala -->
	<!-- Actualités -->
	<?php include('actus.php');?>
	<!-- /Actualités -->
	<!-- Partenaires -->
	<?php include('partenaires.php');?>
	<!-- /Partenaires -->
	<!-- Pied de page -->
	<a name="contact"></a>
	<?php include('footer.php');?>
	<!-- /Pied de page -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
