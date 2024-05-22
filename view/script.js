

function incrementarContador() {
  let contador = document.getElementById('contador');
  contador.innerHTML = parseInt(contador.innerHTML) + 1;
}

function disminuirContador() {
  let contador = document.getElementById('contador');
  let validar = parseInt(contador.innerHTML);
  if(validar > 0){
      contador.innerHTML = validar - 1;
  }else {
      alert("Usted no a comprado este producto")
  }
}

