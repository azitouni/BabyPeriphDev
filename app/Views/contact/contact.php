<?php $this->layout('layout', ['title' => 'Nous contacter']) ?>

<?php $this->start('main_content') ?>

	<?php if(isset($erreur) && $erreur == true){?>
	<h2 style="color:red;">Erreur !!! Votre message n'a pas été envoyé </h2>
	<code>
		<?php echo $data; ?>
	</code>
	<?php } ?>
	<?php if(isset($erreur) && $erreur == false){?>
	<h2 style="color:green;">Votre message a bien été envoyé !!!</h2>
	
	<?php } ?>

	<div class="col-md-8">
		<form method="POST" action="<?= $this->url('contact_traitementform'); ?>" >
			<div class="form-groupe">
				<label for="ident">Votre nom</label>
				<input type="text" class="form-control" name="nom">
			</div>
			<div class="form-groupe">
				<label for="ident">Votre adresse mail</label>
				<input type="text" class="form-control" name="email">
			</div>
			 <div>
				<label for="message">Votre message</label>
				<textarea cols="40" rows="5" class="form-control" name="message"></textarea>
			</div>
			<div class="form-group">
				<button class="btn btn-default bouton-news" type="submit" ><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Envoyer </button> 
			</div>
		</form>
	</div>
		

<?php $this->stop('main_content') ?>
