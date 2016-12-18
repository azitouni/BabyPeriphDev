<?php $this->layout('layout', ['title' => 'Inscription']) ?>

<?php $this->start('main_content') ?>
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <form class="form-inline" enctype="multipart/form-data" action="<?= $this->url('default_traitementInscription')  ?>" method="post">
          <div class="form-group">
            <label for="nom">Nom : </label>
            <input type="text" class="form-control" id="nom" name="lastName" placeholder="John" required>
          </div>
          <div class="form-group">
            <label for="prenom">Prénom : </label>
            <input type="text" class="form-control" id="prenom" name="firstName" placeholder=" Doe" required>
          </div>
          <div class="form-group">
            <label for="username">Pseudo : </label>
            <input type="text" class="form-control" id="username" name='username' placeholder="Jean" required>
          </div>
          <div class="form-group">
            <label for="email">Email : </label>
            <input type="email" class="form-control" id="email" name='email' placeholder="jeandoe@exemple.fr" required>
          </div>
          <div class="form-group">
            <label for="fichier">Avatar : </label>
            <input type="file" class="picture" accept="image/bmp,image/gif,image/jpeg,image/png,image/x-ms-bmp" name="fichier" id="fichier">
          </div>
          <div class="form-group">
            <label for="adresse">Adresse : </label>
            <input type="text" class="form-control" id="adresse" name='address' required>
          </div>
          <div class="location">
            <div>
              <map>
                <iframe class="location-center" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21066.807664393473!2d1.8248370470001813!3d48.69877257340729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e427675a0a9031%3A0x40b82c3688c39d0!2s78610+Le+Perray-en-Yvelines!5e0!3m2!1sfr!2sfr!4v1474470538202" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              </map>
            </div>
            <div>
              <p class="location-center"> Adresse : 05 rue de l'église, 78350, Le Perray en Yvelines</p>
            </div>
          </div>
          <div class="form-group">
            <label for="cp">Code postal : </label>
            <input type="text" class="form-control" id="cp" name='postalCode' required>
          </div>
          <div class="form-group">
            <label for="ville">Ville : </label>
            <input type="text" class="form-control" id="ville" name='city' required>
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
            <input  type="password" class="form-control" id="pwd" name='password' required>
          </div>

          <button type="submit" id="inscription" class="btn btn-success">S'Inscrire</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php $this->stop('main_content') ?>
