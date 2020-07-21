window.onload = function(){ //Acciones tras cargar la pagina
    pantalla=document.getElementById("textoPantalla"); //elemento pantalla de salida
    document.onkeydown = teclado;
    }
    var numpantalla, ininumpantalla,estadodecimal, primernum, operacion;
        numpantalla="0"; //número en pantalla
        ininumpantalla=1; //iniciar número en pantalla: 1=si; 0=no;
        estadodecimal=0; //estado coma decimal 0=no, 1=si;
        primernum=0; //Guardar el primer número digitado
        operacion="no"; //la operación a realñizar
            function numero(recoger) {  //recoge el número pulsado en el argumento.
                    if (numpantalla=="0" || ininumpantalla==1  ) {	// inicializar un número, 
                        pantalla.innerHTML=recoger; //mostrar en pantalla
                        numpantalla=recoger; //guardar número
                            if(numpantalla=="."){ //si escribimos una coma al principio del número
                                pantalla.innerHTML="0.";
                                numpantalla=recoger;
                                estadodecimal=1; //cambiar estado de la coma
                            }
                    }else{
                        if(recoger=="." && estadodecimal==0){
                            pantalla.innerHTML+=recoger;
                            numpantalla=recoger;
                            estadodecimal=1;
                        }else if(recoger=="." && estadodecimal==1){} //si intentamos escribir una segunda coma decimal no realiza ninguna acción.
                        
                    else { //continuar un número
                    pantalla.innerHTML+=recoger; //añadimos y mostramos en pantalla.
                    numpantalla+=recoger; //añadimos y guardamos
                        }
                    }
                ininumpantalla=0; //el número está; iniciado y podemos ampliarlo.
            }
            
                function operar(s){
                    igualar(); //si hay operaciones pendientes se realizan primero
                    primernum=numpantalla; //ponemos el 1mer número en "numero en espera" para poder escribir el segundo.
                    operacion=s; //guardamos tipo de operación.
                    ininumpantalla=1; //inicializar pantalla.
                }
               
                function igualar(){
                    if(operacion=="no"){
                        pantalla.innerHTML=numpantalla;
                    }else{
                        cadenaoperacion=primernum+operacion+numpantalla;
                        solucion=eval(cadenaoperacion);
                        pantalla.innerHTML=solucion;
                        numpantalla=solucion;
                        operacion="no";
                        ininumpantalla=1;
                    }
                }            
                
                function raizc(){
                    numpantalla=Math.sqrt(numpantalla);
                    pantalla.innerHTML=numpantalla;
                    operacion="no";
                    ininumpantalla=1;
                }

                function porcentaje(){
                    numpantalla=numpantalla/100;
                    pantalla.innerHTML=numpantalla;
                    igualar();
                    ininumpantalla=1;
                }

                function opuest(){
                    numopuesto=Number(numpantalla);
                    numopuesto= -numopuesto;
                    numpantalla=String(numopuesto);
                    pantalla.innerHTML=numpantalla;
                }

                function inverso(){
                    numinverso=Number(numpantalla);
                    numinverso=(1/numinverso);
                    numpantalla=String(numinverso);
                    pantalla.innerHTML=numpantalla;
                    ininumpantalla=1;
                }

                function retro(){
                    cifras=numpantalla.length;
                    br=numpantalla.substr(cifras-1,cifras);
                    numpantalla=numpantalla.substr(0, cifras-1);
                    if(numpantalla==""){
                        numpantalla="0";
                    }
                        if(br=="."){
                            estadodecimal=0;
                        }
                    pantalla.innerHTML=numpantalla;
                }
          
                function borradorparcial(){
                    pantalla.innerHTML=0;
                    numpantalla=0;
                    estadodecimal=0;
                }

                function borradortotal(){
                    pantalla.innerHTML=0;
                    numpantalla=0;
                    estadodecimal=0;
                    primernum=0;
                    operacion="no";
                }


       
                    function teclado (elEvento) { 
                        evento = elEvento || window.event;
                        codigotec=evento.keyCode; //número de código de la tecla.
                        //teclas númericas del teclado alfamunérico
                            if(codigotec>47 && codigotec<58){
                                buscnum=codigotec-48;
                                buscnum=String(buscnum);
                                numero(buscnum);
                            }
                            //Teclas del teclado númerico. Seguimos el mismo procedimiento que en el anterior.
                            if(codigotec>95 && codigotec<106){
                                buscnum=codigotec-96;
                                buscnum=String(buscnum);
                                numero(buscnum);
                            }
                
                                if(codigotec==110 || codigotec==190){
                                    numero(".");
                                }
                                if(codigotec==106){
                                    operar( '*' );
                                }
                                if(codigotec==107){
                                    operar( '+' );
                                }
                                if(codigotec==109){
                                    operar( '-' );
                                }
                                if(codigotec==111){
                                    operar( '/' );
                                }
                                if(codigotec==32 || codigotec==13){
                                    igualar();
                                }
                                if(codigotec==46){
                                    borradortotal();
                                }
                                if(codigotec==8){
                                    retro();
                                }
                                if(codigotec==36){
                                    borradorparcial();
                                }
                    }
                      
                
