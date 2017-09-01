$(document).ready(function($) {

jconfirm.defaults = {
    title: 'Hola!',
    titleClass: '',
    type: 'dark',
    draggable: false,
    alignMiddle: true,
    typeAnimated: true,
    content: 'Estas seguro',
    buttons: {},
    defaultButtons: {
        ok: {
            action: function () {
            }
        },
        close: {
            action: function () {
            }
        },
    },
    contentLoaded: function(data, status, xhr){
    },
    icon: '',
    lazyOpen: false,
    bgOpacity: null,
    theme: 'dark',
    animation: 'zoom',
    closeAnimation: 'scale',
    animationSpeed: 400,
    animationBounce: 1.2,
    rtl: false,
    container: '.contenedor',
    containerFluid: false,
    backgroundDismiss: false,
    backgroundDismissAnimation: 'shake',
    autoClose: false,
    closeIcon: true,
    closeIconClass: false,
    watchInterval: 100,
    columnClass: '',
    boxWidth: '50%',
    scrollToPreviousElement: true,
    scrollToPreviousElementAnimate: true,
    useBootstrap: false,
    offsetTop: 50,
    offsetBottom: 50,
    dragWindowGap: 15,
    bootstrapClasses: {
        container: 'container',
        containerFluid: 'container-fluid',
        row: 'row',
    },
    onContentReady: function () {},
    onOpenBefore: function () {},
    onOpen: function () {},
    onClose: function () {},
    onDestroy: function () {},
    onAction: function () {}
};

});




//TOMO LA URL Y OBTENGO EL ID para mostrar el barco que viene desde INDEX
function obtenerURL(param)
{
/* Obtener la url completa */
url = document.URL;
/* Buscar a partir del signo de interrogación ? */
url = String(url.match(/\?+.+/));
/* limpiar la cadena quitándole el signo ? */
url = url.replace("?", "");
/* Crear un array con parametro=valor */
url = url.split("&");

/* 
Recorrer el array url
obtener el valor y dividirlo en dos partes a través del signo = 
0 = parametro
1 = valor
Si el parámetro existe devolver su valor
*/
x = 0;
while (x < url.length)
{
p = url[x].split("=");
if (p[0] == param)
{
return decodeURIComponent(p[1]);
alert(p);
}
x++;
}
}
/*$(document).ready(function($) {
   let servicio = obtenerURL("servicio"); //llamo a la funcion obtenerURL
    if (servicio){//mejorar esta condicion
      console.log(servicio); 
    }
});*/


//muestro la cantidad de servicios activos en el menu de cada servicio :)
$(document).ready(function($) {
   const serv =['varadero', 'palera', 'pluma', 'fondo'];
  for (var i = 0; i < serv.length; i++) {    

        let servicio=serv[i]

    $.post("qty.php", {servicio: servicio}, function(mensaje) {
            $('#qty'+servicio).text(mensaje);
            console.log (servicio +'='+ mensaje);
           }); 
  }

  
});
