<!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-3" data-bg-img="files/servicios/<?php echo $textosweb->imagen?>">
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


    <!-- Section: service-->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8 blog-pull-right">
            <div class="single-service">
            <?php   
             foreach($servicios as $servicio)
            {
            $link = $servicio->id.'-'.$servicio->url.'/'."servicios";
               echo '<div class="col-xs-12 col-sm-6 col-md-6">';
                echo '<div class="box-hover-effect effect-barlin mb-xs-30">';
                  echo '<div class="effect-wrapper">';
                    echo '<div class="thumb">';
                      echo '<a href="'.$link.'"><img class="img-fullwidth" src="files/servicios/'.$servicio->imagen.'" alt="project">';
                       echo '<div class="overlay-shade bg-theme-colored-transparent-8"></div>';
                       echo '</div>';
                        echo '<div class="featured-content text-center pt-15 pr-10 pl-10 pb-20 border-1px">';
                         echo '<h3>'.$servicio->titulo.'</h3></a>';
                           if(strlen($servicio->fulltext) > 90){
                           $servicio->fulltext = substr($servicio->fulltext,0,90)."...";}  
                          echo '<P class="text-justify">'.$servicio->fulltext.'</P>';
                         echo '<a href="'.$link.'" class="text-theme-colored-white media-center bg-theme-colored pt-5 pr-15 pb-5 pl-15">Leer mas...</a>';
                      echo '</div>';
                    echo '</div>';
                   echo '</br>';
                echo '</div>';
              echo '</div>';
            }
            ?>
            </div>
          </div>


          <div class="col-sm-12 col-md-4">
            <div class="sidebar sidebar-left mt-sm-30 ml-40">
              <div class="widget">
                <h3 class="widget-title line-bottom"><img class="mr-10" src="assets/frontend/images/flat-color-icons-svg/md2.png" alt="construction">Listado de Servicios</h3>
                <div class="services-list">
                <?php   
                  $active="active";
                   foreach($servicios as $servicio)
                  {
                   $link = $servicio->id.'-'.$servicio->url.'/'."servicios";
                  echo '<ul class="nav nav-pills nav-stacked nav-sidebar">';
                  echo ' <li class="'.$active.'"><a href="'.$link.'"><img class="mr-5" src="assets/frontend/images/flaticons/hand-holding-up-a-wrench.png" alt="construction">'.$servicio->titulo.'</a></li>';
                  echo '</ul>';
                   $active="";
                  }
                ?>
                </div>
              </div>
             </div>
          </div>
        </div>
      </div>
    </section>
</div>
  <!-- end main-content -->
