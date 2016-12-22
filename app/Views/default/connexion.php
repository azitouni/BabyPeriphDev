<?php $this->layout('layout', ['title' => 'Connexion']) ?>

<?php $this->start('main_content') ?>
<section class="fond">
  <div class="row">
    <div class="container">
    
   <div class="col-md-4 sidebar">
      <p >
      Avec mon compte BabyPeriph, je peux déposer mon annonce et recevoir des offres  comme je peux trouver les bonnes occasions !
      </p>
  
  </div>
 
  <div class="col-md-8 inscriptionUser-ajoutAnnonce ">
    
    <form class="" action="<?= $this->url('default_traitementConnexion'); ?>" method="post">
      <div class="col-md-8 form-group">
        <label for="identifiant">Identifiant : </label>
        <input type="text" class="form-control" id="identifiant" name="identifiant">
      </div>
      <div class="col-md-8 form-group">
        <label for="password">Mot de passe : </label>
        <input type="password" class="form-control" id="password" name="password">
      </div>
      <div class="col-md-8 ">    
      <button type="submit" name="button" class="bouton-sinscrire btn-lg"> Connexion </button>
      <a href="<?php echo $this->url('default_inscription'); ?>">je suis nouveau sur BabyPeriph</a>
      </div>
    </form>
    <a class="lienMdp" href="<?= $this->url('default_lostPassword') ?>">Mot de passe oublié ?</a>
  </div>
</div>
</div>
</section>

<?php $this->stop('main_content') ?>
