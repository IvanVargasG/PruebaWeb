// Guardar datos en array
var titulosubm=new  Array();
var enlacesubm=new Array(); 
var menu=new Array();
var submenu=new Array();

    titulosubm[0]=new Array(
        "Subsección uno pruebauno",
        "Subsección uno pruebados",
        "Subsección uno pruebatres",
        "Subsección uno pruebacuatro"
    );
    enlacesubm[0]=new Array("#","#","#","#");

    titulosubm[1]=new Array(
        "Subsección dos pruebauno",
        "Subsección dos pruebados",
        "Subsección dos pruebatres",
        "Subsección dos pruebacuatro",
        "Subsección dos pruebacinco"
    );
    enlacesubm[1]=new Array("#","#","#","#","#");

    titulosubm[2]=new Array(
        "Subsección tres pruebauno",
        "Subsección tres pruebados",
        "Subsección tres pruebatres"
    );
    enlacesubm[2]=new Array("#","#","#");

    titulosubm[3]=new Array(
        "Subsección cuatro pruebauno",
        "Subsección cuatro pruebados",
        "Subsección cuatro pruebatres",
        "Subsección cuatro pruebacuatro",
        "Subsección cuatro pruebacinco",
        "Subsección cuatro pruebaseis"
    );
    enlacesubm[3]=new Array("#","#","#","#","#","#");

window.onload = function(){
     //BARRA DE NAVEGACI&Oacute;N: Crear desplegables:
    for(i=0;i<titulosubm.length;i++){        
        //localizar elementos principales
        menu[i]=document.getElementById("seccion"+i);
        //crear elemento menu desplegable
        menu[i].innerHTML+="<div id='Subseccion"+i+"'></div>";
        //localizar elemento menu desplegable
        submenu[i]=document.getElementById('Subseccion'+i);
        //escribir menu desplegable
        for(j=0;j<titulosubm[i].length;j++){
            submenu[i].innerHTML+="<p><a href='"+enlacesubm[i][j]+"'>"+titulosubm[i][j]+"</a></p>";
        }
            menu[i].style.position="relative";
            submenu[i].style.position="absolute";
            submenu[i].style.top="100%";
            submenu[i].style.left="0px";
            submenu[i].style.backgroundColor="#41338b";
            submenu[i].style.font="normal 0.8em arial";
            submenu[i].style.padding="0.2em 0.5em";
            submenu[i].style.display="none";
    }
    for(i=0;i<titulosubm.length;i++){
        menu[i].onmouseover =ver;
        menu[i].onmouseout=ocultar;
    }
}

function ver(){
    muestra=this.getElementsByTagName("div")[0];
    muestra.style.display="block";
}
function ocultar(){
    oculta=this.getElementsByTagName("div")[0];
    oculta.style.display="none";
}
    

