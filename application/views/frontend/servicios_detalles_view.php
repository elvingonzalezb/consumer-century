  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-3" data-bg-img="files/servicios/<?php echo $textosweb->imagen?>">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title text-white">Detalle de Servicios</h2>
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

    <!-- Section: Blog -->
    <section>
      <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row">
          <div class="col-md-9 pull-right flip sm-pull-none">
            <div class="blog-posts single-post">
              <article class="post clearfix mb-0">
                <div class="entry-header">
                  <div class="post-thumb thumb"> <img src="files/servicios/<?php echo $servicio->imagen?>" alt="" class="img-responsive img-fullwidth"> </div>
                </div>
                <div class="entry-content">
                  <div class="entry-meta media no-bg no-border mt-15 pb-20">
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h3 class="entry-title text-black text-uppercase pt-0 mt-0"><?php echo $servicio->titulo?></h3>
                      </div>
                    </div>
                  </div>
                  <p class="mb-15"><?php echo $servicio->fulltext?></p>
                </div>
              </article>
              <div class="tagline p-0 pt-20 mt-5">
                <div class="row">
                  <div class="col-md-8">
                  
                  </div>
                  <div class="col-md-4">
              
                  </div>
                </div>
              </div>
      
           
       
            </div>
          </div>
          <div class="col-md-3">
            <div class="sidebar sidebar-left mt-sm-30">
              <div class="widget">
                <div class="widget">
                <h4 class="widget-title">Nuestros Servicios</h4>
                <div class="latest-posts">
                 <?php
                 foreach($last_servicios as $ultimo)
                 {
                    $link = $ultimo->id.'-'.$ultimo->url.'/'."servicios";
                    echo '<article class="post media-post clearfix pb-0 mb-10">';
                    echo '<a href="'.$link.'" class="post-thumb"><img alt="" src="files/servicios/thumbs/'.$ultimo->imagen.'"></a>';
                    echo '<div class="post-right">';
                    echo '<h5 class="post-title mt-0 "><a href="'.$link.'">'.$ultimo->titulo.'</a></h5>';
                    echo '</div>';
                    echo '</article>';
                 }
                 ?>
                </div>
              </div>
          </div>

           <div class="widget">
                <h4 class="widget-title">Servicios Destacados</h4>
                <div id="flickr-feed" class="clearfix">
                  <!-- Flickr Link -->
                 <?php
                 foreach($Dest_servicios as $destacado)
                 {
                 $link = $destacado->id.'-'.$destacado->url.'/'."servicios";
                 echo '<a href="'.$link.'" class="post-thumb"><img alt="" src="files/servicios/'.$destacado->imagen.'"></a>';
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