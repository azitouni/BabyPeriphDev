<?php $this->layout('layout', ['title' => 'Changement de mot de passe']) ?>

<?php $this->start('main_content') ?>
<?php if(isset($_SESSION['erreur'])){
	echo '<h1>' . $_SESSION['erreur'] . '</h1>';
	unset($_SESSION['erreur']);
} ?>
<form method="post" action="<?= $this->url('default_changementMdp') ?>">
			<input type="hidden" name="id" value="<?php echo $id; ?>"/>
			<input type="hidden" name="token" value="<?php echo $token ?>"/>
			<div class="form-group">
			<label for="pass">Mot de passe </label>
			<input type="password" id="mdp1" name="pass" class="form-control" />
			</div>
			<div class="form-group">
			<label for="pass2">Confirmez votre Mot de passe </label>
			<input type="password" id="mdp2" name="pass2" class="form-control" />
			</div>
			<div class="form-group text-center">
			<input type="submit"  name="btnSub" class="btn btn-lg bouton-sinscrire" value="Enregistrer" />
			</div>
		  </form>
<?php $this->stop('main_content') ?>
