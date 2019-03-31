const formulario = document.querySelector('#form1');

formulario.addEventListener('submit',leeFormulario);

function leeFormulario(e){
  e.preventDefault();
  const nombre = document.querySelector('#nomEstado').value;


    const xhr =  new XMLHttpRequest();
    xhr.open('GET',`servidor.php?nomEstado=${nombre}`,true);

    xhr.onload = function(){
      if(this.status === 200){
        const respuesta = JSON.parse(xhr.responseText);
        console.log(respuesta);
        
        var mpos ='';
        for (var i = 0; i < respuesta.length; i++) {
          mpos += respuesta[i].nombre + ' <br> ';
        }

        const div = document.querySelector('#municipios');
        div.innerHTML = mpos;
      }
    }
    xhr.send();
}
