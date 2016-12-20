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
        <form action="<?= $this->url('default_traitementInscription')  ?>" method="post">
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
          <div class="col-md-8 form-group">
            <label for="adresse">Adresse : </label>
            <input type="text" class="form-control" id="adresse" name='address' required>
          </div>
          <div class="col-md-8 form-group location ">
            <div>
              <map>
                <iframe class="location-center" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21066.807664393473!2d1.8248370470001813!3d48.69877257340729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e427675a0a9031%3A0x40b82c3688c39d0!2s78610+Le+Perray-en-Yvelines!5e0!3m2!1sfr!2sfr!4v1474470538202" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              </map>
            </div>
            </div>
          <div class="col-md-8 form-group">
            <label for="cp">Code postal : </label>
            <input type="text" class="form-control" id="cp" name='postalCode'>
          </div>
          <div class="col-md-8  form-group">
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
