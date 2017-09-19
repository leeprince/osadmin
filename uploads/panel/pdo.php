<?php
require('../include/init.inc.php');
try {
	$pdo = new PDO("mysql:host=127.0.0.1;dbname=jgx_massage_chair_admin",root, root);
	$pdo->exec('SET NAMES \'UTF8\'');
	$result = $pdo->query("select now()");
	$row = $result->fetch();
	var_dump($row);
}
catch (PDOException $e) {
	echo $e->getMessage();
}

?>
