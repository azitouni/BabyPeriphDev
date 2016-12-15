<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>

	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
</head>
<body>
	<div class="container">
		<header>
			<h1>W :: <?= $this->e($title) ?></h1>
			<?php
				if (!isset($_SESSION['user'])) {
					echo '<li><a href="' .$this->url('default_inscription') .'" class="menu">
											<span class="glyphicon glyphicon-user"></span> Inscription</a></li>
								<li><a href="' .$this->url('default_connexion') .'"  class="menu">
																	<span class="fa fa-plug"></span> Connexion</a></li>';
					// echo 'Non authentifié ';
					// var_dump($_SESSION);
				}
				else{
					echo '<p class="navbar-text menu">' .$_SESSION['user']['userName'] .'</p>
											<li><a href="' .$this->url('default_deconnexion') .'"  class="menu">
											<span class="glyphicon glyphicon-off"></span> Déconnexion</a></li>';
						// echo 'authentifié ';
						// var_dump($_SESSION['user']['userName']);
						}
				 ?>
			<!-- <form class="" action="<?= $this->url('default_deconnexion'); ?>">
				<button type="submit" class="btn btn-danger fa fa-power-off" name="btnOff">disconnect</button>
			</form> -->
		</header>

		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
		</footer>
	</div>
</body>
</html>
