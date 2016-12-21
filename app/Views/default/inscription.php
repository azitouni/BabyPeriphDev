<?php $this->layout('layout', ['title' => 'Inscription']) ?>

<?php $this->start('main_content') ?>
<section class="fond">
  <div class="container">
    <div class="row">
    <div class="col-md-4 descript">
      <p><strong>Seulement quelques secondes pour vous inscrire...</strong></p>
      <p><strong>Promis, vous ne serez pas déçu !</strong></p>

    </div>
      <div class="col-md-8 inscriptionUser-ajoutAnnonce">
        <form  enctype="multipart/form-data" action="<?= $this->url('default_traitementInscription')  ?>" method="post">
          <div class=" inscript-icone " >
            <img class="img-responsive" src="<?= $this->assetUrl('img/inscription-icone.png') ?>" >
          </div>
          <div class="col-md-8  form-group">
            <label for="nom">Nom : </label>
            <input type="text" class="form-control" id="nom" name="lastName" placeholder="John" value="">
          </div>
          <div class="col-md-8 form-group">
            <label for="prenom">Prénom : </label>
            <input type="text" class="form-control" id="prenom" name="firstName" placeholder=" Doe" value="">
          </div>
          <div class="col-md-8 form-group">
            <label for="username">Pseudo : </label>
            <input type="text" class="form-control" id="username" name='username' placeholder="JeanD">
          </div>
          <div class="col-md-8  form-group">
            <label for="email">Email : </label>
            <input type="text" class="form-control" id="email" name='email' placeholder="jeandoe@exemple.fr">
          </div>
          <div class="col-md-8 form-group">
            <label for="fichier">Avatar : </label>
            <input type="file" name="fichier" id="fichier">
          </div>
          <div class="col-md-8 form-group hide">
            <label for="adresse">Adresse : </label>
            <input type="text" class="form-control" id="adresse" name='address' required>
          </div>
          <div class="col-md-8 form-group location ">
            <div>
              <input id="pac-input" class="controls" type="text" placeholder="Entrer votre adresse *" required>
              <div style="height:300px" id="map"></div>
            </div>
          </div>
          <div class="col-md-8 form-group hide">
            <label for="cp">Code postal : </label>
            <input type="text" class="form-control" id="cp" name='postalCode'>
          </div>
          <div class="col-md-8  form-group  hide">
            <label for="ville">Ville : </label>
            <input type="text" class="form-control" id="ville" name='city' >
          </div>
          <div class="col-md-8  form-group">
            <label for="tel">Numéro Téléphone : </label>
            <input type="text" class="form-control" id="phone" name='phone' >
          </div>
          <div class="col-md-8 form-group">
            <select name="select_type_user">
              <option value="1">Aucun</option>
              <option value="2">Premium</option>
              <option value="3">Professionnel</option>
            </select>
          </div>
          <div class="col-md-8 form-group">
            <label for="pwd">Mot de passe : </label>
            <input  type="password" class="form-control" id="pwd" name='password' >
          </div>
          <div class="col-md-8 ">
          <button type="submit" id="inscription" class="bouton-sinscrire btn-lg">S'Inscrire</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</section>

<?php $this->stop('main_content') ?>
