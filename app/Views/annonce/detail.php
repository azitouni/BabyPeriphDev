<?php $this->layout('layout', ['title' => 'Détail annonce']) ?>

<?php $this->start('main_content') ?>


	<?php if ($detailAnnonce){ ?>
    <div class="row bottom">
    <?php  if (isset($detailAnnonce['imagePrincipale'])) {
      echo '<div class="preview col-md-6"><img class="img-responsive img-annonce" src="' .$this->assetUrl('img/annonce/') .$detailAnnonce['imagePrincipale'] .'" alt=""></div>';
      }
    else {
      echo '<div class="preview col-md-6"><img class="img-responsive img-annonce" src="' .$this->assetUrl('img/annonce/image_indisponible.png') .'" alt=""></div>';
    }
    echo '<div class="col-md-6">
    <h3>' .$detailAnnonce['annonceName'] .'</h3>
		<h5>
			<span> Ville : <span>' .$detailAnnonce['annonceCity']  .'</span>
				<button type="submit" name="locateBtn" id="locateBtn" ><i class="fa fa-map-marker text-right" aria-hidden="true"></i></button>
			</span>
		</h5>
		<h5>
			<span> Prix : <span>' .$detailAnnonce['prix'] .' (€)</span></span>
		</h5>
		<h5>
			<span> Tél : <span>' .$detailAnnonce['annoncePhone'] .'</span></span>
		</h5>
		<h6>
    <h4><strong> Description :</strong> </h4>
		<h5>' .$detailAnnonce['annonceDescription'] .'</h5>


			<span> Date création : <span>' .$detailAnnonce['dateCreation'] .'</span></span>
		</h6>
		</div>';


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
