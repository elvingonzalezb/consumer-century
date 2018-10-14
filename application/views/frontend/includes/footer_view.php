 <!-- Footer -->
  <footer id="footer" class="footer">
    <div class="container pt-70 pb-40">
      <div class="row border-bottom-black">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <img class="mt-10 mb-20" alt="" src="assets/frontend/images/logo-wide-transparente.png">
            <p class="text-gray"><?php echo getConfig('direccion');?></p>
            <ul class="mt-5">
              <li class="m-0 pl-0 pr-10"> <i class="fa fa-phone text-theme-colored-foo mr-5"></i> <a class="text-gray" href="#"><?php echo getConfig('telefono_footer');?></a> </li>
              <br>
              <li class="m-0 pl-0 pr-10"> <i class="fa fa-envelope-o text-theme-colored-foo mr-5"></i> <a class="text-gray" href="#"><?php echo getConfig('correo');?></a> </li>
            
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title">Secciones</h4>
            <ul class="list-border">
             <li><a href="./">Inicio</a></li>
              <li><a href="nosotros">Nosotros</a></li>
              <li><a href="clientes">Clientes</a></li>
              <li><a href="servicios">Servicios</a></li>
              <li><a href="privacidad">Políticas de privacidad</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title">Últimos Artículos</h4>
            <div class="latest-posts">
                <?php
            $last_art_footer = articulosFooter();
            foreach($last_art_footer as $ultimo)
            {
                        $link = $ultimo->id.'-'.$ultimo->url;
                        echo '<article class="post media-post clearfix pb-0 mb-10">';
                        echo '<a href="'.$link.'" class="post-thumb"><img alt="" src="files/articulos/thumbs/'.$ultimo->imagen.'"></a>';
                        echo '<div class="post-right">';
                        echo '<h5 class="post-title mt-0 mb-5"><a href="'.$link.'">'.$ultimo->titulo.'</a></h5>';
                        echo '<p class="post-date mb-0 font-12 text-gray">'.$ultimo->created.'Mar 08, 2015</p>';
                        echo '</div>';
                        echo '</article>';
                    }
                    ?>         
             </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
              <div class="widget dark">
               <h4 class="widget-title">Servicios Destacados</h4>
                <div id="flickr-feed" class="clearfix">
                  <!-- Flickr Link -->
                        <!-- Flickr Link -->
                 <?php
                 $Dest_servicios = serviciosFooter();
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
    <div class="footer-bottom">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6 sm-text-center">
            <p class="font-13 text-black-777 m-0"><?php echo getConfig('copyright');?></p>
             <p class="font-15 text-black-777 m-0">Desarrollado por <a href="http://www.ajaxperu.com" target="_blank">AJAX PERÚ</a></p>
          </div>
          <div class="col-md-6 text-right flip sm-text-center">
            <div class="widget no-border m-0">
              <ul class="styled-icons icon-dark icon-circled icon-sm">
           <?php
              $fb = getConfig('enlace_facebook');
              if($fb!="")
              {
                 echo '<li><a href="'.$fb.'" target="_blank" ><i class="fa fa-facebook"></i></a></li>';
              }

              $tw = getConfig('enlace_twitter');
              if($tw!="")
              {
                 echo '<li><a href="'.$tw.'" target="_blank" ><i class="fa fa-twitter"></i></a></li>';
              }

              $pin = getConfig('enlace_pinterest');
              if($pin != "")
              {
                 echo'<li><a href="'.$pin.'" target="_blank" ><i class="fa fa-pinterest"></i></a></li>';
              }


              $ins = getConfig('enlace_instagram');
              if($ins!="")
              {
                 echo ' <li><a href="'.$ins.'" target="_blank" ><i class="fa fa-instagram"></i></a></li>';
              }

             $you = getConfig('enlace_youtube');
              if($you!="")
              {
                 echo '<li><a href="'.$you.'" target="_blank" ><i class="fa fa-youtube"></i></a></li>';
              }

                 $sk = getConfig('enlace_skype');
              if($sk!="")
              {
                 echo '  <li><a href="'.$sk.'" target="_blank" ><i class="fa fa-skype"></i></a></li>';
              }
            ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>


  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="assets/frontend/js/custom.js"></script>
<script src="assets/frontend/js/validation.js"></script>
        <!-- ALERTAS SWEETALERT-->
     <!--<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2"></script>-->
     <script type="text/javascript" src="assets/frontend/js/sweetalert2.all.min.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
<script src="assets/frontend/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/frontend/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/frontend/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/frontend/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/frontend/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/frontend/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/frontend/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/frontend/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/frontend/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

</body>
</html>