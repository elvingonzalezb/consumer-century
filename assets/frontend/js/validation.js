function validaRecuperar() {
    emailLogin = $("#emailLogin").val();
    if(emailLogin==="")
    {
        $.sweetModal({
            content: 'Debe ingresar el correo electrónico con el que se registró.',
            icon: $.sweetModal.ICON_ERROR,
            buttons: [
                {
                    label: 'CERRAR',
                    classes: 'redB'
                }
            ]
        });
        return false;       
    }    
}

function validaLogin() {
    emailLogin = $("#emailLogin").val();
    if(emailLogin=="")
    {
        $.sweetModal({
            content: 'Debe ingresar su correo electrónico',
            icon: $.sweetModal.ICON_ERROR,
            buttons: [
                {
                    label: 'CERRAR',
                    classes: 'redB'
                }
            ]
        });
        $("#emailLogin").focus();
        return false;         
    }

    claveLogin = $("#claveLogin").val();
    if(claveLogin=="")
    {
        $.sweetModal({
            content: 'Debe ingresar su clave',
            icon: $.sweetModal.ICON_ERROR,
            buttons: [
                {
                    label: 'CERRAR',
                    classes: 'redB'
                }
            ]
        });
        $("#claveLogin").focus();
        return false;         
    }
}

function validaBusqueda() {
    nombreSearch = $("#nombre").val();
    if(nombreSearch=="")
    {
        $.sweetModal({
            content: 'Para poder realizar una búsqueda ingrese el nombre de una empresa o parte de el.',
            icon: $.sweetModal.ICON_ERROR,
            buttons: [
                {
                    label: 'CERRAR',
                    classes: 'redB'
                }
            ]
        });
        return false;
    }
}

function validaSearchHome() {
    nombreSearch = $("#cadenaSearch").val();
    if(nombreSearch=="")
    {
        $.sweetModal({
            content: 'Para poder realizar una búsqueda ingrese el nombre de una empresa o parte de el.',
            icon: $.sweetModal.ICON_ERROR,
            buttons: [
                {
                    label: 'CERRAR',
                    classes: 'redB'
                }
            ]
        });
        return false;
    }
    if(nombreSearch.length<4)
    {
        $.sweetModal({
            content: 'Para poder realizar una búsqueda debes ingresar al menos 4 letras que sean parte del nombre de la empresa o negocio que estas buscando.',
            icon: $.sweetModal.ICON_ERROR,
            buttons: [
                {
                    label: 'CERRAR',
                    classes: 'redB'
                }
            ]
        });
        return false;        
    }
}

function validaConsulta() {
    nombre = $("#nombre").val();
    apellidos = $("#apellidos").val();
    telefono = $("#telefono").val();
    email = $("#email").val();
    mensaje_consulta = $("#mensaje_consulta").val();
  
    if(nombre=="")
    {
        swal('Por favor!',
             'Debe ingresar su nombre!',
             'success');
        return false;
    }

    if(apellidos=="")
    {
        swal("Debe ingresar sus apellidos");
        return false;
    }

    if(telefono=="")
    {
        swal("Debe ingresar su teléfono");
        return false;
    }

    if(email=="")
    {
        swal("Debe ingresar su correo electrónico");
        return false;
    }
    if(!chequea_email(email))
    {
        swal("Ingrese un correo electrónico válido");
        return false;
    }
    if(mensaje_consulta==="")
    {
        $.sweetModal({
            content: 'Debe indicar cual es su consulta',
            icon: $.sweetModal.ICON_ERROR,
            buttons: [
                {
                    label: 'CERRAR',
                    classes: 'redB'
                }
            ]
        });
        return false;         
    } 
}

function validaContactenos() {
    nombre = $("#nombre").val();
    apellido = $("#apellido").val();
    email = $("#email").val();
    telefono = $("#telefono").val();
    mensaje = $("#mensaje").val();
  
    if(nombre=="")
    {
        swal({type: 'error',
          title: '¡Campo Requerido!',
          text: 'Debe ingresar su nombre'})
          return false;
        
    }

    if(apellido=="")
    {
        
     swal({type: 'error',
          title: '¡Campo Requerido!',
          text: 'Debe ingresar su apellido'})
          return false;
    }
    if(email=="")
    {
        swal({type: 'error',
             title: '¡Campo Requerido!',
             text: 'Debe ingresar correo electrónico'})
            return false;
    }
    if(!chequea_email(email))
    {
        swal({type: 'error',
             title: '¡Campo Invalido!',
             text: 'Debe ingresar correo electrónico válido'})
             return false;
    }
    if(telefono=="")
    {
        swal({type: 'error',
          title: '¡Campo Requerido!',
          text: 'Debe ingresar su teléfono'})
          return false;
    }
      if(isNaN(telefono))
    {
        swal({type: 'error',
             title: '¡Campo Invalido!',
             text: 'Debe ingresar solo números'})
             return false;
    }

  
    if(mensaje=="")
    {
          swal({type: 'error',
          title: '¡Campo Requerido!',
          text: 'Debe ingresar su mensaje'})
          return false;        
    }     
}

