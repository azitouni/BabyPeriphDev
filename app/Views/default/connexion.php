<?php $this->layout('layout', ['title' => 'Connexion']) ?>

<?php $this->start('main_content') ?>
	<h2>Connexion</h2>
  <form class="" action="<?= $this->url('default_traitementConnexion'); ?>" method="post">
    <div class="form-group">
      <label for="identifiant">Identifiant : </label>
      <input type="text" id="identifiant" name="identifiant">
    </div>
    <div class="form-group">
      <label for="password">Mot de passe : </label>
      <input type="password" id="password" name="password">
    </div>    
	  <button type="submit" name="button" class="btn btn-success"> Connexion </button>
	</form>
<?php $this->stop('main_content') ?>
