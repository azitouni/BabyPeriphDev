<?php $this->layout('layout', ['title' => 'Inscription']) ?>

<?php $this->start('main_content') ?>
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <form class="form-inline" enctype="multipart/form-data" action="<?= $this->url('default_traitementInscription')  ?>" method="post">
          <div class="form-group">
            <label for="nom">Nom : </label>
            <input type="text" class="form-control" id="nom" name="lastName" placeholder="John" value="">
          </div>
          <div class="form-group">
            <label for="prenom">Prénom : </label>
            <input type="text" class="form-control" id="prenom" name="firstName" placeholder=" Doe" value="">
          </div>
          <div class="form-group">
            <label for="username">Pseudo : </label>
            <input type="text" class="form-control" id="username" name='username' placeholder="JeanD">
          </div>
          <div class="form-group">
            <label for="email">Email : </label>
            <input type="text" class="form-control" id="email" name='email' placeholder="jeandoe@exemple.fr">
          </div>
          <div class="form-group">
            <label for="fichier">Avatar : </label>
            <input type="file" name="fichier" id="fichier">
          </div>
          <div class="form-group">
            <label for="adresse">Adresse : </label>
            <input type="text" class="form-control" id="adresse" name='address' >
          </div>
          <div class="form-group">
            <label for="cp">Code postal : </label>
            <input type="text" class="form-control" id="cp" name='postalCode'>
          </div>
          <div class="form-group">
            <label for="ville">Ville : </label>
            <input type="text" class="form-control" id="ville" name='city' >
          </div>
          <div class="form-group">
            <label for="tel">Numéro Téléphone : </label>
            <input type="text" class="form-control" id="phone" name='phone' >
          </div>
          <div class="form-group">
            <select name="select_type_user">
              <option value="1">Aucun</option>
              <option value="2">Premium</option>
              <option value="3">Professionnel</option>
            </select>
          </div>
          <div class="form-group">
            <label for="pwd">Mot de passe : </label>
            <input  type="password" class="form-control" id="pwd" name='password' >
          </div>

          <button type="submit" id="inscription" class="btn btn-success">S'Inscrire</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php $this->stop('main_content') ?>
