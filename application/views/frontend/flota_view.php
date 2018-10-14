    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-3" data-bg-img="files/flota/<?php echo $textosweb->imagen?>">
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
              <div id="grid" class="gallery-isotope default-animation-effect grid-4 clearfix">
                   
                <!-- Portfolio Item Start -->
                 <?php   
             foreach($flotas as $flota)
              {
             echo'<div class="gallery-item">';
                   echo'<div class="thumb">';
                     echo'<img class="img-fullwidth photo" src="files/flota/'.$flota->imagen.'" alt="project">';
                     echo'<div class="hidden">';
                  
                      
                     echo'</div>';
                     echo'<div class="overlay-shade"></div>';
                     echo'<div class="text-holder">';
                       echo'<div class="title text-center">'.$flota->titulo.'</div>';
                     echo'</div>';
                     echo'<div class="icons-holder">';
                       echo'<div class="icons-holder-inner">';
                         echo'<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">';
                           echo'<a data-rel="prettyPhoto[gallery8]" title="'.$flota->titulo.'" href="files/flota/grandes/'.$flota->imagen.'" class="hover-link"></a>';
                           echo'<a href="#"><i class="fa fa-plus"></i></a>';
                         echo'</div>';
                       echo'</div>';
                     echo'</div>';
                   echo'</div>';
              
                 echo'</div>';

                  }
              ?>
                <!-- Portfolio Item End -->
                
              </div>
              <!-- End Portfolio Gallery Grid --> 
                          
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
  <!-- end main-content -->