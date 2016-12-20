<?php $this->layout('layout', ['title' => 'Détail annonce']) ?>

<?php $this->start('main_content') ?>


	<?php if ($detailAnnonce){ ?>
    <div class="row bottom">
    <?php  if (isset($detailAnnonce['imagePrincipale'])) {
      echo '<div class="col-md-6"><img class="img-responsive img-annonce" src="' .$this->assetUrl('img/annonce/') .$detailAnnonce['imagePrincipale'] .'" alt=""></div>';
      }
    else {
      echo '<div class="col-md-6"><img class="img-responsive img-annonce" src="' .$this->assetUrl('img/annonce/image_indisponible.png') .'" alt=""></div>';
    }
    echo '<div class="col-md-6">
    <h3>' .$detailAnnonce['annonceName'] .'</h3>
    <p> Description : </p>
    <textarea class="form-control" name="name" rows="8" cols="60" disabled>' .$detailAnnonce['annonceDescription'] .'</textarea>
    <p> Adresse : ' .$detailAnnonce['annonceAddress'] .'</p>
    <p> Ville : ' .$detailAnnonce['annonceCity'] .'</p>
    <p> Prix : <strong>'.$detailAnnonce['prix'] .' (€)</strong> </p>
    <p> Date création : '.$detailAnnonce['dateCreation'] .'</p>';

    if (isset($_SESSION['user']) && $_SESSION['user']['id']==$detailAnnonce['idUtilisateur']) {
      echo '<form class="" action="' .$this->url('annonce_updateDelete',['id' => $detailAnnonce['id'] ]) .'" method="post">
        <div class="row">
          <div class="col-md-6 text-center">
            <button type="submit" name="updateBtn" class="bouton-sinscrire btn-sm "> Modifier </button>
          </div>
          <div class="col-md-6 text-center">
            <button type="submit" name="deleteBtn" class="btn-sm  bouton-supp"> Supprimer </button>
          </div>
        </div>
      </form>';
    }

    '</div>

  </div>';
  }?>
<?php $this->stop('main_content'); ?>
