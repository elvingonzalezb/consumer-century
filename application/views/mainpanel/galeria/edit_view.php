<div>
    <ul class="breadcrumb">
    <li><a href="mainpanel/galeria/listado">Listado de Imagenes de Galeria</a> <span class="divider">/</span></li>
    <li><a href="mainpanel/galeria/nuevo">Nuevo Imagen en galeria</a> <span class="divider">/</span></li>
       
    </ul>
</div>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Editar Imagen de galeria</h2>
            <div class="box-icon"> <a href="javascript:history.back(-1)" class="btn btn-round" title="VOLVER"><i class="icon-arrow-left"></i></a> </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="mainpanel/galeria/actualizar" method="post" enctype="multipart/form-data" onsubmit="return validar_articulo()">
                <fieldset>
                    <legend>Ingrese nueva información de la imagen de  galeria</legend>
                    <?php 
                       if($this->session->userdata('success'))
                        { 
                            echo '<div class="alert alert-success">'; 
                            echo '<button type="button" class="close" data-dismiss="alert">×</button>';
                            echo $this->session->userdata('success');    
                            echo '</div>';     
                            $this->session->unset_userdata('success');
                        }     
                        if($this->session->userdata('error'))  
                        {                        
                            echo '<div class="alert alert-error">';  
                            echo '<button type="button" class="close" data-dismiss="alert">×</button>';
                            echo $this->session->userdata('error'); 
                            echo '</div>';    
                        }   
                        ?>
                     
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Titulo</label>
                            <div class="controls">
                                <input type="text" id="titulo" name="titulo" class="span8 typeahead" value="<?php echo $galeria->titulo;?>" onkeyup="url_amigable('titulo', 'url', 'title'); cuentaChars(this.value, 'contador1', 155)" maxlength="155">
                                <?php  
                                    $aux = 155 - strlen($galeria->titulo) + 1;  
                                 ?>
                                    <label><span id="contador1"><?php echo $aux; ?></span> caracteres restantes</label>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Url</label>
                            <div class="controls">
                                <input type="text" id="url" name="url" class="span8 typeahead" value="<?php echo $galeria->url;?>"> </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Imagen</label>
                            <div class="controls">
                                <div class="span6"><img src="files/galeria/<?php echo $galeria->imagen; ?>" width="300" /></div>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <div class="alert alert-success span10">
                                    <p><strong>La imagen a subir debe tener dimensiones de 1200 x 760 pixeles. Caso contrario la imagen se forzará al tamaño indicado.</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Imagen</label>
                            <div class="controls">
                                <input type="file" name="imggaleria" id="imggaleria"> </div>
                        </div>
                         
                                                    
                            <div class="control-group">
                                <label class="control-label">Estado</label>
                                <div class="controls">
                                    <label class="radio">
                                        <input type="radio" name="state" id="estado1" value="1"
                                         <?php if($galeria->state==1)
                                          echo ' checked="checked"';
                                         ?>> Activo
                                    </label>
                                    <div style="clear:both"></div>
                                    <label class="radio">
                                       <input type="radio" name="state" id="estado2" value="0"
                                        <?php if($galeria->state==0)
                                         echo ' checked="checked"';
                                        ?>> Inactivo 
                                    </label>
                                </div>
                            </div>
                  
                            <div class="control-group">
                                <label class="control-label" for="orden">Orden</label>
                                <div class="controls">
                                    <input type="text" class="" value="<?php echo $galeria->orden; ?>" id="orden" name="orden">  </div>
                            </div>


                               <legend> Parámetros SEO</legend>
                         <div class="control-group">
                            <label class="control-label" for="typeahead">Title</label>
                            <div class="controls">
                                <input type="text" id="title" name="title" class="span8 typeahead" value="<?php echo $galeria->title;?>">
                            </div>
                        </div>
                           <div class="control-group">
                            <label class="control-label" for="typeahead">Description</label>
                            <div class="controls">
                                <input type="text" id="description" name="description" class="span8 typeahead" value="<?php echo $galeria->description;?>">
                            </div>
                        </div>
                         <div class="control-group">
                            <label class="control-label" for="typeahead">keywords</label>
                            <div class="controls">
                                <input type="text" id="keywords" name="keywords" class="span8 typeahead" value="<?php echo $galeria->keywords;?>">
                            </div>
                        </div>
                            <!--                    <legend>Parámetros para SEO</legend>                    <div class="control-group">                        <label class="control-label" for="typeahead">TITLE</label>                        <div class="controls">                            <input type="text" class="span10" id="title" name="title" value="<?php echo $galeria->title; ?>" >                        </div>                    </div>                    <div class="control-group">                        <label class="control-label" for="typeahead">KEYWORDS</label>                        <div class="controls">                            <input type="text" class="span10" id="metakey" name="metakey" value="<?php echo $galeria->metakey?>" >                        </div>                    </div>                    <div class="control-group">                        <label class="control-label" for="typeahead">DESCRIPTION</label>                        <div class="controls">                            <input type="text" class="span10" id="metadesc" name="metadesc" value="<?php echo $galeria->metadesc; ?>" >                        </div>                    </div>                    -->
                            <div class="form-actions">
                                <input type="hidden" name="id" id="id" value="<?php echo $galeria->id; ?>">
                                <input type="submit" class="btn btn-primary" value="ACTUALIZAR"> <a class="btn btn-danger" href="mainpanel/galeria/listado">VOLVER AL LISTADO</a> </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
