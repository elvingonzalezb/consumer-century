function cargaSedes(tipo) {
    id_categoria = $("select[name=id_categoria]").val();
    if(id_categoria=="0")
    {
        alert('Debe elegir una categoria');
        return false;
    }
    else
    {    
        switch(tipo)
        {

            case "principal":
                //$("#id_padre").prop('disabled', 'disabled');
                str = '<select name="id_padre" id="id_padre">';
                str += '<option value="0">-------</option>';
                str += '</select>';
                $("#divPrincipales").html(str);
            break;

            case "sede":
                //$("#id_padre").prop('disabled', false);            
                
                $.ajax({
                    type: 'POST',
                    url: 'mainpanel/ajax/cargaPrincipales',
                    data: {id_categoria: id_categoria},
                    dataType : 'json',
                    success: function(json) {
                        envio=json.dato;
                        cad=envio.split("@@");
                        num=cad[0];
                        str='';       
                        if(num>0)
                        {
                            str = '<select name="id_padre" id="id_padre" class="js-example-basic-single">';
                            str += '<option value="0">Elija la Principal...</option>';
                            for(e=1; e<=num; e++)
                            {
                                dat=cad[e].split("$$");
                                id = dat[0];
                                nombre = dat[1];        
                                str += '<option value="'+id+'">'+nombre+'</option>';                   
                            }
                        }
                        else
                        {
                            str = '<select name="id_padre" id="id_padre">';
                            str += '<option value="0">-------</option>';
                        }
                        str += '</select>';
                        $("#divPrincipales").html(str);
                        $('.js-example-basic-single').select2();
                    }
                });
            break;
        }
    }
}


function cargaPrincipales(id_categoria) {
    if(id_categoria=="0")
    {
        alert('Debe elegir una categoria');
        return false;
    }
    else
    {
        $.ajax({
            type: 'POST',
            url: 'mainpanel/ajax/cargaPrincipales',
            data: {id_categoria: id_categoria},
            dataType : 'json',
            success: function(json) {
                envio=json.dato;
                cad=envio.split("@@");
                num=cad[0];
                str='';       
                if(num>0)
                {
                    str = '<select name="id_padre" id="id_padre" class="js-example-basic-single">';
                    str += '<option value="0">Elija la Principal...</option>';
                    for(e=1; e<=num; e++)
                    {
                        dat=cad[e].split("$$");
                        id = dat[0];
                        nombre = dat[1];        
                        str += '<option value="'+id+'">'+nombre+'</option>';                   
                    }
                }
                else
                {
                    str = '<select name="id_padre" id="id_padre">';
                    str += '<option value="0">-------</option>';
                }
                str += '</select>';
                $("#divPrincipales").html(str);
                $('.js-example-basic-single').select2();
            }
        });
    } // else    
}

function cargaProvincias(id_departamento) {
    if(id_departamento=="0")
    {
        alert('Debe elegir un departamento');
        return false;
    }
    else
    {
        $.ajax({
            type: 'POST',
            url: 'mainpanel/ajax/cargaProvincias',
            data: {id_departamento: id_departamento},
            dataType : 'json',
            success: function(json) {
                envio=json.dato;
                cad=envio.split("@@");
                num=cad[0];
                str='';       
                if(num>0)
                {
                    str = '<select name="id_provincia" id="id_provincia" onchange="cargaDistritos(this.value)">';
                    str += '<option value="0">Elija la Provincia...</option>';
                    for(e=1; e<=num; e++)
                    {
                        dat=cad[e].split("$$");
                        id_subcategoria = dat[0];
                        subcategoria = dat[1];        
                        str += '<option value="'+id_subcategoria+'">'+subcategoria+'</option>';                   
                    }
                }
                else
                {
                    str = '<select name="id_provincia" id="id_provincia">';
                    str += '<option value="0">-------</option>';
                }
                str += '</select>';
                $("#divProvincias").html(str);
            }
        });
    } // else
}

