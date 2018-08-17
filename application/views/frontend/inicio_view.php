<!-- Start Slider -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
	   <div class="carousel-inner"> 
					<?php		
					$active="active";
					foreach($banners as $banner)
					{
						echo'<div class="carousel-item '.$active.'">';
						echo'<img class="d-block w-100" src="files/banner/'.$banner->imagen.'">';
						echo'<div class="carousel-caption"> ';
						echo'<div class="banner-content d-flex align-items-center"><h1>'.$banner->titulo.'</h1></div>';
						
						echo'</div> ';
						echo'</div>';
				        $active="";
			        }
					?>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
		</div>	
    </div>				 
		<!-- End Slider-->
           		<!-- Start nosotros -->
			<section class="team-area section-gap" id="nosotros">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10"><?php echo $nosotros->titulo?></h1>
								<p>Nosotros ofrecemos servicios de calidad desde 40 años.</p>
							</div>
						</div>
					</div>						
					<div class="row justify-content-center d-flex align-items-center">
						<div class="col-lg-6 justify-content-center">
							<p class="justificar">
								<?php echo $nosotros->fulltext?>
								
							</p>
							<p class="justificar">
								<?php echo $nosotros->fulltext?>
							</p>
						</div>
						<div class="col-lg-6 team-right d-flex justify-content-center">
							<div class="row active-team-carusel">
								<div class="single-team">
								    <div class="thumb">
								        <img class="img-fluid" src="files/generales/<?php echo $nosotros->imagen?>" alt="">
								        <div class="align-items-center justify-content-center d-flex">
											<a href="#"><i class="fab fa-facebook"></i></a>
											<a href="#"><i class="fab fa-twitter"></i></a>
											<a href="#"><i class="fab fa-linkedin"></i></a>
								        </div>
								    </div>
								    <div class="meta-text mt-30 text-center">
									    <h4>Dora Segura</h4>
									    <p>Presidente</p>									    	
								    </div>
								</div>
								<div class="single-team">
								    <div class="thumb">
								        <img class="img-fluid" src="files/generales/nosotros.jpg" alt="">
								        <div class="align-items-center justify-content-center d-flex">
											<a href="#"><i class="fab fa-facebook"></i></a>
											<a href="#"><i class="fab fa-twitter"></i></a>
											<a href="#"><i class="fab fa-linkedin"></i></a>
								        </div>
								    </div>
								    <div class="meta-text mt-30 text-center">
									    <h4>Marlon Tovar</h4>
									    <p>Gerente General</p>			    	
								    </div>
								</div>													
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End nosotros -->

			<!-- Start Servicios -->
			<section class="category-area section-gap" id="servicios">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10"><?php echo $texto_servicio->titulo ?></h1>
								<p><?php echo $texto_servicio->fulltext ?></p>
							</div>
						</div>
					</div>						
					<div class="active-cat-carusel">
						<?php
						foreach($servicios as $servicio)
						{
							$link = $servicio->id.'-'.$servicio->url;
						echo '<div class="item single-cat">';
							echo '<img src="files/servicios/'.$servicio->imagen.'">';
							echo '<p class="date">'."Disponibles: " ."15".'</p>';
							echo '<h4><a href="'.$link.'">'.$servicio->titulo.'</a></h4>';
						echo '</div>';
						}
					?>
	          		</div>												
				</div>	
			</section>
			<!-- End Servicios -->
		

			<!-- start paralax -->
			<section  id="home" data-parallax="scroll" data-image-src="assets/frontend/img/header-bg.jpg">
				<div class="overlay-bg overlay"></div>
				<div class="container">
					<div class="row fullscreen">
						<div class="banner-content d-flex align-items-center col-lg-12 col-md-12">
							<h1>
								<?php echo $paralax->titulo ?> <br>
								Si deseas ir al mar.								
							</h1>
						</div>	
						<div class="head-bottom-meta d-flex justify-content-between align-items-end col-lg-12">
							<div class="col-lg-6 flex-row d-flex meta-right no-padding justify-content-end"></div>
						</div>												
					</div>
				</div>
			</section>
			<!-- End paralax -->	
				
			<!-- Start ultimos articulos -->
			<section class="fashion-area section-gap" id="articulos">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Últimos artículos</h1>
								<p>Aquí encontrará los últimos acontecimientos con respecto a nuestros servicios.</p>
							</div>
						</div>
					</div>					
					<div class="row">
					<?php
						foreach($ultimos as $ultimo)
						{
                        $link = $ultimo->id.'-'.$ultimo->url;
                        echo '<div class="col-lg-3 col-md-6 single-fashion">';
                        echo '<img class="img-fluid" src="files/articulos/'.$ultimo->imagen.'" alt="">';
                        echo '<p class="date">'.$ultimo->created.'</p>';
                        echo '<h4><a href="'.$link.'">'.$ultimo->titulo.'</a></h4>';
                        echo '<p>';
                        echo ''.$ultimo->introtext.'';
                        echo'</p>';
                        echo'<div class="meta-bottom d-flex justify-content-between">';
                        echo '	<p><i class="fas fa-heart"></i> 15 Likes</p>';
                        echo '	<p><i class="far fa-comment"></i> 02 Comments</p>';
                        echo '</div>';									
						echo '</div>';
						}
					?>
						<a href="#" class="primary-btn load-more pbtn-2 text-uppercase mx-auto mt-60">Leer mas </a>						
					</div>
				</div>	
			</section>
			<!-- End ultims articulos -->
			
<!-- Start Servicios -->
			<section class="category-area section-gap" id="flota">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Nuestra flota</h1>
								<p>Orgullosos de servirles</p>
							</div>
						</div>
					</div>						
					<div class="active-cat-carusel">
						<?php
						foreach($clientes as $cliente)
						{
							$link = $cliente->id.'-'.$cliente->url;
						echo '<div class="item single-cat">';
							echo '<p class="date">'."Disponibles: " ."15".'</p>';
							echo '<h4><a href="'.$link.'">'.$cliente->nombre.'</a></h4>';
                            echo '<img src="files/clientes/'.$cliente->imagen.'">';
               				echo '</div>';
						}
					?>
	          		</div>												
				</div>	
			</section>
			<!-- End Servicios -->