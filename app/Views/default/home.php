<?php $this->layout('layout', ['title' => '']) ?>

<?php $this->start('main_content') ?>

<?php if(isset($_SESSION['success'])){
  echo '<h1 class="success">' . $_SESSION['success'] . '</h1>';
  unset($_SESSION['success']);
} ?>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <!-- begin panel group -->
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                <!-- panel 1 -->
                <div class="panel panel-default bordure1">
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab1" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingOne"data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h3 class="panel-title"><strong>Vendez vos anciens articles de puériculture d'occasion</strong></h3>
                        </div>
                    </span>

                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                        <!-- Tab content goes here -->
                        Efficace et simple, <strong>BabyPeriph</strong> permet aux particuliers comme aux professionnels de faire de bonnes affaires. Si vous souhaitez vendre ou échanger vos accessoires pour enfants et bébés, déposez vos annonces, c'est gratuit !
                        </div>
                    </div>
                </div>
                <!-- / panel 1 -->

                <!-- panel 2 -->
                <div class="panel panel-default">
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab2" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h3 class="panel-title collapsed"><strong>De bonnes affaires d'accessoires de puériculture pas chers</strong></h3>
                        </div>
                    </span>

                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                        <!-- Tab content goes here -->
                        <strong>BabyPeriph</strong> est plus qu’un simple site d’ annonce en ligne. Indispensable aux dénicheurs de bons plans, il vous permet de profiter de bonnes affaires puériculture pas cher. Trouvez de bons plans discount et allégez votre budget
                        </div>
                    </div>
                </div>
                <!-- / panel 2 -->

                <!--  panel 3 -->
                <div class="panel panel-default ">
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab3" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingThree"  class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h3 class="panel-title"><strong>Espace Maman..... </strong></h3>
                        </div>
                    </span>

                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                          <div class="panel-body">
                          <!-- tab content goes here -->
                           Lorem Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh
                          </div>
                        </div>
                      </div>
            </div> <!-- / panel-group -->

        </div> <!-- /col-md-4 -->

        <div class="col-md-8 macPres">
            <!-- begin macbook pro mockup -->
            <div class="md-macbook-pro md-glare">
                <div class="md-lid">
                    <div class="md-camera"></div>
                    <div class="md-screen">
                    <!-- content goes here -->
                        <div class="tab-featured-image">
                            <div class="tab-content">
                                <div class="tab-pane  in active" id="tab1">
                                        <img src="<?= $this->assetUrl('img/bébé_loca.jpg') ?>"  alt="Vendez vos anciens articles de puériculture d'occasion" class="" >
                                </div>
                                <div class="tab-pane " id="tab2">

                                        <img src="<?= $this->assetUrl('img/poussette.jpg') ?>" alt="De bonnes affaires d'accessoires de puériculture pas chers" class="img-responsive">

                                </div>
                                <div class="tab-pane fade" id="tab3">

                                        <img src="<?= $this->assetUrl('img/nounou.jpg') ?>" alt="Espace Maman" class="img img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md-base"></div>
            </div> <!-- end macbook pro mockup -->



        </div> <!-- / .col-md-8 -->
    </div> <!--/ .row -->
</div> <!-- end sidetab container -->

<section class="container-fluid fond1">
     <div class="row ">
       <div id="location-puericulture" class="col-xs-12 col-md-4 bordure1">
         <h2>Location</h2>
         <p>Besoin temporairement de matériel pour bébé, une poussette devenue inutile ?la rubrique location vous met à disposition une liste d'annonces et la possibiliter  d'en créer vous même..</p>
       </div>
      <div id="service-nounou" class="col-xs-12 col-md-4 bordure1">
        <h2>Vente</h2>
        <p>Vous voulez vous séparer de votre bien definitivement ? la location ne vous convient plus ? la rubrique vente vous aidera à offrir une deuxieme vie à votre biberon.</p>
       </div>
       <div id="service-maman" class="col-xs-12 col-md-4 bordure1">
         <h2>Service</h2>
         <p>Une sortie  planifiée, un planning chargé besoin d'une nounou la rubrique services est faite pour vous ! </p>
       </div>
     </div>

 </section>

<?php $this->stop('main_content') ?>