function validaRegistro() {
	//swal("Hello world!");
	nombre = $("#nombre").val();
	apellidos = $("#apellidos").val();
	telefono = $("#telefono").val();
	email = $("#email").val();
	clave = $("#clave").val();
	clave2 = $("#clave2").val();

	if(nombre=="")
	{
		swal("Debe ingresar su nombre");
		return false;
	}

	if(apellidos=="")
	{
		swal("Debe ingresar sus apellidos");
		return false;
	}

    if(telefono=="")
    {
        swal("Debe ingresar su teléfono");
        return false;
    }

    if(email=="")
    {
        swal("Debe ingresar su correo electrónico");
        return false;
    }
    if(!chequea_email(email))
    {
        swal("Ingrese un correo electrónico válido");
        return false;
    }

    if(clave=="")
    {
        swal("Debe crear una clave");
        return false;
    }
    if(clave2=="")
    {
        swal("Vuelva a ingresar la clave");
        return false;
    }
    if(clave!=clave2)
    {
        swal("Las claves son diferentes");
        return false;
    }
}

function chequea_email(emailStr) {
    if(emailStr=="")
    {
        return false;
    }   
    /* Verificar si el email tiene el formato user@dominio. */
    var emailPat=/^(.+)@(.+)$/ 
    /* Verificar la existencia de caracteres. ( ) < > @ , ; : \ " . [ ] */
    var specialChars="\\(\\)<>@,;:\\\\\\\"\\.\\[\\]" 
    /* Verifica los caracteres que son válidos en una dirección de email */
    var validChars="\[^\\s" + specialChars + "\]" 
    var quotedUser="(\"[^\"]*\")" 
    /* Verifica si la dirección de email está representada con una dirección IP Válida */ 
    var ipDomainPat=/^\[(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})\]$/
    /* Verificar caracteres inválidos */ 
    var atom=validChars + '+'
    var word="(" + atom + "|" + quotedUser + ")"
    var userPat=new RegExp("^" + word + "(\\." + word + ")*$")
    //domain, as opposed to ipDomainPat, shown above. */
    var domainPat=new RegExp("^" + atom + "(\\." + atom +")*$")
    var matchArray=emailStr.match(emailPat)
    if (matchArray==null)
    {
        return false
    }
    var user=matchArray[1]
    var domain=matchArray[2]
    // Si el user "user" es valido 
    if (user.match(userPat)==null)
    {
        // Si no
        return false
    }
    /* Si la dirección IP es válida */
    var IPArray=domain.match(ipDomainPat)
    if (IPArray!=null)
    {
        for (var i=1;i<=4;i++)
        {
            if (IPArray[i]>255)
            {
            return false
            }
        }
        //return true
    }
    var domainArray=domain.match(domainPat)
    if (domainArray==null)
    {
        return false
    }
    var atomPat=new RegExp(atom,"g")
    var domArr=domain.match(atomPat)
    var len=domArr.length
    if (domArr[domArr.length-1].length<2 || domArr[domArr.length-1].length>3) 
    {
        return false
    }
    if (len<2)
    {
        return false
    }
    return true;
}// JavaScript Document

function muestraAlert(){
	swal("Good job!", "You clicked the button!", "success");
}

