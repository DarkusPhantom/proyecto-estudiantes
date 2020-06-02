//variables
var navegacion_vertical = document.querySelector('.navegacion-vertical');


//Event Listener
//Mostrando y ocultando tablas
navegacion_vertical.addEventListener('click', mostrarEnPantalla,);


//Funciones
function mostrarEnPantalla(evt) {
  let navegacion_vertical = evt.target.parentElement.children; //Aqui obtengo los li de la navegacion principal
  let elementoSeleccionado;
  let info_principal = document.querySelector('#info-principal');
  let contenido_tabla = document.querySelector('#contenido-tabla');
  let tabla_datos = document.getElementsByClassName('tabla_datos');
   
  if (info_principal.style.display != 'none') {
    info_principal.style.display = "none"; 
  }

  if (contenido_tabla.style.display != 'block') {
    contenido_tabla.style.display = "block";
  }
  

  for (var i = 0; i < navegacion_vertical.length; i++) {
      if (navegacion_vertical[i] === evt.target && tabla_datos[i].classList != 'ocultar') {
         mostrarElemento(tabla_datos[i]);
         let nombre_tabla = document.getElementById('nombre_tabla');
         cambiarTitulo(navegacion_vertical[i], nombre_tabla);
         console.log(navegacion_vertical[i]);
         navegacion_vertical[i].style.backgroundColor = "#1E87E9";
         navegacion_vertical[i].style.color = "white";
      } else {
        ocultarElemento(tabla_datos[i]);
      }
  }
}

function mostrarElemento(elemento) {
  elemento.classList.remove('ocultar');
}

function ocultarElemento(elemento) {
  elemento.classList.add('ocultar');
}

function cambiarTitulo(elementoActual, elementoCambiar) {
  elementoCambiar.innerText = elementoActual.innerText;
}