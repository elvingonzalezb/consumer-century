<!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
     <section class="inner-header divider parallax layer-overlay overlay-dark-3" data-bg-img="files/nosotros/<?php echo $nosotros->imagen?>">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
           <h2 class="title text-white"><?php echo $nosotros->titulo?></h2>
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
    
    <!-- Section: About -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <p><?php echo $nosotros->fulltext?></p>
           
            <div class="separator separator-rouned">
              <i class="fa fa-cog fa-spin"></i>
            </div>
                       
            <h5><?php echo $vision->titulo?></h5>
            <p><?php echo $vision->fulltext?></p>
            
            <div class="separator separator-rouned">
              <i class="fa fa-cog fa-spin"></i>
            </div>
           <h5><?php echo $mision->titulo?></h5>
           <p><?php echo $mision->fulltext?></p>
            
             <div class="separator separator-rouned">
              <i class="fa fa-cog fa-spin"></i>
            </div>
           <h5><?php echo $valores->titulo?></h5>
           <p><?php echo $valores->fulltext?></p>
         
        </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->