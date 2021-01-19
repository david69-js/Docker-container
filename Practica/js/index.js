'use strict'
/*Verificaion de la disponibilidad del LocalStorage*/
if(typeof(localStorage) != null){
    console.log('El localStorage esta disponible');
}else{
    console.log("El localStorage no esta disponible");
}

/*Funcion para guardar datos en el LocalStorage*/

var notasF = document.querySelector('#notasF');

notasF.addEventListener('submit', (e) =>{
    let nombre = document.querySelector('#nombre').value;
    let descripcion = document.querySelector('#descripcion').value;
    
    if(nombre.length < 1 && descripcion.length < 1){
        alert('Los campos son obigatorios')
   
    }else{
        var nota = {
            nombre: nombre,
            descripcion: descripcion,
            estado: false
        }
 
        if(localStorage.getItem('notas') == null ){
         let notas = [];
         notas.push(nota)
         localStorage.setItem('notas', JSON.stringify(notas));
        
     } else {
         let notas = JSON.parse(localStorage.getItem('notas'));
         notas.push(nota);
         localStorage.setItem('notas', JSON.stringify(notas)); 
        }

       /*Funciones Completo y SinCompletar*/ 
        Sincompletar();
        Completo();
        
        /*Evitar reiniciar la pagina*/
        notasF.reset();
        e.preventDefault();

    }
    });

//Sin completar

var Sincompletar = () =>{
    let notas = JSON.parse(localStorage.getItem('notas'));
    let mostarS = document.querySelector('#mostrarS');

    mostarS.innerHTML = '';

    /*Plantilla que se utilizara para insertar en pantalla*/
    if(notas != null){
        notas.forEach((nota, index)=> {
           
            let estado = nota.estado; 
            if(estado == false){
                let nombre = nota.nombre;
                let descripcion = nota.descripcion;

                mostarS.innerHTML += `
                <div class="card mb-3">
                    <div class="card-body">
                        <a href="#" onclick="estadoS('${index}')" class= "btn btn-secondary btn1"></a>
                        <p>${nombre}----${descripcion} <p>
                        <a href="#" onclick="eliminar('${index}')" class= "btn btn-danger">Eliminar</a>
                        <a href="#" onclick="editar('${index}')" class= "btn btn-success">Editar</a>
                    </div>
                </div>
                `;
            }
        });
    }
}

//Completado
var Completo = () =>{
    let notas = JSON.parse(localStorage.getItem('notas'));

    let mostrarC = document.querySelector('#mostrarC');
        mostrarC.innerHTML = '';
    
        if(notas != null ){
            notas.forEach((nota, index) => {
               let estado = nota.estado;
               
               if(estado == true ){

                let nombre = nota.nombre;
                let descripcion = nota.descripcion;
                
                mostrarC.innerHTML += `
                <div class="card mb-3">
                <div class="card-body">
                    <div class="form-check">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" onclick="estadoC('${index}')" checked>
                            <label class="form-check-label" for="materialChecked2"></label>
                        </div>
                        <p id="completado">${nombre}---${descripcion}</p>
                    </div>
                </div>
            </div>
            `;
        } });
    }
}

// Funcion eliminar

var eliminar = (index) =>{
    let notas = JSON.parse(localStorage.getItem('notas'));

        notas.splice(index,1);

        localStorage.setItem('notas', JSON.stringify(notas));

        Sincompletar();
        Completo();
}

/*Funcion editar*/
var editar = (index) =>{
    console.log(index);

    let notas = JSON.parse(localStorage.getItem('notas'));
    let nota = notas;

            document.querySelector('#nombre').value = nota.nombre;
            document.querySelector('#descripcion').value = nota.descripcion;

            notas.splice(index, 1);

            localStorage.setItem('notas', JSON.stringify(notas));

            Completo();
            Sincompletar();
} 

/*Funcion de estado true */

var estadoS = (index) =>{
    console.log(index)

    let notas = JSON.parse(localStorage.getItem('notas'));
    let nota = notas[index];
    nota.estado = true

        localStorage.setItem('notas', JSON.stringify(notas));
        Sincompletar();
        Completo();

}

/*Funcion de estado false */
var estadoC = (index) =>{
    console.log(index)

    let notas = JSON.parse(localStorage.getItem('notas'));
    let nota = notas[index];
    nota.estado = false
        localStorage.setItem('notas', JSON.stringify(notas));
        Sincompletar();
        Completo();
}

/*funcion de Buscar notas*/

var buscarV = document.querySelector('#buscarV');
    buscarV.addEventListener('click', (e) =>{
        let buscar = document.querySelector('#buscar').value;
        let mostrarB = document.querySelector('#mostrarB');
        let notas = JSON.parse(localStorage.getItem('notas'));
        
        var BuscarNotas = notas.filter((notas) =>{
            return notas.nombre == buscar;
        });   
        mostrarB.innerHTML = '';
        
        BuscarNotas.forEach((nota) => {
            let nombre = nota.nombre;
            let descripcion = nota.descripcion;
             
            mostrarB.innerHTML += `
                <div class="card md-3">
                    <div class="card-body">
                        <p>${nombre} ---- ${descripcion}</p>
                    </div>
                </div>
            `
        });

        e.preventDefault();
    

    });

Sincompletar();
Completo();