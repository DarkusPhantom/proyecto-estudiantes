//variables
let nav_vertical = document.getElementById('navegacion-vertical');
let inicio = document.getElementById('navegacion-principal').children[0];
const info_principal = document.getElementById('info-principal');
const contenido_tabla = document.getElementById('contenido-tabla');


//Event Listener
//Muestra la tabla al hacer click en el nav-vertical
nav_vertical.addEventListener('click', mostrarTabla);

//Muestra los datos del inicio al hacer click en inicio
inicio.addEventListener('click', mostrarPrincipal)



//--------Funciones---------------

//Muestra el contenido principal
function mostrarPrincipal(evt) {
  evt.preventDefault(); //Previene los eventos al hacer click (En este caso evita reiniciar la pagina por el href="index.php")

  //Oculta la tabla y muestra el contenido de inicio
  info_principal.classList.forEach(function(clase){
    if (clase === 'ocultar') {
      mostrarElemento(info_principal);
      ocultarElemento(contenido_tabla);
    }

    //Remueve de todos los elementos activos de la barra vertical
    let tablinks =  document.getElementsByClassName('tablinks');
    for (var i = tablinks.length - 1; i >= 0; i--) {
      elementoNoActivo(tablinks[i]);
    }
  });
}

//Muestra la tabla de datos
function mostrarTabla(evt) {
  evt.preventDefault();

  let tablinks = document.getElementsByClassName('tablinks'),
      tabla_datos = document.getElementsByClassName('tabla_datos');

  //MUestra la tabla y oculta el contenido de inicio
  contenido_tabla.classList.forEach(function(clase){
    if (clase === 'ocultar' && evt.target != nav_vertical) {
      mostrarElemento(contenido_tabla);
      ocultarElemento(info_principal);
    }
  });

  if (evt.target != nav_vertical) { //Esta condicion evita que al hacer click en el nav, se muestre la tabla
    for (var i = 0; i < tablinks.length; i++) {
      if (tablinks[i] === evt.target) {
        mostrarElemento(tabla_datos[i]);
        let nombre_tabla = document.getElementById('nombre_tabla');
        cambiarTitulo(tablinks[i], nombre_tabla);
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

//Renombra el titulo del elemento
function cambiarTitulo(elementoActual, elementoCambiar) {
  elementoCambiar.innerText = elementoActual.innerText;
}

//Elemento activo
function elementoActivo(elemento) {
  elemento.classList.add('active');
  elemento.style.cursor = "default";
}

//Quita el elemento activo
function elementoNoActivo(elemento) {
  elemento.classList.remove('active');
  elemento.style.cursor = "pointer";
}