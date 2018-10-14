 <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-3" data-bg-img="files/informativa/<?php echo $privacidad->imagen?>">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
           <h2 class="title text-white"><?php echo $privacidad->titulo?></h2>
              <ol class="breadcrumb text-center white mt-10">
                <li><a href="inicio">Home</a></li>
                <li><a href="frontend/servicios">Servicios</a></li>
                <li><a href="frontend/contactanos">Contáctanos</a></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section> 

    <section>
      <div class="container">
        <div class="row">
      
          <div class="col-md-10 col-md-push-1">
            <div id="section-one" class="mb-50">
              <p class="mb-20">
              <?php echo $privacidad->fulltext?></p>
            </div>
        
          </div>
        </div>
      </div>
    </section>

  </div>
  <!-- end main-content -->