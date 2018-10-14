function cuentaChars(cad, contador, max) {
    tamagno = cad.length;
    diff = max - tamagno;
    $("#"+contador).html(diff);
}

function ocultaCampos(tipo) {
    switch(tipo)
    {
        case "imagen":
            $(".tipoImagen").show();
            $(".tipoCodigo").hide();
        break;

        case "codigo":
            $(".tipoImagen").hide();
            $(".tipoCodigo").show();
        break;
    }
}

function deleteArticulo(id_articulo) {
    $('#tituloModal').html('Esta a punto de borrar este artículo!');
    $('#cuerpoModal').html('<p>Esta accion no puede deshacerse. Esta seguro que quiere hacerlo?</p>');
    str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';
    str += '<a href="mainpanel/articulos/borrar/'+id_articulo+'" class="btn btn-danger">BORRAR</a>';
    $('#botoneraModal').html(str);
    $('#botoneraModal').show();
    $('#myModal').modal('show');   
}
function deleteServicio(id_servicio) {
    $('#tituloModal').html('Esta a punto de borrar este servicio!');
    $('#cuerpoModal').html('<p>Esta accion no puede deshacerse. Esta seguro que quiere hacerlo?</p>');
    str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';
    str += '<a href="mainpanel/servicios/borrar/'+id_servicio+'" class="btn btn-danger">BORRAR</a>';
    $('#botoneraModal').html(str);
    $('#botoneraModal').show();
    $('#myModal').modal('show');   
}

function deleteInformativa(id) {
    $('#tituloModal').html('Esta a punto de borrar esta Información general!');
    $('#cuerpoModal').html('<p>Esta seguro que quiere hacerlo?</p>');
    str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';
    str += '<a href="mainpanel/informativa/borrar/'+id+'" class="btn btn-danger">BORRAR</a>';
    $('#botoneraModal').html(str);
    $('#botoneraModal').show();
    $('#myModal').modal('show');   
}


function deleteBanner(id_banner) {
    $('#tituloModal').html('Esta a punto de borrar este banner!');
    $('#cuerpoModal').html('<p>Esta seguro que quiere hacerlo?</p>');
    str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';
    str += '<a href="mainpanel/banners/delete/'+id_banner+'" class="btn btn-danger">BORRAR</a>';
    $('#botoneraModal').html(str);
    $('#botoneraModal').show();
    $('#myModal').modal('show');   
}
function deleteUsuario(id_usuario) {
    $('#tituloModal').html('Esta a punto de borrar este Usuario!');
    $('#cuerpoModal').html('<p>Esta accion no puede deshacerse. Esta seguro que quiere hacerlo?</p>');
    str = '<a href="#" class="btn " data-dismiss="modal">CANCELAR</a>';
    str += '<a href="mainpanel/usuarios/delete/'+id_usuario+'" class="btn btn-danger">BORRAR</a>';
    $('#botoneraModal').html(str);
    $('#botoneraModal').show();
    $('#myModal').modal('show');   
}

function deleteClientes(id_cliente) {
    $('#tituloModal').html('Esta a punto de borrar este Cliente!');
    $('#cuerpoModal').html('<p>Esta accion no puede deshacerse. Esta seguro que quiere hacerlo?</p>');
    str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';
    str += '<a href="mainpanel/clientes/delete/'+id_cliente+'" class="btn btn-danger">BORRAR</a>';
    $('#botoneraModal').html(str);
    $('#botoneraModal').show();
    $('#myModal').modal('show');   
}
function deleteGaleria(id_galeria) {
    $('#tituloModal').html('Esta a punto de borrar este Imagen de la Galeria!');
    $('#cuerpoModal').html('<p>Esta accion no puede deshacerse. Esta seguro que quiere hacerlo?</p>');
    str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';
    str += '<a href="mainpanel/galeria/delete/'+id_galeria+'" class="btn btn-danger">BORRAR</a>';
    $('#botoneraModal').html(str);
    $('#botoneraModal').show();
    $('#myModal').modal('show');   
}

function deleteFlota(id_flota) {
    $('#tituloModal').html('Esta a punto de borrar esta la flota!');
    $('#cuerpoModal').html('<p>Esta accion no puede deshacerse. Esta seguro que quiere hacerlo?</p>');
    str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';
    str += '<a href="mainpanel/flota/delete/'+id_flota+'" class="btn btn-danger">BORRAR</a>';
    $('#botoneraModal').html(str);
    $('#botoneraModal').show();
    $('#myModal').modal('show');   
}


function mostrarBanner(imagen, titulo) {
    $('#tituloModal').html(titulo);
    img = '<img src="files/banner/' +imagen+ '" />';
    $('#cuerpoModal').html(img);
    $('#botoneraModal').hide();
    $('#myModal').modal('show'); 
}


function tagFormateado(campo, formato) {
    var nombreFormateado = "";
    var nombre = $("#"+campo).val();
    primerFormateo = quitaAcentos(nombre);
    segundoFormateo = primerFormateo.toLowerCase(nombre);
    arrayNombre = segundoFormateo.split(" ");
    for($i=0; $i<arrayNombre.length; $i++) 
    {
        if(arrayNombre.length==1)
        {
            nombreFormateado = arrayNombre[$i];
        }
        else if($i<arrayNombre.length-1)
        {
            nombreFormateado = nombreFormateado.concat(arrayNombre[$i])+"-";
        }
        else if($i==arrayNombre.length-1) {
            nombreFormateado = nombreFormateado.concat(arrayNombre[$i]);
        }
    }
    $("#"+formato).val(nombreFormateado); 
}