function actualizaMarcadores(swLat, swLng, neLat, neLng) {
    //alert('swLat:'+swLat+' / swLng:'+swLng+' / neLat:'+neLat+' / neLng:'+neLng)
    $.ajax({
        type: 'POST',
        data: { swLat:swLat, swLng:swLng, neLat:neLat, neLng:neLng },
        url: 'frontend/ajax/marcadores',
        dataType : 'json',
        success:  function (json) {
            num_marcadores = json.num_resultados;
            datos = json.datos;
            //alert(num_marcadores);
            var infoBubble = new InfoBubble({ 
                //minWidth: 380,
                maxWidth: 400,
                minHeight:220,
                maxHeight:400,
                borderRadius: 10,
                arrowSize: 20,
                hideCloseButton: false,
                arrowPosition: 50,
                padding: 10,
                backgroundClassName: 'phoney',
                arrowStyle: 0
            });
            
            var losmarcadores = [];

            $.each(datos, function () {
                //console.log(this.nombre);
                id = this.id;
                nombre = this.nombre;
                url = this.url;
                logo = this.logo;
                direccion = this.direccion;
                latitud_punto = parseFloat(this.latitud_punto);
                longitud_punto = parseFloat(this.longitud_punto);
                ubigeo = this.ubigeo;
                telefono = this.telefono;
                email = this.email;
                linkDetalle = url + '-' +id;

                var punto = new google.maps.LatLng(latitud_punto, longitud_punto);
                var marker = new google.maps.Marker({
                    position: punto,
                    map: MYMAP.map,
                    animation:  google.maps.Animation.DROP,
                    icon: 'assets/frontend/mapas/iconos/basico50azul.png',
                    title:nombre
                });                
                /*
                marker = new RichMarker({
                  position: punto,
                  map: MYMAP.map,
                  draggable: false,
                  content: '<div class="marcador"><img src="files/logos/'+logo+'"></div>'
                  });
                */                
                html = '<div class="mapWindow">';
                    html += '<div class="infoWindowIzq"><a href="'+linkDetalle+'" target="_blank"><img src="https://www.misticadigital.com/directorio/files/logos/'+logo+'" border="0" /></a></div>';
                    html += '<div class="infoWindowDer">';
                        html += '<h3><a href="'+linkDetalle+'" target="_blank">'+nombre+'</a></h3>';
                        html += '<div class="subtituloInfoWindow">';
                        html += '<strong>Telefono:</strong> ' + telefono + '<br>';
                        html += '<strong>Email:</strong> ' + email + '<br>';
                        html += '<strong>Direccion:</strong> ' + direccion + '<br>';
                        html += ubigeo;                        
                        html += '<a href="'+linkDetalle+'">MAS INFORMACION</a>';
                        html += '</div>';
                    html += '</div>';
                html += '</div>';
                
                losmarcadores.push(marker);
                //bindInfoWindow(marker, MYMAP.map, infoWindow, html);
                bindInfoBubble(marker, MYMAP.map, infoBubble, html);                
            });
            
            centro = MYMAP.map.getCenter();
            latitudCentro = centro.lat();
            longitudCentro = centro.lng();
            zoomCurrent = MYMAP.map.getZoom();
            var mcOptions = {gridSize: 50, maxZoom: 15};
            var opcionesCluster = {
                gridSize:50,
                minimumClusterSize: 4,
                maxZoom: 15,
                styles: estilos_cluster,
                zoomOnClick: true,
                title: 'Haga click para ver los anuncios en esta zona',
                calculator: function(markers, numStyles) {
                // Custom style can be returned here
                    return {
                        text: markers.length,
                        index: numStyles
                    };
                }
            }
            //MYMAP.clearMarkers();
            var markerCluster = new MarkerClusterer(MYMAP.map, losmarcadores, opcionesCluster);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert(jqXHR.status)
        }
    });
}

function validaSearch() {
    cadenaSearch = $('#cadenaSearch').val();
    id_rubro = $("#id_rubro").val();
    if(cadenaSearch=="")
    {
        swal('Debe ingresar el nombre de la empresa o negocio que desea buscar');
        return false;
    }
    if(cadenaSearch.length<4)
    {
        swal('El nombre de la empresa que busca debe tener al menos 4 caracteres');
        return false;
    }    
}

