var nombre = prompt('Cual es tu nombre?');
//document.getElementById('mensaje').innerHTML = 'Hola' + nombre;
//document.getElementById('mensaje').innerHTML = '<h1>Hola' + nombre + '</h1>';

let edad = 20, altura = 1.70;
const pi = 3.1415;
  /*
  console.log(edad);
  edad = '20';
  console.log(parseInt(edad) + pi);
  console.log(nombre);
  let saludo = nombre.concat('juan,buenosidas,juan');
  console.log(nombre);
  nombre = nombre.toUpperCase();
  console.log(nombre);
  nombre = nombre.toLowerCase();
  console.log(nombre);
  nombre = nombre.replace('a','@');
  console.log(nombre);
  saludo = saludo.split(',');
  let resp = nombre.includes('o');
  console.log(resp);
  document.getElementById('mensaje').innerHTML = '<h1>Hola' + nombre + saludo +'</h1>';
  */

  console.log(Math.ceil(altura));
  console.log(Math.floor(altura));
  console.log(Math.round(altura));
  console.log(Math.pow(2,3));
  console.log(Math.sqrt(9))
  console.log(Math.abs(-6));

  let numeros = [3,6,8,1];
  numeros[4] = 79;
  numeros.push(97);
  numeros.unshift(10);
  numeros.shift();
  numeros.reverse();
  numeros.sort();
  console.log(numeros);

  const arreglo = {
    matricula : 12356,
    nombre : 'juano',
    edad : 20,
    trabaja : false,
    domicilio: {
      calle: 'carrera',
      numero: 100,
      colonia: 'centro'
    },
    pasatiempos :['leer','correr','jugar']
  };

  console.log(arreglo);

  //function declaration
  function suma(n1,n2){
    let resultado;
    resultado = n1+n2;
    return resultado;
  }
console.log(suma(1,2));

  //function expresion

  const suma2=function(n1,n2){
    let resultado;
    resultado = n1+n2;
    return resultado;
  }

  console.log(suma2(1,2));


  (function(n1,n2){
    let resultado;
    resultado = n1+n2;
    console.log(resultado);
  })(5,6);
