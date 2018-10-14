    
  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
      <section class="inner-header divider parallax layer-overlay overlay-dark-3" data-bg-img="files/galeria/<?php echo $textosweb->imagen?>">
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
    
    <!-- Gallery Grid 3 -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
           
              <!-- Portfolio Gallery Grid -->
               <div class="gallery-isotope default-animation-effect grid-3 gutter-small clearfix" data-lightbox="gallery">
                <!-- Portfolio Item Start -->
                    <?php   
                      $active="active";
                       foreach($imgs_galeria as $galeria)
                      {
                      echo' <div class="gallery-item design">';
                 echo' <div class="thumb">';
                  echo'  <img class="img-fullwidth" src="files/galeria/'.$galeria->imagen.'" alt="project">';
                  echo' <div class="overlay-shade"></div>';
                  echo'  <div class="text-holder">';
                  echo'    <div class="title text-center">'.$galeria->titulo.'</div>';
                  echo'  </div>';
                   echo' <div class="icons-holder">';
                   echo'   <div class="icons-holder-inner">';
                   echo'     <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">';
                   echo'       <a href="files/galeria/grande/'.$galeria->imagen.'" data-lightbox-gallery="gallery" title="'.$galeria->titulo.'"><i class="fa fa-picture-o"></i></a>';
                    echo'    </div>';
                    echo'  </div>';
                  echo'  </div>';
                echo'  </div>';
               echo' </div>';
                       }
                    ?>
           <!-- Portfolio Item End -->
              </div>
              <!-- End Portfolio Gallery Grid -->
 
        
                <!-- Portfolio Item End -->
            </div>
          </div>

            <div class="row">
                <div class="col-md-12">
                    <?php echo $paginacion; ?>
                </div>
            </div>


        </div>
      </div>
    </section>

  </div>
  <!-- end main-content -->