<?php
	function connexion(){
		$bdd = new PDO('mysql:host=localhost;dbname=phalcon-td0;charset=utf8', 'root', '');
		return $bdd;
	}
?>