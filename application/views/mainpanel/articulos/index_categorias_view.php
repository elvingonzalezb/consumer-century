<div>
    <ul class="breadcrumb">
        <li><a href="mainpanel/articulos/categorias">Categorias</a> <span class="divider">/</span></li>
        <li><a href="mainpanel/articulos/nuevacategoria">Nueva Categoria</a> <span class="divider">/</span></li>
        <li><a href="mainpanel/articulos/listado">Listado de Articulos</a> <span class="divider">/</span></li>
        <li><a href="mainpanel/articulos/nuevo">Nuevo Articulo</a> <span class="divider">/</span></li>
        
    </ul>
</div>

<div class="row-fluid sortable">
    <?php
    if (isset($resultado) && ($resultado == "success")) {
        echo '<div class="alert alert-success">';
        echo '<button type="button" class="close" data-dismiss="alert">×</button>';
        echo '<strong>RESULTADO:</strong> La operación se realizó con éxito';
        echo '</div>';
    }
    ?>    
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> Listado de Categorías</h2>
            <div class="box-icon">
                <a href="javascript:history.back(-1)" class="btn btn-round" title="VOLVER"><i class="icon-arrow-left"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th width="5%">Nro</th>
                        <th width="30%">CATEGORIA</th>
                        <th width="15%">NUM. ARTÍCULOS</th>
                        <th width="10%">ORDEN</th>
                        <th width="10%">ESTADO</th>
                        <th width="30%">ACCION</th>
                    </tr>
                </thead>   
                <tbody>
                <?php
                    $orden = 1;
                    foreach($categorias as $categoria)
                    {
                        echo '<tr>';
                        echo '<td>'.$orden.'</td>';
                        echo '<td>'.$categoria['categoria'].'</td>';
                        echo '<td>'.$categoria['num_articulos'].'</td>';
                        echo '<td>'.$categoria['orden'].'</td>';
                        if($categoria['estado']=="A")
                        {
                            echo '<td><span class="label label-success">ACTIVO</span></td>';
                        }
                        else
                        {
                            echo '<td><span class="label label-important">INACTIVO</span></td>';
                        }
                        echo '<td>';
                        echo '<a class="btn btn-info" href="mainpanel/articulos/editCategoria/'.$categoria['id'].'"><i class="icon-edit icon-white"></i>  Editar</a> ';
                        echo '<a class="btn btn-danger" href="javascript:deleteCategoriaArticulo(\''.$categoria['id'].'\')"><i class="icon-trash icon-white"></i>Borrar</a>';
                        echo '</td>';
                        echo '</tr>';
                        $orden++;
                    }
                ?>
                </tbody>
            </table>            
        </div>
     </div><!--/span-->
</div><!--/row-->                