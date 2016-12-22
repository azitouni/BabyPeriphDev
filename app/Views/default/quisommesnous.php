<?php $this->layout('layout', ['title' => 'QUI SOMMES NOUS?']) ?>
<?php $this->start('main_content') ?>
<section class="">

	    <div class="container">
        <div class="row posMags">

	       	<div class="col-md-1">
            <img class ="logoTeam" src="<?= $this->assetUrl('img/Mags_team.png') ?>">
          </div>
            <div class="col-md-8">
      				<h1>MAGS Team</h1>
      			</div>
          </div>

            <div class=" col-md-8 col-md-offset-2 equipeMags text-center">
              <p>Nous sommes une équipe de passionnés du web et des nouvelles technologies et de développement informatique. </p>
              <p>Notre équipe s'est constituée lors d'une formation <strong><a href="http://www.wf3.fr/">WebForce3</strong></a> que nous avons suivi ensemble.</p>
              <p>Notre objectif est de satisfaire les besoins des clients avec les dernières tendances des technologies</p>
            </div>
		   	</div>


</section>
<?php $this->stop('main_content') ?>
