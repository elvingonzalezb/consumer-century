 <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-3" data-bg-img="files/articulos/<?php echo $textosweb->imagen?>">
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

    <section>
      <div class="container">
        <div class="row multi-row-clearfix">
          <div class="blog-posts">
          <?php
              foreach($last_Articulos as $ultimo)
                 {
                 $link = $ultimo->id.'-'.$ultimo->url;
                      echo '<div class="col-md-4">';
               echo '<article class="post clearfix mb-30 bg-lighter">';
                 echo '<div class="entry-header">';
                   echo '<div class="post-thumb thumb"> ';
                    echo '<img src="files/articulos/grandes/'.$ultimo->imagen.'" alt="" class="img-responsive img-fullwidth"> ';
                    echo '</div>';
                     echo '</div>';
                      echo '<div class="entry-content border-1px p-20 pr-10">';
                      echo '<div class="entry-meta media mt-0 no-bg no-border">';
                       echo '<div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">';
                           echo '<ul>';
                           $mes = fechaMesLetras($ultimo->created);
                           $dia = fechaNumero($ultimo->created);
                              echo '<li><a href="#" class="text-white">'.$mes.'</a></li>';
                              echo '<li><a href="#" class="text-white">'.$dia.'</a></li>';
                           echo '</ul>';
                       echo '</div>';
                        echo '<div class="media-body pl-15">';
                         echo '<div class="event-content pull-left flip">';
                          echo '<h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="'.$link.'">'.$ultimo->titulo.'</a></h4>';
                        echo '</div>';
                       echo '</div>';
                      echo '</div>';
                           if(strlen($ultimo->introtext) > 90){
                          $ultimo->introtext = substr($ultimo->introtext,0,90)."..."; } 
                     echo '<p class="mt-10">'.$ultimo->introtext.'.</p>';
                    echo '<a href="'.$link.'"><span class="text-theme-colored-blue ">Leer mas</span></a>';
                   echo '<div class="clearfix"></div>';
                  echo '</div>';
                echo '</article>';
              echo ' </div>';
            }
          ?>
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
