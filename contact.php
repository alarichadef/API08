<?php
function verifEmail($email) {
	if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
		return false;
	} else {
		return true;
	}
}

if(!verifMail($_POST['email'])) {
	echo 'Format du mail incorrect.';
	die();
}

if(isset($_POST['message']) && !empty($_POST['message'])) {

	$headers  = 'MIME-Version: 1.0' . "\n";
	$headers .= 'Content-type: text/html; charset=ISO-8859-1' . "\n";
	$headers .= 'Reply-To: etuville@assos.utc.fr' . "\n";
	$headers .= 'From: "Etuville"<etuville@assos.utc.fr>' . "\n";
	$headers .= 'Delivered-to: ' . $_POST['email'] . "\n\n";

	$message  = '<h1></h1><br><br>';
	$message .= '<b>Email : <b>' . $_POST['email'] . '<br><br>';
	$message .= '<b>Message : <b><br>' . $_POST['message'] . '<br>';

	if(mail($_POST['email'], "[SITE ASSO] Demande de contact", $message, $headers)) {
		echo 'Votre message a bien été envoyé ';
	} else {
		echo "Votre message n'a pas pu être envoyé";
	}
}
?>
