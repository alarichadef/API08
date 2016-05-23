<?php
session_start();

if(isset($_GET['deconnexion'])) {
	session_unset();
	session_destroy();
}

if(isset($_POST['id']) && isset($_POST['pass']) && $_POST['id'] == "etuville" && $_POST['pass'] == "villeetu") {
	$_SESSION['estAuthentifie'] = 1;
}

if(isset($_GET['suppr_id'])) {
	require_once('connexionBDD.php');
	$requete = $pdo->prepare('DELETE FROM 2016_articles WHERE id=:id');
	$requete->bindParam(':id', $_GET['suppr_id'], PDO::PARAM_INT);
	$requete->execute();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Etuville - Administration</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="generator" content="Mobirise v2.11.1, mobirise.com">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="images/favicon.png">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
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
		<div class="row">
			<div class="col-md-offset-2 col-md-8">
			<?php
			if(isset($_SESSION['estAuthentifie']) && $_SESSION['estAuthentifie'] == 1) {
			?>
				<br><center><h2>Envoi d'une nouvelle actualité</h2></center><br>
				<?php
				if(isset($_POST['titre'])) {
					if(!empty($_POST['titre']) && !empty($_POST['contenu_resume']) && !empty($_POST['contenu_long'])) {
						require_once('connexionBDD.php');
						$requete = $pdo->prepare('INSERT INTO 2016_articles(id, date, titre, page, contenu_resume, contenu_long) VALUES (NULL, NOW(), :titre, :page, :contenu_resume, :contenu_long)');
						$requete->bindParam(':titre', $_POST['titre'], PDO::PARAM_STR);
						$requete->bindParam(':page', $_POST['page'], PDO::PARAM_STR);
						$requete->bindParam(':contenu_resume', $_POST['contenu_resume'], PDO::PARAM_STR);
						$requete->bindParam(':contenu_long', $_POST['contenu_long'], PDO::PARAM_STR);
						$requete->execute();
						echo 'Ajouté.';
					} else {
						echo 'Tous les champs sont requis.';
					}
				}
				?>
				<form method="post" action="#">
					<div class="form-group">
						<label for="titre">Titre</label>
						<input type="text" class="form-control" id="titre" name="titre" value="<?php echo !empty($_POST['titre']) ? htmlspecialchars($_POST['titre'], ENT_QUOTES, 'UTF-8') : '' ?>" />
					</div>
					<div class="form-group">
						<label for="id">Page</label><br>
						<label class="radio-inline">
							<input type="radio" name="page" value="u"> Utceenne
						</label>
						<label class="radio-inline">
							<input type="radio" name="page" value="g"> Gala
						</label>
					</div>
					<div class="form-group">
						<label for="resume">Résumé</label>
						<input type="text" class="form-control" id="resume" name="contenu_resume" value="<?php echo !empty($_POST['contenu_resume']) ? htmlspecialchars($_POST['contenu_resume'], ENT_QUOTES, 'UTF-8') : '' ?>" />
					</div>
					<div class="form-group">
						<label for="id">Contenu</label>
						<textarea class="form-control" rows="3" id="conte" name="contenu_long"><?php echo !empty($_POST['contenu_long']) ? htmlspecialchars($_POST['contenu_long'], ENT_QUOTES, 'UTF-8') : '' ?></textarea>
					</div>
					<button type="submit" class="btn btn-action btn-lg">Poster</button>
				</form>
				<br>
				<hr>
				<br>
				<table>
					<tr>
						<th>Titre</th>
						<th>Date</th>
						<th>Page</th>
						<th>Résumé</th>
						<th></th>
					</tr>
<?php
require_once('connexionBDD.php');

$requete = $pdo->prepare('SELECT id, date, page, titre, contenu_resume FROM 2016_articles');
$requete->execute();

while($donnees = $requete->fetchObject()) {
	// Affichage de chaque ligne
	echo '<tr>
			<td>'.$donnees->titre.'</td>
			<td>'.$donnees->date.'</td>
			<td>'.($donnees->page == "g" ? "Gala":"Utcéenne").'</td>
			<td>'.$donnees->contenu_resume.'</td>
			<td><a href="admin.php?suppr_id='.$donnees->id.'">Supprimer</a></td>
		</tr>';
}
?>
				</table>
				<br>
				<hr>
				<br>
				<a href="admin.php?deconnexion" class="btn btn-action btn-lg margin_bottom pull-right">Déconnexion</a>
			<?php
			} else {
			?>
				<form method="post" action="#">
					<div class="form-group">
						<label for="id">Identifiant</label>
						<input type="text" class="form-control" id="id" name="id" />
					</div>
					<div class="form-group">
						<label for="pass">Mot de passe</label>
						<input type="password" class="form-control" id="pass" name="pass" />
					</div>
					<button type="submit" class="btn btn-action btn-lg margin_bottom">Connexion</button>
				</form>
			<?php
			}
			?>
			</div>
		</div>
	</div>
	<!-- /Contenu -->
	<!-- Pied de page -->
	<?include('copyright.php');?>
	<!-- /Pied de page -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
