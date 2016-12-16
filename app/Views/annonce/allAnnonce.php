
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
  echo    '<div class="row">
            <div class="col-md-6"><img class="img-responsive img-annonce" src="' .$this->assetUrl('img/annonce/') .$annonce['imagePrincipale'] .'" alt=""></div>
              <div class="col-md-6">
                <p>'.$annonce['annonceName'] .'</p>
                <p> City : '.$annonce['city'] .' </p>
                <p> Prix : <strong>'.$annonce['prix'] .' (€)</strong> </p>
                <p> Date création : '.$annonce['dateCreation'] .'</p>
              </div>
            </div>
          </div>
          <hr>';
          }
  echo '    </div>
          </div>
        </div>';
   ?>
<?php $this->stop('main_content') ?>
