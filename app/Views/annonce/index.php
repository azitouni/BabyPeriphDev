
<?php $this->layout('layout', ['title' => 'Ajouter une annonce']) ?>
<?php $this->start('main_content') ?>

<section class="fond">
  <div class="container">
    <div class="row">
      <div class="col-md-4 descript">
      <p><strong>Seulement quelques secondes pour ajouter une annonce...</strong></p>
    </div>
     <div class="col-md-8  inscriptionUser-ajoutAnnonce ">
       <form enctype="multipart/form-data" action="<?php if(!isset($detailAnnonce)){echo $this->url('annonce_traitementAnnonce');} else {echo $this->url('annonce_update',['id' => $detailAnnonce['id']]); }  ?>" method="post">
          <div class="col-md-8  form-group">
            <label for="desc">titre : </label>
             <input type="text" class="form-control" id="nom" name="name" value="<?php if(isset($detailAnnonce)){echo $detailAnnonce['annonceName'];}  ?>" required>
          </div>
          <div class="col-md-8  form-group">
            <label for="desc">Description : </label>
            <textarea class="form-control" id="desc" name="desc" rows="8" cols="80" required><?php if(isset($detailAnnonce)){echo $detailAnnonce['annonceDescription'];}  ?></textarea>
          </div>
          <div class="col-md-8  form-group">
            <label for="prix">Prix (€) : </label>
            <input type="text" class="form-control" id="prix" name='prix'  value="<?php if(isset($detailAnnonce)){echo $detailAnnonce['prix'];}  ?>" required>
          </div>
          <div class="col-md-8  form-group">
            <label for="duree">Durée (facultatif) : </label>
            <input type="text" class="form-control" id="duree" name='duree'  value="<?php if(isset($detailAnnonce)){echo $detailAnnonce['dureeDuPrix'];}  ?>">
          </div>
          <div class="col-md-8  form-group">
            <select name="select_type_annonce">
              <option value="1">Location</option>
              <option value="2">Vente</option>
              <option value="3">Service</option>
              <option value="4">Autres</option>
            </select>
          </div>
          <div class="col-md-8  form-group">
            <label for="fichier">Image principale : </label>
            <input type="file" class="picture" accept="image/bmp,image/gif,image/jpeg,image/png,image/x-ms-bmp" name="fichier" id="fichier"  value="<?php if(isset($detailAnnonce)){echo $detailAnnonce['imagePrincipale'];}  ?>">
          </div>
          <div class="col-md-8 form-group">
            <label for="adresse">Adresse : </label>
            <input type="text" class="form-control" id="adresse" name='address'  value="<?php if(isset($detailAnnonce)){echo $detailAnnonce['annonceAddress'];}  ?>" required>
          </div>
          <div class="col-md-8 form-group">
            <label for="ville">Ville : </label>
            <input type="text" class="form-control" id="ville" name='city'  value="<?php if(isset($detailAnnonce)){echo $detailAnnonce['annonceCity'];}  ?>" required>
          </div>
          <div class="col-md-8 form-group">
            <label for="tel">Télephone : </label>
            <input type="text" class="form-control" id="tel" name='tel'  value="<?php if(isset($detailAnnonce)){echo $detailAnnonce['annoncePhone'];}  ?>" required>
          </div>
          <div class="col-md-8 form-group text-center smallPadding">
            <?php if (!isset($detailAnnonce)){

              echo '<button type="submit" id="validerBtn" name="validBtn" class="btn btn-lg  bouton-sinscrire"> Valider </button>';
              }
            else {
              echo '<button type="submit" id="majBtn" name="updateBtn" class="bouton-sinscrire btn btn-warning"> Mettre à jour </button>';
            } ?>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php $this->stop('main_content') ?>