function url_amigable(campo, url , title) {
    var nombreFormateado = "";
    //var nombre = document.getElementById(campo).value;
    var nombre = $("#"+campo).val();
    primerFormateo = quitaAcentos(nombre);
    segundoFormateo = primerFormateo.toLowerCase(nombre);
    arrayNombre = segundoFormateo.split(" ");
    for($i=0; $i<arrayNombre.length; $i++) 
    {
        if(arrayNombre.length==1)
        {
            nombreFormateado = arrayNombre[$i];
        }
        else if($i<arrayNombre.length-1)
        {
            nombreFormateado = nombreFormateado.concat(arrayNombre[$i])+"-";
        }
        else if($i==arrayNombre.length-1) {
            nombreFormateado = nombreFormateado.concat(arrayNombre[$i]);
        }
    }
    //document.getElementById(title).value = document.getElementById(campo).value;
    //document.getElementById(url).value = nombreFormateado;
    $("#"+title).val(nombre);
    $("#"+url).val(nombreFormateado);
}

function quitaAcentos(str){
    for (var i=0;i<str.length;i++)
    {
        //Sustituye "á é í ó ú"
        if (str.charAt(i)=="á") str = str.replace(/á/,"a");
        if (str.charAt(i)=="é") str = str.replace(/é/,"e");
        if (str.charAt(i)=="í") str = str.replace(/í/,"i");
        if (str.charAt(i)=="ó") str = str.replace(/ó/,"o");
        if (str.charAt(i)=="ú") str = str.replace(/ú/,"u");
        if (str.charAt(i)=="Á") str = str.replace(/Á/,"a");
        if (str.charAt(i)=="É") str = str.replace(/É/,"e");
        if (str.charAt(i)=="Í") str = str.replace(/Í/,"i");
        if (str.charAt(i)=="Ó") str = str.replace(/Ó/,"o");
        if (str.charAt(i)=="Ú") str = str.replace(/Ú/,"u");
        if (str.charAt(i)=="ñ") str = str.replace(/ñ/,"n");
        if (str.charAt(i)=="Ñ") str = str.replace(/Ñ/,"n");
        if (str.substr(i,1)=="(") str = str.replace("(","");
        if (str.substr(i,1)==")") str = str.replace(")","");
        if (str.substr(i,1)=="/") str = str.replace("/","");
        if (str.substr(i,1)=="-") str = str.replace(" - ","-");
        if (str.substr(i,1)=="-") str = str.replace("-","");
        if (str.substr(i,1)=="&") str = str.replace("&","");
    }
    return str;
}




/*
function valida_correo_cli() {
    msgCli=$("#msgCli").val();
    if(msgCli===""){
        alert("Debe ingresar el mensaje que va a enviar");
        $("#msgCli").focus();        
        return false;
    }
}

function valida_servicio() {
    nombre=$("#nombre").val();
    if(nombre===""){
        bootbox.alert("Ingrese el nombre del servicio.");
        $("#nombre").focus();        
        return false;
    }

    url=$("#url").val();
    if(url===""){
        bootbox.alert("Ingrese la url del servicio.");
        $("#url").focus();        
        return false;
    }

    sumilla     = $("#cke_sumilla iframe").contents().find('body').html();
    sumilla     = sumilla.replace(/<[^>]+>/g,'');
    if(sumilla===""){
        bootbox.alert('Llene un resumen del servicio.');
        $("#sumilla").focus();
        return false;
    }

    contenido     = $("#cke_contenido iframe").contents().find('body').html();
    contenido     = contenido.replace(/<[^>]+>/g,'');
    if(contenido===""){
        bootbox.alert('Llene el contenido del servicio.');
        $("#contenido").focus();
        return false;
    }

    foto=$("#foto").val();
    if(foto===""){
        bootbox.alert("Debe subir una imagen para el servicio.");
        $("#foto").focus();
        return false;
    }

    icono=$("#icono").val();
    if(icono===""){
        bootbox.alert("Debe subir una imagen para usar como icono de servicio.");
        $("#icono").focus();
        return false;
    }
}


function concatena(id)
{
    id_eliminar=$("#id_eliminar").val();
    id=$("#"+id).val();
    if($("#"+id).is(':checked')===false){
            cad=id_eliminar.split("##");
            rt=cad.length;
            cont2=0;
            for(e=0;e<rt;e++){
                    id_1=cad[e];
                    if(id!==id_1){
                            cont2+=1;
                            if(cont2===1){
                                    str=id_1;
                            }else{
                                    str=str+'##'+id_1;
                            }
                    }
            }
            if(cont2===0){str='';}
    }else{
            if(id_eliminar===''){
                    str=id;                             
            }else{
                    str=id_eliminar+'##'+id;
            }
    }

    $("#id_eliminar").val(str);    
}
  $(document).ready(function() { 
    //$(".dropdown-menu").hide();
      Calendar.setup({
        inputField : "fecha_inicio",
        trigger    : "trigger",
        dateFormat : "%d/%m/%Y",
        onSelect   : function() { this.hide() }
      });    
      
      Calendar.setup({
        inputField : "fecha_fin",
        trigger    : "trigger1",
        dateFormat : "%d/%m/%Y",
        onSelect   : function() { this.hide() }
      });     
      
    $("#capa_ordenamiento_productos").sortable({
      handle : '.handle',
      update : function () {
        var order = $(this).sortable('serialize');
        alert(order);
        ordProductos(order);  
        //$("#capa_ordenamiento_productos").load("mainpanel/catalogo/ordenar_productos/"+order);
      }
    });
    
    $(".fila_precio").hide();
    $(".fila_precio:eq(0)").show();
    
    num_precios=$("#num_precios").val();    
    for(e=0;e<num_precios;e++){
        $(".fila_precio:eq("+e+")").show();
    }

});

*/