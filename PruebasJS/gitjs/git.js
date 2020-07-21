window.onload=function(){
    pmerfondo=document.getElementById("primerfondo");
    sdofondo=document.getElementById("segundofondo");
    pararmover=setInterval(mover,50);
    setInterval(repetir,2250);
}
desplazaruno=0;
    function mover(){
        desplazaruno-=10;
        desplazardos=desplazaruno+450;
        posicionuno=desplazaruno+"px";
        posiciondos=desplazardos+"px";
        pmerfondo.style.left=posicionuno;
        sdofondo.style.left=posiciondos;
    }
        function repetir(){
            pmerfondo.style.left="0px";
            sdofondo.style.left="450px";
            desplazaruno=0;
        }

 
