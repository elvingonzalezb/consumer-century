  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-3"data-bg-img="files/articulos/<?php echo $textosweb->imagen?>">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title text-white">Detalle de artículos</h2>
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
                  <div class="post-thumb thumb"> <img src="files/articulos/grandes/<?php echo $articulo->imagen?>" alt="" class="img-responsive img-fullwidth"> </div>
                </div>
                <div class="entry-content">
                  <div class="entry-meta media no-bg no-border mt-15 pb-20">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                     <?php echo '<ul>';
                           $mes = fechaMesLetras($articulo->created);
                           $dia = fechaNumero($articulo->created);
                              echo '<li><a href="#" class="text-white">'.$mes.'</a></li>';
                              echo '<li><a href="#" class="text-white">'.$dia.'</a></li>';
                           echo '</ul>';
                           ?>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h3 class="entry-title text-black text-uppercase pt-0 mt-0"><?php echo $articulo->titulo?></h3>
                
                      </div>
                    </div>
                  </div>
                  <p class="mb-15"><?php echo $articulo->fulltext?></p>
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
                <h4 class="widget-title">Ultimos Artículos</h4>
                <div class="latest-posts">
                 <?php
                 foreach($last_Articulos as $ultimo)
                 {
                    $link = $ultimo->id.'-'.$ultimo->url;
                    echo '<article class="post media-post clearfix pb-0 mb-10">';
                    echo '<a href="'.$link.'" class="post-thumb"><img alt="" src="files/articulos/thumbs/'.$ultimo->imagen.'"></a>';
                    echo '<div class="post-right">';
                    echo '<h5 class="post-title mt-0 "><a href="'.$link.'">'.$ultimo->titulo.'</a></h5>';
                    echo'<p><span class="text-gray">'.$ultimo->created.'</span></p>';
                    echo '</div>';
                    echo '</article>';
                 }
                 ?>
                </div>
              </div>
          </div>


              <div class="widget">
                <h4 class="widget-title">Artículos Destacados</h4>
                <div id="flickr-feed" class="clearfix">
                  <!-- Flickr Link -->
                 <?php
                 foreach($Dest_Articulos as $destacado)
                 {
                 $link = $destacado->id.'-'.$destacado->url;
                 echo '<a href="'.$link.'" class="post-thumb"><img alt="" src="files/articulos/thumbs/'.$destacado->imagen.'"></a>';
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