function cargaDistritos(id_provincia) {
    if(id_provincia=="0")
    {
        alert('Debe elegir una provincia');
        return false;
    }
    else
    {
        $.ajax({
            type: 'POST',
            url: 'mainpanel/ajax/cargaDistritos',
            data: {id_provincia: id_provincia},
            dataType : 'json',
            success: function(json) {
                envio=json.dato;
                cad=envio.split("@@");
                num=cad[0];
                str='';       
                if(num>0)
                {
                    str = '<select name="id_distrito" id="id_distrito">';
                    str += '<option value="0">Elija el distrito...</option>';
                    for(e=1; e<=num; e++)
                    {
                        dat=cad[e].split("$$");
                        id_subcategoria = dat[0];
                        subcategoria = dat[1];        
                        str += '<option value="'+id_subcategoria+'">'+subcategoria+'</option>';                   
                    }
                }
                else
                {
                    str = '<select name="id_distrito" id="id_distrito">';
                    str += '<option value="0">-------</option>';
                }
                str += '</select>';
                $("#divDistrito").html(str);
            }
        });
    } // else
}

function agregaSubcategoriaLista() {

    id_categoria = $('#id_categoria_padre').val();

    id_subcategoria = $('#id_subcategoria').val();

    subcats_elegidas = $('#subcats_elegidas').val();

    if(id_categoria=="0")

    {

        alert('Debe elegir primero la Categoria')

    }

    else if(id_subcategoria=="0")

    {

        alert('Debe elegir la subcategoria')

    }

    else

    {

        $.ajax({

            type: 'POST',

            url: 'mainpanel/ajax/agrega_subcat_lista',

            data: {id_categoria: id_categoria, id_subcategoria: id_subcategoria, elegidos: subcats_elegidas},

            dataType : 'json',

            success: function(json) {

                envio = json.dato;

                cad = envio.split("@@");

                categoria = cad[0];

                subcategoria = cad[1];

                id_subcategoria = cad[2];

                se_agrego = cad[3];

                elegidos = cad[4];

                //alert(se_agrego);

                if(se_agrego=="1")

                {

                    str = '<tr id="fila_'+id_subcategoria+'">';

                    str += '<td height="25" align="center" valign="middle">'+categoria+'</td>';

                    str += '<td align="center" valign="middle">'+subcategoria+'</td>';

                    str += '<td align="center" valign="middle"><a href="javascript:quitarSubCatLista(\''+id_subcategoria+'\')">ELIMINAR</a></td>';

                    str += '</tr>';

                    $("table#tablaSubcats tbody").append(str);

                }

                //alert(elegidos);

                $("#subcats_elegidas").val(elegidos);

            }

        });

    }
}

function quitarSubCatLista(id_subcategoria) {

    subcats_elegidas = $('#subcats_elegidas').val();

    $.ajax({

        type: 'POST',

        url: 'mainpanel/ajax/quitar_subcat_lista',

        data: {id_subcategoria: id_subcategoria, elegidos: subcats_elegidas},

        dataType : 'json',

        success: function(json) {

            envio = json.dato;

            cad = envio.split("@@");

            id_subcategoria = cad[0];

            elegidos = cad[1];

            $("#fila_"+id_subcategoria).remove();

            $("#subcats_elegidas").val(elegidos);

        }

    });
}

function cargaSgteSubcategoria(id_categoria) {

    if(id_categoria==="0")

    {

        alert('Elija una subcategoria');

        return false;

    }

    $.ajax({

        type: 'POST',

        url: 'mainpanel/ajax/cargaSgteSubcategoria',

        data: { id_categoria: id_categoria },

        dataType : 'json',

        cache:    false,

        error: function (request, error) {

            console.log(arguments);

            alert(" Can't do because: " + error);

        },

        success: function(json) {            

            sgte = json.sgte;

            $("#orden").val(sgte);

        }

    });
}

function cargaOrdenProducto(id_subcategoria) {

    if(id_subcategoria==="0")

    {

        alert('Elija una subcategoria');

        return false;

    }

    $.ajax({

        type: 'POST',

        url: 'mainpanel/ajax/cargaOrdenProducto',

        data: { id_subcategoria: id_subcategoria },

        dataType : 'json',

        cache:    false,

        error: function (request, error) {

            console.log(arguments);

            alert(" Can't do because: " + error);

        },

        success: function(json) {            

            sgte = json.sgte;

            $("#orden").val(sgte);

        }

    });
}