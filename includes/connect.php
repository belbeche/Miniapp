<?php 
try {
	$dbh = new PDO('mysql:host=localhost;dbname=quiztime','root','');
} catch (PDOException $e) {
	echo 'Erreur !:' . $e->getMessage(). "<br/>";
}
?>



