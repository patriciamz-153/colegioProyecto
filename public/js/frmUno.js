window.onload = function () {
  var btnEnviar = document.getElementById("idEnviar");
  btnEnviar.onclick = function () {
    if (validarDatos()) {
      document.getElementById('idAlert').style.display='none';
    }else
    {
      document.getElementById('idAlert').style.display='block';
    }
  }
}

function validarDatos() {
    var c=0;
    var pregunta1 = document.getElementName("optionsRadios8").value;
    if (pregunta1 == "none") {
        document.getElementById('id1').style.display='block';
        c++;
    }else {document.getElementById('id1').style.display='none';}//Este if-else es repetitivo para cada pregunta te vas a dar cuenta
    if (c==0) return true;
}
