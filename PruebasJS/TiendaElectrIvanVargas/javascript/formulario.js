//Arreglo que me trae los input del formulario
var inputs = document.getElementsByClassName('formulario_input');
//Recorrido de la variable
    for (var i=0; i<inputs.length; i++){
//Validar cuando se agrega un caracter al label
        inputs[i].addEventListener('keyup', function(){
//cuando existe algun elemento
            if(this.value.length>=1){
//Agregar la clase fijar
                this.nextElementSibling.classList.add('fijartexto');
            }else{
//Cuando no se elimina los elementos del labl, se remueve la clase fijar
                this.nextElementSibling.classList.remove('fijartexto');
            }
        });
    }

    var multiplicacion = function(numero1, numero2){
        var numero1 = parseInt(document.getElementById("numero1").value);
        var numero2 = parseInt(document.getElementById("numero2").value);
        
        var resultado = numero1 * numero2;
        return resultado;        
    }

    var iva = function(numero1, numero2, numero3){
        var numero1 = parseInt(document.getElementById("numero1").value);
        var numero2 = parseInt(document.getElementById("numero2").value);    
        var numero3 = parseInt(document.getElementById("numero3").value);
        
        var resultado = numero1 * numero2;
        var resultadoiva = ((resultado * numero3)/100);                
        return resultadoiva;              
    }

    var utilidad = function(numero1, numero2, numero4){
        var numero1 = parseInt(document.getElementById("numero1").value);
        var numero2 = parseInt(document.getElementById("numero2").value);    
        var numero4 = parseInt(document.getElementById("numero4").value);
        
        var resultado = numero1 * numero2;
        var resultadoutilidad = ((resultado - numero4)/resultado);                
        return resultadoutilidad;
              
    }


    
    

   
   