function actualizaMarcadoresSearch(swLat, swLng, neLat, neLng, cadenaSearch, id_rubro) {
    var bounds = MYMAP.map.getBounds();
    var swPoint = bounds.getSouthWest();
    var nePoint = bounds.getNorthEast();
    // Now, each individual coordinate
    var swLat = swPoint.lat();
    var swLng = swPoint.lng();
    var neLat = nePoint.lat();
    var neLng = nePoint.lng();

    $.ajax({
        type: 'POST',
        data: { swLat:swLat, swLng:swLng, neLat:neLat, neLng:neLng, cadena:cadenaSearch, id_rubro:id_rubro },
        url: 'frontend/ajax/marcadoresSearch',
        dataType : 'json',
        success:  function (json) {
            num_marcadores = json.num_resultados;
            datos = json.datos;
            //alert(num_marcadores);
            var infoBubble = new InfoBubble({ 
                //minWidth: 380,
                maxWidth: 400,
                minHeight:220,
                maxHeight:400,
                borderRadius: 10,
                arrowSize: 20,
                hideCloseButton: false,
                arrowPosition: 50,
                padding: 10,
                backgroundClassName: 'phoney',
                arrowStyle: 0
            });
            
            var losmarcadores = [];


            $.each(datos, function () {
                console.log(this.nombre);
                id = this.id;
                nombre = this.nombre;
                url = this.url;
                logo = this.logo;
                direccion = this.direccion;
                latitud_punto = parseFloat(this.latitud_punto);
                longitud_punto = parseFloat(this.longitud_punto);
                ubigeo = this.ubigeo;
                telefono = this.telefono;
                email = this.email;
                linkDetalle = url + '-' +id;

                var punto = new google.maps.LatLng(latitud_punto, longitud_punto);
                var marker = new google.maps.Marker({
                    position: punto,
                    map: MYMAP.map,
                    animation:  google.maps.Animation.DROP,
                    icon: 'assets/frontend/mapas/iconos/basico50azul.png',
                    title:nombre
                });                
                /*
                marker = new RichMarker({
                  position: punto,
                  map: MYMAP.map,
                  draggable: false,
                  content: '<div class="marcador"><img src="files/logos/'+logo+'"></div>'
                  });
                */                
                html = '<div class="mapWindow">';
                    html += '<div class="infoWindowIzq"><a href="'+linkDetalle+'" target="_blank"><img src="https://www.misticadigital.com/directorio/files/logos/'+logo+'" border="0" /></a></div>';
                    html += '<div class="infoWindowDer">';
                        html += '<h3><a href="'+linkDetalle+'" target="_blank">'+nombre+'</a></h3>';
                        html += '<div class="subtituloInfoWindow">';
                        html += '<strong>Telefono:</strong> ' + telefono + '<br>';
                        html += '<strong>Email:</strong> ' + email + '<br>';
                        html += '<strong>Direccion:</strong> ' + direccion + '<br>';
                        html += ubigeo;                        
                        html += '<a href="'+linkDetalle+'">MAS INFORMACION</a>';
                        html += '</div>';
                    html += '</div>';
                html += '</div>';
                
                losmarcadores.push(marker);
                //bindInfoWindow(marker, MYMAP.map, infoWindow, html);
                bindInfoBubble(marker, MYMAP.map, infoBubble, html);                
            });
            
            centro = MYMAP.map.getCenter();
            latitudCentro = centro.lat();
            longitudCentro = centro.lng();
            zoomCurrent = MYMAP.map.getZoom();
            var mcOptions = {gridSize: 50, maxZoom: 15};
            var opcionesCluster = {
                gridSize:50,
                minimumClusterSize: 4,
                maxZoom: 15,
                styles: estilos_cluster,
                zoomOnClick: true,
                title: 'Haga click para ver los anuncios en esta zona',
                calculator: function(markers, numStyles) {
                // Custom style can be returned here
                    return {
                        text: markers.length,
                        index: numStyles
                    };
                }
            }
            //MYMAP.clearMarkers();
            var markerCluster = new MarkerClusterer(MYMAP.map, losmarcadores, opcionesCluster);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert(jqXHR.status)
        }
    });
}

function clearMap() {
    var markers = [];
    var opcionesCluster = {

    }
    var markerCluster = new MarkerClusterer(MYMAP.map, markers, opcionesCluster);    
}

function cargaProvincias(departamento) {
    if(departamento=="0")
    {
        alert('Debe elegir un departamento');
        return false;
    }
    else
    {
        $.ajax({
            type: 'POST',
            url: 'frontend/ajax/cargaProvincias',
            data: {departamento: departamento},
            dataType : 'json',
            success: function(json) {
                envio=json.dato;
                cad=envio.split("@@");
                num = cad[0];
                str='';       
                if(num>0)
                {
                    str = '<select name="provincia" id="provinciaSearch" class="form-control" id="provincia" onchange="cargaDistritos(this.value)">';
                    str += '<option value="0">Elija la Provincia...</option>';
                    for(e=1; e<=num; e++)
                    {
                        dat=cad[e].split("$$");
                        id_subcategoria = dat[0];
                        subcategoria = dat[1];
                        url = dat[2];
                        str += '<option value="'+url+'">'+subcategoria+'</option>';                   
                    }
                    str += '</select>';
                }
                else
                {
                    str = '<select name="provincia" id="provinciaSearch" class="form-control" id="provincia">';
                    str += '<option value="0">-------</option>';
                    str += '</select>';

                    str2 = '<select name="distrito" id="distritoSearch" class="form-control">';
                    str2 += '<option value="0">-------</option>';
                    str2 += '</select>';
                }                
                $("#divProvincias").html(str);
                $("#divDistrito").html(str2);
            }
        });
    } // else
}

