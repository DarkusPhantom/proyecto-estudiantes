//variables
const nav_vertical = document.getElementById('navegacion-vertical');
const contenido = document.getElementsByClassName('contenedor')[0].children[0];
const contenido_tabla = document.getElementById('contenido-tabla');
const registro = document.getElementById('registro');



//Event Listener
//Muestra la tabla al hacer click en el nav-vertical
nav_vertical.addEventListener('click', mostrarTabla);



//--------Funciones---------------

//Muestra la tabla de datos
function mostrarTabla(evt) {
  evt.preventDefault(); //Previene las acciones. En este caso el "href" del tag "a"

  let tablinks = document.getElementsByClassName('tablinks'),
      tabla_datos = document.getElementsByClassName('tabla_datos');

      console.log('funciona');
  //MUestra la tabla y oculta el contenido de inicio
  contenido_tabla.classList.forEach(function(clase){
    if (clase === 'ocultar' && evt.target != nav_vertical) {
      mostrarElemento(contenido_tabla);
      ocultarElemento(contenido);
    }
  });

  if (evt.target != nav_vertical) {//Si la seleccion es diferente a la navegacion vertical...
    for (var i = 0; i < tablinks.length; i++) {
      if (tablinks[i] === evt.target) {
        mostrarElemento(tabla_datos[i]);
        elementoActivo(tablinks[i]);
      } else {
        ocultarElemento(tabla_datos[i]);
        elementoNoActivo(tablinks[i]);
      }
    }
  }
}

//Muestra el elemento
function mostrarElemento(elemento) {
  elemento.classList.remove('ocultar');
}

//Oculta el elemento
function ocultarElemento(elemento) {
  elemento.classList.add('ocultar');
}

//El elemento seleccionado esta activo
function elementoActivo(elemento) {
  elemento.classList.add('active');
  elemento.style.cursor = "default";
}

//Quita el elemento que no este activo
function elementoNoActivo(elemento) {
  elemento.classList.remove('active');
  elemento.style.cursor = "pointer";
}