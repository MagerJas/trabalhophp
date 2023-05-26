<!DOCTYPE html>

<html>
<head>
  <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
      <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../style.css"

  <title></title>
</head>
<body>     
 

  <nav class="nav-extended purple lighten-2">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">HYBE</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Entrar</a></li>
        <li><a href="badges.html">Cadastro</a></li>
        <li><a href="collapsible.html">Galeria</a></li>
      </ul>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="#test1">Filmes</a></li>
        <li class="tab"><a class="active" href="#test2">Series</a></li>
        <li class="tab disabled"><a href="#test3">Assistidos</a></li>
       
      </ul>
    </div>
  </nav>
 
      <div class="row">
        <form method="POST" enctype="multipart/form-data">
    <div class="col s7 offset-s2">
      <div class="card purple lighten-5">
        <div class="card-content purple-text">
          <span class="card-title"><strong>Cadastrar Filme</strong></span>
           
          <!--input titulo -->
            
            <div class="row">
               <div class="input-field col s15">
                  <input id="titulo" type="text" class="validate" required name="titulo" >
                    <label for="titulo">Titulo do filme</label>
              </div>
           </div>
          
          <!--input sinopse, -->
            <div class="row">
              <div class="input-field col s15">
                 <input id="sinopse" type="text" class="validate" required  name="sinopse">
                   <label for="sinopse">Sinopse</label>
             </div>
            </div>
          
          <!--input -->
         <div class="row">
            <div class="input-field col s4">
                <input id="nota" type="number" step=",1" min="0"
                  max="10" class="validate" required  name="nota">
                    <label for="nota">Nota</label>
            </div>
         </div>
          
          <div class="file-field input-field">
            <div class="btn purple lighten-4">
              <span>Capa</span>
              <input type="file"  name="poster_file">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text"  name="poster">
            </div>
        
       </div>
          
        <div class="card-action">
          <button type="submit" class="waves-effect waves-ligthbtn btn purple">Cadastrar</button>
          <a class="btn grey"  href="/">Cancelar</a>
        </div>
      </div>
    </div>
      </form>
  </div>
  
  
      </body>
  </html>
