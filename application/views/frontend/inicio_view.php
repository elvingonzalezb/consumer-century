 <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <section id="home" class="divider">
      <div class="container-fluid p-0">

        <!-- START REVOLUTION SLIDER 5.0.7 -->
        <div id="rev_slider_home_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery34" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
          <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
          <div id="rev_slider_home" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
            <ul>
              <!-- SLIDE 1 -->
              <?php foreach ($banners as $key => $value): ?>
              <li data-index="rs- <?php echo $key+1 ?>" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="files/banner/<?php echo $value['imagen'] ?>" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Make an Impact">
                <!-- MAIN IMAGE -->
                <img src="files/banner/<?php echo $value['imagen'] ?>" alt="<?php echo $value['titulo'] ?>" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" 
                  id="slide-1-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="1000" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);"> 
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-1-layer-2" 
                  data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" 
                  data-y="['top','top','top','top']" data-voffset="['170','100','70','90']" 
                  data-fontsize="['56','46','40','36']"
                  data-lineheight="['70','60','50','45']"
                  data-fontweight="['800','700','700','700']"
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;"><?php echo $value['titulo'] ?> <span class="text-theme-colored"><?php echo $value['subtitulo'] ?> </span>  
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-1-layer-3" 
                  data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" 
                  data-y="['top','top','top','top']" data-voffset="['320','220','180','180']" 
                  data-fontsize="['18','18','16','13']"
                  data-lineheight="['30','30','28','25']"
                  data-fontweight="['600','600','600','600']"
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 7; white-space: nowrap;"><?php echo $value['sumilla'] ?><br> <?php echo $value['boton'] ?>
                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-1-layer-4" 
                  data-x="['left','left','left','left']" data-hoffset="['53','53','53','30']" 
                  data-y="['top','top','top','top']" data-voffset="['400','290','260','260']" 
                  data-fontsize="['18','18','16','16']"
                  data-lineheight="['30','30','30','30']"
                  data-fontweight="['600','600','600','600']"
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 7; white-space: nowrap;"><a href="frontend/contactanos" class="btn btn-dark btn-theme-colored btn-xl">Contáctanos</a> 
                </div>
              </li>
            <?php endforeach ?>

            </ul>
            <div class="tp-bannertimer tp-bottom" style="height: 5px; background-color: rgba(166, 216, 236, 1.00);"></div>
          </div>
        </div>

        <!-- END REVOLUTION SLIDER -->
        <script>
          var tpj=jQuery;         
          var revapi34;
          tpj(document).ready(function() {
            if(tpj("#rev_slider_home").revolution == undefined){
              revslider_showDoubleJqueryError("#rev_slider_home");
            }else{
              revapi34 = tpj("#rev_slider_home").show().revolution({
                sliderType:"standard",
                jsFileLocation:"assets/frontend/js/revolution-slider/js/",
                sliderLayout:"fullwidth",
                dottedOverlay:"none",
                delay:9000,
                navigation: {
                  keyboardNavigation:"on",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation:"off",
                  onHoverStop:"on",
                  touch:{
                    touchenabled:"on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                  }
                  ,
                  arrows: {
                    style:"zeus",
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                    left: {
                      h_align:"left",
                      v_align:"center",
                      h_offset:30,
                      v_offset:0
                    },
                    right: {
                      h_align:"right",
                      v_align:"center",
                      h_offset:30,
                      v_offset:0
                    }
                  },
                  bullets: {
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    style:"metis",
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    direction:"horizontal",
                    h_align:"center",
                    v_align:"bottom",
                    h_offset:0,
                    v_offset:30,
                    space:5,
                    tmp:'<span class="tp-bullet-img-wrap"><span class="tp-bullet-image"></span></span>'
                  }
                },
                viewPort: {
                  enable:true,
                  outof:"pause",
                  visible_area:"80%"
                },
                responsiveLevels:[1240,1024,778,480],
                gridwidth:[1240,1024,778,480],
                gridheight:[730,550,500,450],
                lazyType:"none",
                parallax: {
                  type:"scroll",
                  origo:"enterpoint",
                  speed:400,
                  levels:[5,10,15,20,25,30,35,40,45,50],
                },
                shadow:0,
                spinner:"off",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                  simplifyAll:"off",
                  nextSlideOnWindowFocus:"off",
                  disableFocusListener:false,
                }
              });
            }
          }); /*ready*/
        </script>
      <!-- END REVOLUTION SLIDER -->
      </div>
    </section>

    <!-- Section: divider -->
    <section class="bg-theme-colored">
      <div class="container pt-30 pb-30">
        <div class="call-to-action">
          <div class="row">
            <!-- <div class="col-md-12"> -->
            <div class="col-md-9">
            <h2 class="text-white mt-0"><?php echo getConfig('titulodespuesbanner');?></h2>
 
            </div>
            <div class="col-md-3 text-right sm-text-center"> 
              <a href="frontend/contactanos" class="btn btn-transparent btn-border btn-circled btn-lg mt-5">Contáctanos</a> 
            </div>
          </div>
            <!-- </div> -->
        </div>
      </div>
    </section>
    
    <!-- Section: About -->
    <section>
      <div class="container pb-xs-30">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase mt-0">
              Bienvenidos a nuestra <span class="text-theme-colored">industria</span> </h2>
          
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
              <?php   
             foreach($servicios as $servicio)
            {
            $link = $servicio->id.'-'.$servicio->url;
            echo'<div class="col-xs-12 col-sm-4 col-md-4">';
             echo' <div class="box-hover-effect effect-barlin mb-xs-30">';
                echo'<div class="effect-wrapper">';
                  echo'<div class="thumb">';
                    echo'<img class="img-fullwidth" src="files/servicios/'.$servicio->imagen.'" alt="project">';
                    echo'<div class="overlay-shade bg-theme-colored-transparent-8"></div>';
                  echo'</div>';
                  echo'<div class="featured-content text-center pt-15 pr-10 pl-10 pb-20 border-1px">';
                   
                    echo'<h3>'.$servicio->titulo.'</h3>';
                 
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

     <!-- Divider: choose us -->
    <section class="divider layer-overlay overlay-dark-4" data-background-ratio="0.5" data-bg-img="assets/frontend/slider/inicio.jpg">
      <div class="container pt-80 pb-30">
        <div class="section-title text-center mb-50">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase mt-0 line-height-1 text-white">
              Nosotros <span class="text-theme-colored">Contamos</span> con</h2>
              <p class="text-white"></p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-6">
              <div class="icon-box icon-left mb-50">
                <a class="icon icon-lg pull-left mr-0 flip" href="#">
                  <i class="fa fa-industry text-theme-colored line-height-1"></i>
                </a>
                <h4 class="icon-box-title mb-5 text-white mt-0 line-height-1">A la Vanguardia de lo actual</h4>
                <p class="text-white-f3">Modernos vehículos de transporte.</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-6">
              <div class="icon-box icon-left mb-50">
                <a class="icon icon-lg pull-left mr-0 flip" href="#">
                  <i class="fa fa-road text-theme-colored line-height-1"></i>
                </a>
                <h4 class="icon-box-title mb-5 text-white mt-0 line-height-1">Viaja Seguro</h4>
                <p class="text-white-f3">Seguro de mercadería contra accidentes.</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-6">
              <div class="icon-box icon-left mb-50">
                <a class="icon icon-lg pull-left mr-0 flip" href="#">
                  <i class="fa fa-globe text-theme-colored line-height-1"></i>
                </a>
                <h4 class="icon-box-title mb-5 text-white mt-0 line-height-1">GPS Activo</h4>
                <p class="text-white-f3">Control por telemetría y GPS los 365 días del año.</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-6">
              <div class="icon-box icon-left mb-50">
                <a class="icon icon-lg pull-left mr-0 flip" href="#">
                  <i class="fa fa-truck text-theme-colored line-height-1"></i>
                </a>
                <h4 class="icon-box-title mb-5 text-white mt-0 line-height-1">Vehículos y Maquinarias</h4>
                <p class="text-white-f3">Gran cantidad de vehículos a su disposición.</p>
              </div>
            </div>
          </div>
        </div>
      </div>      
    </section>



      <!-- Section: blog -->
      <section id="blog" class="bg-silver-light">
      <div class="container pb-30">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-uppercase line-height-1 mt-0">Últimos Artículos</h2>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <div class="owl-carousel-3col" data-nav="true">
          <?php		
				  foreach($last_articulos as $ultimo)
					{
            $link = $ultimo->id.'-'.$ultimo->url;
            echo ' <div class="item">';
            echo '<article class="post clearfix bg-white mb-30 border-1px pb-15">';
            echo '  <div class="entry-header-new">';
            echo '    <div class="post-thumb thumb"> <img src="files/articulos/medianas/'.$ultimo->imagen.'" alt="" class="img-responsive img-fullwidth"> </div>';
            echo '    <div class="blog-author"><img src="files/articulos/pequeñas/'.$ultimo->imagen.'" alt=""></div>';
            echo '    <div class="entry-meta meta-absolute text-center p-10">';
            echo '      <div class="display-table">';
            echo '        <div class="display-table-cell">';
            echo '          <ul>';
             $mes = fechaMesLetras($ultimo->created);
             $dia = fechaNumero($ultimo->created);
            echo '            <li><a href="#" class="text-white">'.$mes.'</a></li>';
            echo '            <li><a href="#" class="text-white">'.$dia.'</a></li>';
            echo '          </ul>';
            echo '        </div>';
            echo '      </div>';
            echo '    </div>';
            echo '  </div>';
            echo '  <div class="text-center">';
            echo '    <h3 class="entry-title mt-0 pt-0">'.$ultimo->titulo.'</h3>';
            echo '    <ul class="list-inline entry-date font-12 mt-5">';
          
                        if(strlen($ultimo->introtext) > 50){
                          $ultimo->introtext = substr($ultimo->introtext,0,50)."...";
                      }  
            echo '    <p class="mb-15 mt-15 font-13 pr-15 pl-15">'.$ultimo->introtext.'</p>';
            echo '    <a class="mt-0 text-theme-colored" href="'.$link.'">Leer mas <i class="fa fa-angle-double-right"></i></a>';
            echo '  </div>';
            echo ' </article>';
            echo ' </div>';
            $active="";
             }
            ?>
                       
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!--start Clients Section-->
    <section class="clients bg-theme-colored-yellow">
      <div class="container pt-10 pb-0">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <!-- Section: Clients -->
              <div class="owl-carousel-6col transparent text-center owl-nav-top">
                <?php
                 foreach($clientes as $cliente)
					        	{
                        $link = $cliente->id.'-'.$cliente->url;
                        echo '<div class="item"> <a href="'.$link.'"><img src="files/clientes/'.$cliente->imagen.'" alt=""></a></div>';
                    }
                    ?>
                
        
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

  