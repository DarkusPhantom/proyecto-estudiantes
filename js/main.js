
document.querySelector('.navegacion-vertical').addEventListener('click', mostrarEnPantalla);

function mostrarEnPantalla() {
  let ocultar, contenido_principal, indice, tabla_datos;

  ocultar = document.getElementsByClassName('ocultar');
  contenido_principal = document.getElementById('info-principal');
  
  if (contenido_principal.classList === 'ocultar') {
    console.log('tiene la clase');
  } else{
    contenido_principal.classList.add('ocultar');
  }

  tabla_datos = document.getElementsByClassName('tabla-datos');
  
  console.log(tabla_datos);

  for (indice = 0; indice < tabla_datos.length; indice++) {
    console.log(tabla_datos[indice]);
  }

}






/*function openCity(evt, cityName) {
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
}*/