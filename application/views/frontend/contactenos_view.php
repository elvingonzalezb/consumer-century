 <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
      <section class="inner-header divider parallax layer-overlay overlay-dark-3" data-bg-img="files/contactanos/<?php echo $textosweb->imagen?>">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
             <h2 class="title text-white"><?php echo $textosweb->titulo?></h2>
              <ol class="breadcrumb text-center white mt-10">
                 <li><a href="inicio">Home</a></li>
                <li><a href="frontend/servicios">Servicios</a></li>
                <li><a href="frontend/clientes">Clientes</a></li>
              </ol>
            
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Divider: Contact -->
    <section class="divider">
      <div class="container">
        <div class="row pt-30">
          <div class="col-md-6">
            <h3 class="line-bottom mt-0 mb-30">Escríbenos</h3>
             <?php
            $resultado = $this->session->userdata("resultado");
            if( isset($resultado) )
            {
                switch( $resultado )
                {
                    case "exito":
                        echo '<div class="alert alert-primary" role="alert">';
                        echo $this->session->userdata("mensaje");
                        echo '</div>';
                    break;

                    case "error":
                        echo '<div class="alert alert-danger" role="alert">';
                        echo $this->session->userdata("mensaje");
                        echo '</div>';
                    break;
                }
                $this->session->unset_userdata('resultado');
                $this->session->unset_userdata('mensaje');
            }
        ?>
            <!-- Contact Form -->
            <form method="post" id="contactform" name="contactform" action="frontend/contactanos/enviar" onsubmit="return validaContactenos()">

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nombre <small>*</small></label>
                    <input name="nombre" id="nombre" class="form-control" type="text" placeholder="Ingrese su nombre" >
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Apellidos <small>*</small></label>
                    <input name="apellido" id="apellido" class="form-control" type="text" placeholder="Ingrese su apellido">
                  </div>
                </div>
              </div>
                
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Correo <small>*</small></label>
                    <input name="email" id="email" class="form-control" type="text" placeholder="Ingrese su correo">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Teléfono</label>
                    <input name="telefono" id="telefono" class="form-control" type="text" placeholder="Ingrese su teléfono">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label>Mensaje</label>
                <textarea name="mensaje" id="mensaje" class="form-control" rows="5" placeholder="Ingrese su mensaje"></textarea>
              </div>
              <div class="form-group">
                 <div class="g-recaptchamod">
                  <?php echo $recaptcha;?>
                 </div>
               </div>
              <div class="form-group">
                <input name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Envie su mensaje</button>
               
              </div>
            </form>


          </div>
          <div class="col-md-6">
            <h3 class="line-bottom mt-0"><?php echo $textosweb->fulltext?></h3>
           
            <ul class="styled-icons icon-dark icon-sm icon-circled mb-20">
              <?php
              $fb = getConfig('enlace_facebook');
              if($fb!="")
              {
                 echo '<li><a href="'.$fb.'" target="_blank" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>';
              }

              $tw = getConfig('enlace_twitter');
              if($tw!="")
              {
                 echo '<li><a href="'.$tw.'" target="_blank" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a></li>';
              }

              $pin = getConfig('enlace_pinterest');
              if($pin != "")
              {
                 echo'<li><a href="'.$pin.'" target="_blank" data-bg-color="#4C75A3"><i class="fa fa-pinterest"></i></a></li>';
              }


              $ins = getConfig('enlace_instagram');
              if($ins!="")
              {
                 echo ' <li><a href="'.$ins.'" target="_blank" data-bg-color="#D9CCB9"><i class="fa fa-instagram"></i></a></li>';
              }

             $you = getConfig('enlace_youtube');
              if($you!="")
              {
                 echo '<li><a href="'.$you.'" target="_blank" data-bg-color="#D71619"><i class="fa fa-youtube"></i></a></li>';
              }

                 $sk = getConfig('enlace_skype');
              if($sk!="")
              {
                 echo '  <li><a href="'.$sk.'" target="_blank" data-bg-color="#4C75A3"><i class="fa fa-skype"></i></a></li>';
              }
            ?>
          </ul>
          <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-20" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
              <div class="media-body">
                <h5 class="mt-0">Nuestra Oficina</h5>
                <p><?php echo getConfig('direccion');?></p>
              </div>
            </div>
            <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-15" href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
              <div class="media-body">
                <h5 class="mt-0">Número de contacto</h5>
                <p><a href="#">+<?php echo getConfig('telefono_footer');?></a></p>
              </div>
            </div>
            <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-15" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
              <div class="media-body">
                <h5 class="mt-0">Dirección de correo</h5>
                <p><a href="#"><?php echo getConfig('correo');?></a></p>
              </div>
            </div>
          
          </div>
        </div>
      </div>
    </section>
    
    <!-- Divider: Google Map -->
    <section>
      <div class="container-fluid pt-0 pb-0">
        <div class="row">

          <!-- Google Map HTML Codes
          <div 
            id="map-canvas-multipointer"
            data-mapstyle="default"
            data-height="500"
            data-zoom="14"
            data-marker="assets/frontend/images/map-marker.png">
          </div>-->
          <div>
            <div id="mapa" style="width: 98%; height: 400px; border: #ccc solid 1px; margin: 0 auto;"></div>
          </div>


          <!-- Google Map Javascript Codes -->

          <script src="http://maps.google.com/maps/api/js?key=<?php echo GOOGLEMAP_KEY; ?>"></script>
          <script > 
            function initialize(){ 
                       
                         var latlng = new google.maps.LatLng(<?php echo $mapa["latitud_centro"]; ?>, <?php echo $mapa["longitud_centro"]; ?>); 
                                var myOptions = { 
                                        zoom: <?php echo $mapa["zoom"]; ?>,
                                        center: latlng,
                                        scrollwheel: false,
                                        <?php
                                                switch($mapa["tipomapa"])
                                                {
                                                        case "roadmap": 
                                        ?>
                                                        mapTypeId: google.maps.MapTypeId.ROADMAP
                                        <?php
                                                        break;
                                                        case "hybrid":
                                        ?>
                                                        mapTypeId: google.maps.MapTypeId.HYBRID
                                        <?php               
                                                        break;
                                                }
                                        ?>
                                };
                                var map = new google.maps.Map(document.getElementById("mapa"), myOptions);
                                var myOffice = new google.maps.LatLng(<?php echo $mapa["latitud_punto"]; ?>, <?php echo $mapa["longitud_punto"]; ?>); 
                               
                                var marker = new google.maps.Marker({
                                        position: myOffice,
                                        draggable: true,
                                        map: map                         
                                });
                                var infowindow = new google.maps.InfoWindow({                        
                                        size: new google.maps.Size(250,120)
                                });
                                google.maps.event.addListener(marker, 'click', function() {
                                        infowindow.open(map,marker);
                                });
                                google.maps.event.addListener(map, 'dragend', function() {
                                        var center = map.getCenter();
                                        var texto_globoes = center.toString();
                                        //alert(texto_globoes);
                                        var latitud = extrae_latitud(texto_globoes);
                                        var longitud = extrae_longitud(texto_globoes);
                                        $("#latitud_centro").val(latitud);
                                        $("#longitud_centro").val(longitud);
                                });

                                google.maps.event.addListener(map, 'zoom_changed', function() {
                                        var newzoom = map.getZoom();
                                        //alert('el zoom cambio:'+newzoom);
                                        //document.nueva.zoom.value = newzoom;
                                        $("#zoom").val(newzoom);
                                });

                                google.maps.event.addListener(map, 'maptypeid_changed', function() {
                                        var tipomapa = map.getMapTypeId();
                                        //alert('tipo de mapa:'+tipomapa);
                                        $("#tipomapa").val(tipomapa);
                                });

                                google.maps.event.addListener(marker, 'dragend', function() {
                                        var posicion = marker.getPosition();
                                        var ubicacion = posicion.toString();
                                        //alert(ubicacion);
                                        var latitud2 = extrae_latitud(ubicacion);
                                        var longitud2 = extrae_longitud(ubicacion);
                                        $("#latitud_punto").val(latitud2);
                                        $("#longitud_punto").val(longitud2);
                                        //document.nueva.latitud_punto.value = latitud2;
                                        //document.nueva.longitud_punto.value = longitud2;
                                });
                        }
                 </script>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
