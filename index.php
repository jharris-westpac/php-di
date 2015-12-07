<?php

	/**
	 * PHP DI example using Dice https://r.je/dice.html
	 */

	require 'autoload.php';
	require 'Dice.php';

	try {
		$dice = new \Dice\Dice;

		$http 	= $dice->create('\services\http', ['api/test.json']);
		$db 	= $dice->create('\services\db');

		$tpl = [
			'http' => $http->get(),
			'db' => $db->connect()
		];
	}
	catch(Exception $e) {
		$tpl = ['error' => $e->getMessage()];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Dice DI</title>
</head>
<body>
<h1>PHP Dice DI</h1>

	<?php if($tpl['error']): ?>
		<h3 class="error"><?= $tpl['error']; ?></h3>
	<?php endif; ?>

	<ul>
		<li>HTTP: <?= $tpl['http']; ?></li>
		<li>DB: <?= $tpl['db']; ?></li>
	</ul>
</body>
</html>