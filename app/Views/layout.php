<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title; ?></title>
	<link href="img/baby.png" rel="icon">
	<link rel="stylesheet" href="<?= $this->assetUrl('vendor/bootstrap/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('vendor/font-awesome/css/font-awesome.min.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
</head>
<body>
	<header class="container-fluid">
		
		<div class="row banniere">
			<div class="col-xs-offset-4 col-xs-8 col-sm-4 col-sm-offset-8 col-md-3 col-md-offset-9  ">
				<ul>
					
					<?php
					if (!isset($_SESSION['user'])) {
						echo '<li><a href="' .$this->url('default_inscription') .'" class="menu">
						<span class="glyphicon glyphicon-user"></span> Inscription</a></li>
						<li><a href="' .$this->url('default_connexion') .'"  class="menu">
						<span class="fa fa-plug"></span> Connexion</a></li>';
					}
					else{
						echo '<p class="navbar-text menu">' .$_SESSION['user']['userName'] .'</p>
						<li><a href="' .$this->url('default_deconnexion') .'"  class="menu">
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
			<nav class="navbar navbar-default menu">
				
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="">
							<a class="navbar-brand " href="<?php echo $this->url('default_home'); ?>">Accueil</a>
						</div>
						

						
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

						<ul class="nav navbar-nav main-menu col-md-8">
							
							
							<li class="nav-item espace"><a href="<?php echo $this->url('Annonce_allAnnonce', ["theme" => "location"]); ?>">Location</a></li>
							<li class="nav-item espace"><a href="<?php echo $this->url('Annonce_allAnnonce', ["theme" => "vente"]); ?>">Vente</a></li>
							<li class="nav-item espace"><a href="<?php echo $this->url('Annonce_allAnnonce', ["theme" => "service"]); ?>">Services</a></li>
							<li class="nav-item gogo"><a href="<?php
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
							
							<form class="navbar-form navbar-right">
						        <div class="form-group">
						          <input type="text" class="form-control" placeholder="Search">
						        </div>
						        <button type="submit" class="btn btn-default">Submit</button>
						      </form>	
						</ul>
					</div><!-- /.navbar-collapse -->
				<!-- /.container-fluid -->
			</nav>
		</div>
		
		
		
		
	</header>


	<section class="container">
		<?= $this->section('main_content') ?>
	</section>
	<main>
		<div class="container-fluid">
			<div class="row">
				<div class="contenu">
				</div>
			</div>
		</div>
	</main>
	<footer>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-md-3 col-md-offset-2 col-sm-6 footer-nav">
					<h3 class="">Informations</h3>
					
						<li><a href="">Paiement sécurisé</a></li>
						<li><a href="">Programme fidélité</a></li>
						<li><a href="">Nos partenaires</a></li>
						<li><a href="">Questions fréquentes</a></li>
					
				</div>
				<div class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-md-3 col-sm-6 footer-nav">
					<h3 class="">A propos</h3>
					
						<li><a href="">Qui sommes nous ?</a></li>
						<li><a href="">Avis clients</a></li>
						<li><a href="">Mentions légales</a></li>
						<li><a href="">Conditions générales</a></li>
						<li><a href="">Contact</a></li>
						<li><a href="">FAQ</a></li>
						<li><a href="">Plan du site</a></li>
					
				</div>
				<div class="col-xs-12 col-md-3 footer-nav text-center">
					<h3 class="news">Nous contacter</h3>
					
					<form class="form-group">
						<div class="input-group">
  							<span class="input-group-addon" id="basic-addon1">@</span>
  							<input type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon1">
						</div> <br>
						<textarea cols="40" rows="5" class="form-control"></textarea>
						<div class="form-group">
							<input class="btn btn-default bouton-news" type="submit" name="">
						</div>
					</form>
					
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
			<div class="row copy">
			<div class=" text-center ">

				<p>&copy; 2016 MA<img class ="img-taille" src="<?= $this->assetUrl('img/Mags_team.png') ?>"> GS Team  </p>
			 </div>
		</div>

	</footer>

	<script src="<?= $this->assetUrl('js/jquery-3.1.1.min.js') ?>"></script>
	<script src="<?= $this->assetUrl('js/bootstrap.min.js') ?>"></script>

</body>
</html>
