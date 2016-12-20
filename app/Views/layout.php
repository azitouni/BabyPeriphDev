<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>BabyPeriph-Puériculture </title>
	<link href="<?= $this->assetUrl('img/baby-periph-icon.png') ?>" rel="icon">

	<link href="<?= $this->assetUrl('vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
	
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
</head>
<body>

<div class="container-fluid">

		<header class="container-fluid ">
			

		<div class="row banniere">
			<div class="col-xs-offset-4 col-xs-8 col-sm-4 col-sm-offset-8 col-md-3 col-md-offset-9  ">
				<ul class="bouton1 ">
				<?php
					if (!isset($_SESSION['user'])) {
						echo'<li class="item2"><a href="'.$this->url('default_connexion').'">Connexion </a></li>
						<li class="item2"><a href="'.$this->url('default_inscription').'">Inscription</a></li>';
					}
					else{
					echo '<li class="item2"> Bienvenue ' .$_SESSION['user']['userName']. '<img class="img-responsive img-avatar" src="' .$this->assetUrl('img/avatar/' .$_SESSION['user']['avatar'] ).'" alt="" ></li>

											<li class="item2"><a href="' .$this->url('default_deconnexion') .'"  class="">
											<span class="glyphicon glyphicon-off"></span> Déconnexion</a></li>';
						}
				?>
				</ul>
			</div>
		</div>

		<div class="row banniere">
			<div class="col-xs-offset-1 col-xs-10  col-md-8 col-md-offset-2 logo"></div>
		</div>
		<div class="row ">
			<nav class="navbar navbar-default">
				<div class="container-fluid menu">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo $this->url('default_home'); ?>">Acceuil</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

						<ul class="nav navbar-nav main-menu">
							<li class="nav-item"><a href="<?php echo $this->url('Annonce_allAnnonce', ["theme" => "location"]); ?>">Location</a></li>
							<li class="nav-item"><a href="<?php echo $this->url('Annonce_allAnnonce', ["theme" => "vente"]); ?>">Vente</a></li>
							<li class="nav-item"><a href="<?php echo $this->url('Annonce_allAnnonce', ["theme" => "service"]); ?>">Services</a></li>
							<li class="nav-item"><a href="<?php
							if (!isset($_SESSION['user'])) {
								echo '' .$this->url('default_connexion') .'';
							}
							else{
								echo '' .$this->url('Annonce_index') .'';
							}
							?>">Déposer une annonce</a></li>
							<?php if (isset($_SESSION['user'])) {
								echo '<li class="nav-item"><a href="' .$this->url('Annonce_myAnnonce') .'">Mes annonces</a></li>';
							}
							?>
							<li class="nav-item inline">
								<form class="" action="<?php echo $this->url('Annonce_search'); ?>" method="post">
									<div class="row">
										<div class="col-md-9">
											<input type="text" id="" class="form-control" placeholder="" id="searchAnnonce" name="searchAnnonce">
										</div>
										<div class="col-md-3">
											<button type="submit" class="btn btn-default" id="btnSearch"><span class="glyphicon glyphicon-search"></span> Rechercher</button>
										</div>
									</div>
								</form>
							</li>

							
						</ul>
							<form class="navbar-form navbar-right" role="search">
							  <div class="form-group">
							    <input type="text" class="form-control" placeholder="Search">
							  </div>
							  <button type="submit" class="btn btn-default">Submit</button>
						</form>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</div>
	</header>


	<section class="container">
			<div class="alert alert-warning titre" >
  			<h1><?= $this->e($title) ?></h1>
  			</div>
		<?= $this->section('main_content') ?>
	</section>

	
	<footer>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-md-2 col-md-offset-2 col-sm-6 footer-nav">
					<h3 class="">Informations</h3>
					<ul>
						<li><a href="">Paiement sécurisé</a></li>
						<li><a href="">Programme fidélité</a></li>
						<li><a href="">Nos partenaires</a></li>
						<li><a href="">Questions fréquentes</a></li>
					</ul>
				</div>
				<div class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-md-3 col-sm-6 footer-nav">
					<h3 class="">A propos</h3>
					<ul>
						<li><a href="">Qui sommes nous ?</a></li>
						<li><a href="">Avis clients</a></li>
						<li><a href="">Mentions légales</a></li>
						<li><a href="">Conditions générales</a></li>
						<li><a href="">Contact</a></li>
						<li><a href="">FAQ</a></li>
						<li><a href="">Plan du site</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-md-3 footer-nav text-center">
					<h3 class="news">Newsletter</h3>
					<p class="news">Inscrivez-vous et recevez des offres exclusives !</p>
					<form class="">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">@</span>
							<input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
						</div>
						<div class="">
							<input class="btn btn-default bouton-news" type="submit" name="">
						</div>
					</form>
					<br>
					<ul class="list-inline">
						<li>
							<a href="https://www.facebook.com/gino.robertot" title="Suivez moi sur Facebook" target="_blank"><img class="img-taille" src="<?= $this->assetUrl('img/facebook.png') ?>" alt=""></a>
						</li>
						<li>
							<a href="#"><img class="img-taille" src="<?= $this->assetUrl('img/google plus.png') ?>" alt=""></a>
						</li>
						<li>
							<a href="#"><img class="img-taille" src="<?= $this->assetUrl('img/linkdin.png') ?>" alt="" target="_blank"></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<script src="<?= $this->assetUrl('js/jquery-3.1.1.min.js') ?>"></script>
	<script src="<?= $this->assetUrl('js/bootstrap.min.js') ?>"></script>

</body>
</html>
