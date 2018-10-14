<div>
   <ul class="breadcrumb">
  <li><a href="mainpanel/clientes/editTexto/clientes">Editar Texto</a> <span class="divider">/</span></li>
      <li><a href="mainpanel/clientes/listado">Listado de Clientes</a> <span class="divider">/</span></li>
      <li><a href="mainpanel/clientes/nuevo">Nuevo Cliente</a> <span class="divider">/</span></li>
   </ul>
</div>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Nuevo Cliente</h2>
            <div class="box-icon"> <a href="javascript:history.back(-1)" class="btn btn-round" title="VOLVER"><i class="icon-arrow-left"></i></a> </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="mainpanel/clientes/grabar" method="post" enctype="multipart/form-data" onsubmit="return validar_articulo()">
                <fieldset>
                    <legend>Ingrese los datos del nuevo servicio</legend>
            <?php      
                  if($this->session->userdata('success'))   
                  {
                   echo '<div class="alert alert-success">'; 
                   echo '<button type="button" class="close" data-dismiss="alert">×</button>'; 
                   echo $this->session->userdata('success'); 
                   echo '</div>';  $this->session->unset_userdata('success');  
                   }   
                   if($this->session->userdata('error')) 
                   {      
                   echo '<div class="alert alert-error">'; 
                   echo '<button type="button" class="close" data-dismiss="alert">×</button>'; 
                   echo $this->session->userdata('error');   
                   echo '</div>';    
                   $this->session->unset_userdata('error'); 
                   }     
            ?>
                  
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Nombre</label>
                            <div class="controls">
                                <input type="text" id="nombre" name="nombre" class="span8 typeahead" value="" onkeyup="url_amigable('nombre', 'url', 'title'); cuentaChars(this.value, 'contador1', 155)" maxlength="155">
                                <label><span id="contador1">155</span> caracteres restantes</label>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Url</label>
                            <div class="controls">
                                <input type="text" id="url" name="url" class="span8 typeahead" value=""> </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <div class="alert alert-success span10">
                                    <p><strong>La imagen a subir debe tener dimensiones de 240 x 120 pixeles. Caso contrario la imagen se forzará al tamaño indicado.</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Imagen</label>
                            <div class="controls">
                                <input type="file" name="imagen" id="imagen"> </div>
                        </div>
                                       
                   
                        <div class="control-group">
                             <label class="control-label">Estado</label>
                            <div class="controls">
                                <label class="radio">
                                    <input type="radio" name="state" id="estado1" value="1" checked="checked"> Activo </label>
                                <div style="clear:both"></div>
                                <label class="radio">
                                <input type="radio" name="state" id="estado2" value="0"> Inactivo </label>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="fecha">Orden</label>
                            <div class="controls">
                              <input type="text" class="" value="" id="orden" name="orden"> 
                            </div>
                        </div>
  
                        <legend> Parámetros SEO</legend>
                         <div class="control-group">
                            <label class="control-label" for="typeahead">Title</label>
                            <div class="controls">
                                <input type="text" id="title" name="title" class="span8 typeahead" value="">
                            </div>
                        </div>
                           <div class="control-group">
                            <label class="control-label" for="typeahead">Description</label>
                            <div class="controls">
                                <input type="text" id="description" name="description" class="span8 typeahead" value="">
                            </div>
                        </div>
                         <div class="control-group">
                            <label class="control-label" for="typeahead">keywords</label>
                            <div class="controls">
                                <input type="text" id="keywords" name="keywords" class="span8 typeahead" value="">
                            </div>
                        </div>
                        <!--                    <legend>Parámetros para SEO</legend>                    <div class="control-group">                        <label class="control-label" for="typeahead">TITLE</label>                        <div class="controls">                            <input type="text" class="span10" id="title" name="title" value="" >                        </div>                    </div>                    <div class="control-group">                        <label class="control-label" for="typeahead">KEYWORDS</label>                        <div class="controls">                            <input type="text" class="span10" id="metakey" name="metakey" value="" >                        </div>                    </div>                    <div class="control-group">                        <label class="control-label" for="typeahead">DESCRIPTION</label>                        <div class="controls">                            <input type="text" class="span10" id="metadesc" name="metadesc" value="" >                        </div>                    </div>                    -->
                        <div class="form-actions">
                            <input type="submit" class="btn btn-primary" value="GRABAR"> <a class="btn btn-danger" href="mainpanel/clientes/listado">VOLVER AL LISTADO</a> </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>