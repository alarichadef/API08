<?php
require_once('connexionBDD.php');

$requete = $pdo->prepare('SELECT id,date,page, titre, contenu_resume FROM 2016_articles ORDER BY date DESC LIMIT 3');
$requete->execute();
?>

<div class="col-md-12 col-lg-12 margin_bottom background_grey padding_bottom">
	<div class="padding_top col-md-offset-2 col-md-8 actus">
		<br>
		<h2 class="text-center orange">Actualités</h2>
		<br>
<?php
while($donnees = $requete->fetchObject()) {
	if($donnees->page == 'g')
		$link = "gala.php#".$donnees->id;
		else
		$link = "utceenne.php#".$donnees->id;
?>
						<div class="row text-center margin_bottom">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h3><a = href = <?php echo $link;?> class = "orange"> <?php echo $donnees->titre; ?></a></h3>
						<p class="help-block"><?php echo $donnees->date; ?></p>
						<p><?php echo $donnees->contenu_resume; ?> </p>
						</div>
					</div>

<?php
}
?>

</div>
</div>