function cargaProvinciasNew(id_departamento) {
    if(id_departamento=="0")
    {
        alert('Debe elegir un departamento');
        return false;
    }
    else
    {
        $.ajax({
            type: 'POST',
            url: 'frontend/ajax/cargaProvinciasNew',
            data: {id_departamento: id_departamento},
            dataType : 'json',
            success: function(json) {
                envio=json.dato;
                cad=envio.split("@@");
                num = cad[0];
                str='';       
                if(num>0)
                {
                    str = '<select class="form-control" name="provincia" id="provincia" required="required" onchange="cargaDistritosNew(this.value)">';
                    str += '<option value="0">Elija la Provincia...</option>';
                    for(e=1; e<=num; e++)
                    {
                        dat=cad[e].split("$$");
                        id_provincia = dat[0];
                        provincia = dat[1];
                        str += '<option value="'+id_provincia+'">'+provincia+'</option>';                   
                    }
                    str += '</select>';
                    $("#divProvincias").html(str);
                }
                else
                {
                    str = '<select class="form-control" name="provincia" id="provincia" required="required">';
                    str += '<option value="0">Provincia..</option>';
                    str += '</select>';
                }
                str2 = '<select name="distrito" id="distritoSearch" class="form-control">';
                str2 += '<option value="0">Distrito..</option>';
                str2 += '</select>';

                $("#divProvincias").html(str);
                $("#divDistrito").html(str2);
            }
        });
    } // else
}

function cargaDistritos(provincia) {
    if(provincia=="0")
    {
        alert('Debe elegir una provincia');
        return false;
    }
    else
    {
        $.ajax({
            type: 'POST',
            url: 'frontend/ajax/cargaDistritos',
            data: {provincia: provincia},
            dataType : 'json',
            success: function(json) {
                envio=json.dato;
                cad=envio.split("@@");
                num=cad[0];
                str='';       
                if(num>0)
                {
                    str = '<select name="distrito" id="distritoSearch" class="form-control">';
                    str += '<option value="0">Elija el distrito...</option>';
                    for(e=1; e<=num; e++)
                    {
                        dat=cad[e].split("$$");
                        id_subcategoria = dat[0];
                        subcategoria = dat[1];
                        url = dat[2];       
                        str += '<option value="'+url+'">'+subcategoria+'</option>';                   
                    }
                    str += '</select>';
                }
                else
                {
                    str = '<select name="distrito" id="distritoSearch" class="form-control">';
                    str += '<option value="0">-------</option>';
                    str += '</select>';
                }                
                $("#divDistrito").html(str);
            }
        });
    } // else
}

function cargaDistritosNew(id_provincia) {
    if(id_provincia=="0")
    {
        alert('Debe elegir una provincia');
        return false;
    }
    else
    {
        $.ajax({
            type: 'POST',
            url: 'frontend/ajax/cargaDistritosNew',
            data: {id_provincia: id_provincia},
            dataType : 'json',
            success: function(json) {
                envio=json.dato;
                cad=envio.split("@@");
                num=cad[0];
                str='';       
                if(num>0)
                {
                    str = '<select name="distrito" id="distritoSearch" class="form-control">';
                    str += '<option value="0">Elija el distrito...</option>';
                    for(e=1; e<=num; e++)
                    {
                        dat=cad[e].split("$$");
                        id_distrito = dat[0];
                        distrito = dat[1];
                        str += '<option value="'+id_distrito+'">'+distrito+'</option>';                   
                    }
                    str += '</select>';
                }
                else
                {
                    str = '<select name="distrito" id="distritoSearch" class="form-control">';
                    str += '<option value="0">Distrito..</option>';
                    str += '</select>';
                }                
                $("#divDistrito").html(str);
            }
        });
    } // else
}