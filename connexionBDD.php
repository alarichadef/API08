<?php
try {
	$pdo = new PDO("mysql:host=localhost; dbname=etuville", 'etuville' , 'ptVClAby');
	//$pdo = new PDO("mysql:host=localhost; dbname=api08", 'root' , 'root');
	$pdo->exec("SET CHARACTER SET utf8");
} catch (PDOException $e) {
	echo 'Connection -not- made<br/>';
	print "Error!: " . $e->getMessage() . "<br/>";
	die();
}

/*
CREATE TABLE `2016_articles` (
	`id` INT(8) UNSIGNED NOT NULL AUTO_INCREMENT,
	`date` DATE,
	`titre` TEXT,
	`page` ENUM('g', 'u'),
	`contenu_resume` TEXT,
	`contenu_long`TEXT,
	`video`TEXT,
	PRIMARY KEY (`id`)
) AUTO_INCREMENT=1;
*/
?>
