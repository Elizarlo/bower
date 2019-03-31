const formulario = document.querySelector('#form1');

formulario.addEventListener('submit',leeFormulario);

function leeFormulario(e){
  e.preventDefault();
  const nombre = document.querySelector('#nombre').value,
  correo = document.querySelector('#correo').value;

  const datos = new FormData();
    datos.append('nombre',nombre);
    datos.append('correo',correo);

    //Llamado Ajax

    //Crear objeto
    const xhr =  new XMLHttpRequest();
    xhr.open('POST','servidor.php',true);

    xhr.onload = function(){
      if(this.status === 200){
        const respuesta = JSON.parse(xhr.responseText);
        console.log(respuesta);
      }
    }
    xhr.send(datos);
}
