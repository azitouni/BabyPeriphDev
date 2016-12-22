<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>



<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<?php if(isset($_SESSION['success'])){
  echo '<h1 class="success">' . $_SESSION['success'] . '</h1>';
  unset($_SESSION['success']);
} ?>
 <h1 class="titre3 text-center">Dernières Annonces</h1>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="car-border img-responsive center" src="<?= $this->assetUrl('img/nounou.jpg') ?>" alt="...">
      <div class="carousel-caption">
        <p>Location</p>
        <span class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
      </div>

    </div>
    <div class="item">
      <img class="car-border img-responsive" src="<?= $this->assetUrl('img/poussette.jpg') ?>" alt="...">
      <div class="carousel-caption">
       <p>Vente </p>
       <span class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores voluptas delectus vel libero.</span>
      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
</div c>
<div class="row">
<div class="col-md-6 col-md-offset-3">
<hr class="small">
</div>
</div>
<section class=" ">
          <div class="container essai">
          <div class="row essai main ">
              <h1 class="titre text-center">Nous vous proposons:</h1>
               <div>
                    <div class="col-md-4 categorie categorie-item">
                         <h2 class="text-center">Vente</h2>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore nulla totam, optio aperiam pariatur explicabo harum! Aliquam sapiente aspernatur deleniti, quod similique porro, aliquid quae autem harum, dolorum qui ad Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio consectetur nam ad laboriosam voluptatem modi autem recusandae, nobis qui, facere necessitatibus? Eum iure tempore iste nobis facere quo, aperiam tempora..</p>
                    </div>
                         <div class="col-md-4 categorie categorie-item">

                        <h2 class="text-center">Location</h2>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quis blanditiis voluptatem nisi, dignissimos, modi, optio dolorum vel fugiat reiciendis ab placeat, temporibus suscipit magni eius corporis consectetur repellat magnam!Lorem Odio consectetur nam ad laboriosam voluptatem modi autem recusandae, nobis qui, facere necessitatibus? Eum iure tempore iste nobis facere quo, aperiam tempor</p>

                        </div>

                           <div class="col-md-4 categorie ">

                        <h2 class="text-center">Services</h2>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quis blanditiis voluptatem nisi, dignissimos, modi, optio dolorum vel fugiat reiciendis ab placeat, temporibus suscipit magni eius corporis consectetur repellat magnam!Lorem Odio consectetur nam ad laboriosam voluptatem modi autem recusandae, nobis qui, facere necessitatibus? Eum iure tempore iste nobis facere quo, aperiam tempor</p>

                        </div>
                </div>
         </div> 
  </div>
</section>                         



<?php $this->stop('main_content') ?>
