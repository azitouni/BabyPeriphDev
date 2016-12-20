<?php $this->layout('layout', ['title' => 'Ajout annonce']) ?>

<?php $this->start('main_content') ?>
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <form class="form-inline" enctype="multipart/form-data" action="<?= $this->url('annonce_traitementAnnonce')  ?>" method="post">
          <div class="form-group">
            <label for="nom">titre : </label>
            <input type="text" class="form-control" id="nom" name="name" required>
          </div>
          <div class="form-group">
            <label for="desc">Description : </label>
            <textarea class="form-control" id="desc" name="desc" rows="8" cols="80" required></textarea>
          </div>
          <div class="form-group">
            <label for="prix">Prix (€) : </label>
            <input type="text" class="form-control" id="prix" name='prix' required>
          </div>
          <div class="form-group">
            <label for="duree">Durée (facultatif) : </label>
            <input type="text" class="form-control" id="duree" name='duree'>
          </div>
          <div class="form-group">
            <select name="select_type_annonce">
              <option value="1">Location</option>
              <option value="2">Vente</option>
              <option value="3">Service</option>
              <option value="4">Autres</option>
            </select>
          </div>
          <div class="form-group">
            <label for="fichier">Image principale : </label>
            <input type="file" class="picture" accept="image/bmp,image/gif,image/jpeg,image/png,image/x-ms-bmp" name="fichier" id="fichier">
          </div>
          <div class="form-group">
            <label for="adresse">Adresse : </label>
            <input type="text" class="form-control" id="adresse" name='address' required>
          </div>
          <div class="form-group">
            <label for="ville">Ville : </label>
            <input type="text" class="form-control" id="ville" name='city' required>
          </div>

          <button type="submit" id="valider" class="btn btn-success">Valider</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php $this->stop('main_content') ?>
