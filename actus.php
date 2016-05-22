<?php
// Chargement de la page qui démarre les instances mysqli et pdo
require_once('connexionBDD.php');

$requete = $pdo->prepare('SELECT date, page, titre, contenu_resume FROM 2016_articles ORDER BY date DESC LIMIT 5');
$requete->execute();
?>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 margin_bottom background_grey padding_bottom">	
	<div class="padding_top col-md-offset-2 col-md-8 actus">
		<br>
		<h2 class="text-center orange">Actualités</h2>
		<br>

<?php
while($donnees = $requete->fetchObject()) {
?>
		<div class="row text-center margin_bottom">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h3><a href="<?php echo $donnees->page == "g" ? "gala":"utceenne"; ?>.php#articles" class="orange"><?php echo $donnees->titre; ?></a></h3>
				<p class="help-block">le <?php echo $donnees->date; ?></p>
				<p><?php echo $donnees->contenu_resume; ?></p>
			</div>
		</div>
<?php
}
?>
	</div>
</div>