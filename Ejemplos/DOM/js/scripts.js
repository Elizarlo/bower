(function(){
  'use strict';
  document.addEventListener('DOMContentLoaded', function(){

    /*
      var logo = document.getElementById('logo');
      console.log(logo);

      var navegacion = document.getElementById('navegacion');
      console.log(navegacion);

      navegacion.style.display = "none";


      let enlaces = document.getElementsByTagName('a');
      console.log(enlaces);

      enlaces[7].setAttribute("text","rancho");
      enlaces[7].text= "Ejido";

      for (var i = 0; i < enlaces.length; i++) {
        console.log(enlaces[i]);
        enlaces[i].setAttribute("href","http://google.com");
        enlaces[i].setAttribute("target","_blank");
      }

      let enlaces_laterales = document.getElementById('sidebar').getElementsByTagName('a');
      console.log(enlaces_laterales);

      let menus = document.getElementsByClassName('navegacion');
      console.log(menus);

      let enlaces = document.querySelectorAll('a');
      console.log(enlaces);

      let logo = document.querySelector('#logo');
      console.log(logo);

      let menus = document.querySelector('.navegacion');
      console.log(menus);
      */

      var nuevoenlace = document.createElement('a');
      nuevoenlace.text = "Entrada 6";
      nuevoenlace.setAttribute("href","#");

      var elemento = document.createElement('li');
      elemento.appendChild(nuevoenlace);
      var side = document.querySelector('#sidebar ul');
      side.appendChild(elemento);
  });

})();













function mifuncion(){
  alert("hola mundo");
}




console.log();
