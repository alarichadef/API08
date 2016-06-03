<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Etuville - L'Utcéenne</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="generator" content="Mobirise v2.11.1, mobirise.com">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="images/favicon.png">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
	<link rel="stylesheet" href="assets/animate.css/animate.min.css">
	<link rel="stylesheet" href="assets/mobirise/css/style.css">
	<link rel="stylesheet" href="assets/mobirise-gallery/style.css">
	<link rel="stylesheet" href="assets/mobirise-slider/style.css">
	<link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
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
	<!-- Contenu -->
	<div class="container">
		<div class="col-md-offset-2 col-md-8 margin_top">
			<?php include('utceenne_pres.php');?>
			<div class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/w32QeVhowpI"></iframe>
			</div>
		</div>
	</div>

<?php
require_once('connexionBDD.php');

$requete = $pdo->prepare('SELECT id,date,video, titre, contenu_long FROM 2016_articles WHERE page="u" ORDER BY date DESC LIMIT 5');
$requete->execute();
?>
	<hr class = "margin_bottom margin_top">
		<div class="container">
			<a name="articles"></a>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
<?php
while($donnees = $requete->fetchObject()) {
?>
				<a name = <?php echo $donnees->titre; ?> </a>
					<article>
						<h1 class="orange text-center"><?php echo $donnees->titre; ?></h1>
						<hr class = "margin_bottom margin_top">
						<?php echo $donnees->contenu_long; ?>
						<hr class = "margin_bottom margin_top">
								<div class="embed-responsive embed-responsive-16by9">
											<iframe class="embed-responsive-item" src="<?php echo $donnees->video ?>"></iframe>
								</div>
						<hr class = "myhred">
					</article>
<?php
}
?>
				</div>
			</div>
		</div>
	<hr>
	<section class="mbr-gallery mbr-section mbr-section--no-padding" id="gallery1-3" style="background-color: rgb(76, 105, 114);">
	    <!-- Gallery -->
	    <div class=" mbr-gallery-layout-default">
	        <div>
	            <div class="row mbr-gallery-row no-gutter">
	                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mbr-gallery-item">
	                    <a href="#lb-gallery1-3" data-slide-to="0" data-toggle="modal">
	                        <img alt="" src="assets/images/etuville.jpg">
	                        <span class="icon glyphicon glyphicon-zoom-in"></span>
	                    </a>
	                </div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mbr-gallery-item">
	                    <a href="#lb-gallery1-3" data-slide-to="1" data-toggle="modal">
	                        <img alt="" src="assets/images/etuville8.jpg">
	                        <span class="icon glyphicon glyphicon-zoom-in"></span>
	                    </a>
	                </div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mbr-gallery-item">
	                    <a href="#lb-gallery1-3" data-slide-to="2" data-toggle="modal">
	                        <img alt="" src="assets/images/etuville2.jpg">
	                        <span class="icon glyphicon glyphicon-zoom-in"></span>
	                    </a>
	                </div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mbr-gallery-item">
	                    <a href="#lb-gallery1-3" data-slide-to="3" data-toggle="modal">
	                        <img alt="" src="assets/images/etuville3.jpg">
	                        <span class="icon glyphicon glyphicon-zoom-in"></span>
	                    </a>
	                </div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mbr-gallery-item">
	                    <a href="#lb-gallery1-3" data-slide-to="4" data-toggle="modal">
	                        <img alt="" src="assets/images/etuville4.jpg">
	                        <span class="icon glyphicon glyphicon-zoom-in"></span>
	                    </a>
	                </div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mbr-gallery-item">
	                    <a href="#lb-gallery1-3" data-slide-to="5" data-toggle="modal">
	                        <img alt="" src="assets/images/etuville5.jpg">
	                        <span class="icon glyphicon glyphicon-zoom-in"></span>
	                    </a>
	                </div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mbr-gallery-item">
	                    <a href="#lb-gallery1-3" data-slide-to="6" data-toggle="modal">
	                        <img alt="" src="assets/images/etuville6.jpg">
	                        <span class="icon glyphicon glyphicon-zoom-in"></span>
	                    </a>
	                </div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mbr-gallery-item">
	                    <a href="#lb-gallery1-3" data-slide-to="7" data-toggle="modal">
	                        <img alt="" src="assets/images/etuville7.jpg">
	                        <span class="icon glyphicon glyphicon-zoom-in"></span>
	                    </a>
	                </div>
	            </div>
	        </div>
	        <div class="clearfix"></div>
	    </div>

	    <!-- Lightbox -->
	    <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery1-3">
	        <div class="modal-dialog">
	            <div class="modal-content">
	                <div class="modal-body">
	                    <ol class="carousel-indicators">
	                        <li data-app-prevent-settings="" data-target="#lb-gallery1-3" class=" active" data-slide-to="0"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-3" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-3" data-slide-to="2"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-3" data-slide-to="3"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-3" data-slide-to="4"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-3" data-slide-to="5"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-3" data-slide-to="6"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-3" data-slide-to="7"></li>
	                    </ol>
	                    <div class="carousel-inner">
	                        <div class="item active">
	                            <img alt="" src="assets/images/etuville.jpg">
	                        </div><div class="item">
	                            <img alt="" src="assets/images/etuville8.jpg">
	                        </div><div class="item">
	                            <img alt="" src="assets/images/etuville2.jpg">
	                        </div><div class="item">
	                            <img alt="" src="assets/images/etuville3.jpg">
	                        </div><div class="item">
	                            <img alt="" src="assets/images/etuville4.jpg">
	                        </div><div class="item">
	                            <img alt="" src="assets/images/etuville5.jpg">
	                        </div><div class="item">
	                            <img alt="" src="assets/images/etuville6.jpg">
	                        </div><div class="item">
	                            <img alt="" src="assets/images/etuville7.jpg">
	                        </div>
	                    </div>
	                    <a class="left carousel-control" role="button" data-slide="prev" href="#lb-gallery1-3">
	                        <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
	                        <span class="sr-only">Previous</span>
	                    </a>
	                    <a class="right carousel-control" role="button" data-slide="next" href="#lb-gallery1-3">
	                        <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
	                        <span class="sr-only">Next</span>
	                    </a>

	                    <a class="close" href="#" role="button" data-dismiss="modal">
	                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
	                        <span class="sr-only">Close</span>
	                    </a>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>

	<!-- /Contenu -->
	<!-- Pied de page -->
	<?include('copyright.php');?>
	<!-- /Pied de page -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="assets/web/assets/jquery/jquery.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/smooth-scroll/SmoothScroll.js"></script>
	<script src="assets/jarallax/jarallax.js"></script>
	<script src="assets/masonry/masonry.pkgd.min.js"></script>
	<script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
	<script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
	<script src="assets/mobirise/js/script.js"></script>
	<script src="assets/mobirise-gallery/script.js"></script>
</body>
</html>
