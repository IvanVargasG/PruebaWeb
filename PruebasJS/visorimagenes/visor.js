window.onload = function() { //tras cargar la página ...
    visor1=document.getElementById("visor"); //referencia al visor
    mititulo=document.getElementById("titulo"); //referencia al pie de foto
}
    function fototurist(numfoto) { //cambiar la imagen
        fotoimg="imagenes/foto"+numfoto+".jpg"; //ruta de la nueva imagen
        document.images["fotoVisor"].src=fotoimg; //cambiar imagen
        textpag=document.images["fotos"+numfoto].alt; //texto de pie de foto
        mititulo.innerHTML=textpag; //cambiar pie de foto
    }
