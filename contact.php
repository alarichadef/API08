<?php
function verifEmail($email) {
	if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
		return false;
	} else {
		return true;
	}
}

if(isset($_POST['message']) && !empty($_POST['message'])) {

	if(!verifEmail($_POST['email'])) {
		header('Location: ./index.php');
		die();
	}

	$headers  = 'MIME-Version: 1.0' . "\n";
	$headers .= 'Content-type: text/html; charset=ISO-8859-1' . "\n";
	$headers .= 'Reply-To: etuville@assos.utc.fr' . "\n";
	$headers .= 'From: "Etuville"<etuville@assos.utc.fr>' . "\n";
	$headers .= 'Delivered-to: ' . $_POST['email'] . "\n\n";

	$message  = '<h1></h1><br><br>';
	$message .= '<b>Email : <b>' . $_POST['email'] . '<br><br>';
	$message .= '<b>Message : <b><br>' . $_POST['message'] . '<br>';

	mail($_POST['email'], "[SITE ASSO] Demande de contact", $message, $headers);
}

header('Location: ./index.php');
?>
