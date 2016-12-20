
<?php $this->layout('layout', ['title' => 'Annonces']) ?>

<?php $this->start('main_content') ?>
	<h2>Liste des annonces </h2>
  <?php
  // echo '<pre>';
  // print_r($allAnnonce);
  // echo '</pre>';

  echo '<div class="row">
        <div class="panel panel-default col-md-12">
        <div class="panel-body">';
        foreach ($allAnnonce as $annonce) {
					echo '<div class="row">';

					if (isset($annonce['imagePrincipale'])) {
						echo '<div class="col-md-6"><img class="img-responsive img-annonce" src="' .$this->assetUrl('img/annonce/') .$annonce['imagePrincipale'] .'" alt=""></div>';
					}
					else {
						echo '<div class="col-md-6"><img class="img-responsive img-annonce" src="' .$this->assetUrl('img/annonce/image_indisponible.png') .'" alt=""></div>';
					}
					echo '<div class="col-md-6">
					<p><a class="annonce" href="'. $this->url('Annonce_detail', ["id" => $annonce['id']]) .'">'.$annonce['annonceName'] .'</a></p>
					<p> City : '.$annonce['annonceCity'] .' </p>
					<p> Prix : <strong>'.$annonce['prix'] .' (€)</strong> </p>
					<p> Date création : '.$annonce['dateCreation'] .'</p>
					</div>
				</div>';
				if ($allAnnonce[count($allAnnonce)-1]!=$annonce) {
					echo '<hr>';
				}
          }
  echo '    </div>
          </div>
        </div>';
   ?>
<?php $this->stop('main_content') ?>
