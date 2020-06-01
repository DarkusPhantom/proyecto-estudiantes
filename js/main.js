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
/*
switch(tabla_datos.id){
    case 'estudiantes':
      for (var i = 0; i < estudiantes.classList.length; i++) {
        if (estudiantes.classList[i] != 'ocultar') {
          ocultarElemento(estudiantes);
        }
      }
    break;
    
  }
*/









 /* for (var i = 0; i < listaClasesElemento.length; i++) {
    if (listaClasesElemento[i] === 'ocultar') {
      console.log('Funcionaaaaaaaaaa');
    }else {
      console.log('funcionazo');
    }
  }*/
  



























/*
function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

*/