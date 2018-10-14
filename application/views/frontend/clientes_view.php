<!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-3" data-bg-img="files/clientes/<?php echo $textosweb->imagen?>">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title text-white"><?php echo $textosweb->titulo?></h2>
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
      <div class="container pb-xs-30">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase mt-0 line-height-1">
              Conozca nuestros  <span class="text-theme-colored">Clientes</span></h2>
            
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <?php   
             foreach($clientes as $cliente)
              {
             echo'<div class="col-xs-12 col-sm-3 col-md-3">';
              echo'<div class="box-hover-effect effect-barlin mb-xs-30">';
                echo'<div class="effect-wrapper">';
                  echo'<div class="thumb">';
                    echo'<img class="img-fullwidth" src="files/clientes/'.$cliente->imagen.'" alt="project">';
                  echo'</div>';
                  
              echo'</div>';
              echo'</div>';
            echo'</div>';
               }
              ?>
             </div>
        </div>
      </div>
    </section>


  </div>  
  <!-- end main-content -->