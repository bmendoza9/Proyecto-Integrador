<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Administrador</title>
  <link rel="stylesheet" type="text/css"  href="CSS/admin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<header id="header">
  <?php include("header.html") ?>
</header>
<body>


  <div class="main">
    <div class="sidenav">
      <h1>Administrador</h1>
      <a onclick="dropAccConvocatorias()">
        Convocatorias<i class="fa fa-caret-down"></i>
      </a>
      <div id="convocatoriasAcc" class="dropStyle">
       <a class="sidebutton" data-archivo="test">Nueva</a>
       <a class="sidebutton" data-archivo="editar">Editar</a>
     </div>
      <button class="sidebutton" onclick="dropAccEvaluadores()">
        Evaluadores<i class="fa fa-caret-down"></i>
      </button>
      <div id="evaluadoresAcc" class="dropStyle">
        <a class="sidebutton">Registrar</a>
        <a class="sidebutton">Editar</a>
      </div>
      <button class="sidebutton" onclick="dropAccNoticias()">
        Noticias<i class="fa fa-caret-down"></i>
      </button>
     <div id="noticiasAcc" class="dropStyle">
       <a class="sidebutton">Nueva</a>
       <a class="sidebutton">Editar</a>
     </div>

    </div>
    <div id="panel">

    </div>

  </div>
</body>
<footer id="footer">
  <?php include("footer.html") ?>
</footer>
<script src="js/jquery.js" charset="utf-8"></script>
<script>
 function dropAccConvocatorias() {
     var x = document.getElementById("convocatoriasAcc");
     if (x.className.indexOf("w3-show") == -1) {
         x.className += " w3-show";
         x.previousElementSibling.className += " w3-green";
     } else {
         x.className = x.className.replace(" w3-show", "");
         x.previousElementSibling.className =
         x.previousElementSibling.className.replace(" w3-green", "");
     }
 }
 function dropAccEvaluadores() {
     var x = document.getElementById("evaluadoresAcc");
     if (x.className.indexOf("w3-show") == -1) {
         x.className += " w3-show";
         x.previousElementSibling.className += " w3-green";
     } else {
         x.className = x.className.replace(" w3-show", "");
         x.previousElementSibling.className =
         x.previousElementSibling.className.replace(" w3-green", "");
     }
 }
 function dropAccNoticias() {
     var x = document.getElementById("noticiasAcc");
     if (x.className.indexOf("w3-show") == -1) {
         x.className += " w3-show";
         x.previousElementSibling.className += " w3-green";
     } else {
         x.className = x.className.replace(" w3-show", "");
         x.previousElementSibling.className =
         x.previousElementSibling.className.replace(" w3-green", "");
     }
 }
  var btnMenu = document.getElementsByClassName('sidebutton')
  for (var i = 0; i < btnMenu.length; i++) {
    btnMenu[i].addEventListener('click',function(){
      cargarArchivoAjax(this.getAttribute('data-archivo'))
    })
  }
  function cargarArchivoAjax(file){
    $.ajax({
      url:file+'.php',
      type: 'GET',
      dataType: 'html',
      beforeSend: function(){
        alert("enviando")
      },
      success:function(respuesta){
        console.log(respuesta)
        document.getElementById('panel').innerHTML = respuesta
      }
    })
  }

 </script>
</html>
