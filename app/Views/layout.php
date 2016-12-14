<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
	<link rel="stylesheet" href="<?= $this->assetUrl('vendor/bootstrap/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('vendor/font-awesome/css/font-awesome.min.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">

	
</head>
<body>
	
		<header>
			
				<div class="row">
					<div class="col-xs-12 col-md-3 ">
						<img class="logo img-responsive" src="<?= $this->assetUrl('img/baby-periph-logo.png') ?>" alt="">
					</div>
					<div class="col-xs-12 col-md-3 ">
						<img class="titre1 img-responsive" src="<?= $this->assetUrl('img/Baby-letters-logo.png') ?>" alt="">
					</div>
					<div class="col-xs-12 col-md-3 ">
						<img class="titre2 img-responsive" src="<?= $this->assetUrl('img/Periph-letters-logo.png') ?>" alt="">
					</div>
				</div>
			</div>
		</header>

		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
		</footer>
	
</body>
</html>