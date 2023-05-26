<!DOCTYPE html>

<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="nwidth=device-width, initial-scale=1.0">
  
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link rel="stylesheet" href="style.css"

  <title> HYBE </title>
</head>




<body>     
 
  <nav class="nav-extended purple lighten-2">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">HYBE</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="/">Galeria</a></li>
        <li><a href="/novo">Cadastro</a></li>
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
      
      <?php   foreach ($filmes as $filme) { ?>
        
     <div class="col s6">
       <div class="card hoverable">
        <div class="card-image">
          <img src="<?= $filme1->poster  ?>">
          <span class="card-title"><?= $filme1->titulo  ?></span>
          <buttom class="btn-fav btn-floating halfway-fab waves-effect waves-light red">
            <i class="material-icons">favorite_border</i></a>
        </buttom>
        <div class="card-content">
          <p><i class="material-icons amber-text">star</i>
          <strong><?= $filme1->nota  ?></strong>
        </p><br>
        <span class="card-title"><?= $filme1->titulo ?></span>

          <p><?= $filme1->sinopse  ?></p>
        </div>
        
      </div>
     
     </div>
       <?php  }  ?>

      
      <div class="col s6">
        <div class="card hoverable">
        <div class="card-image">
          <img src="<?= $filme2["poster"]  ?>">
          <span class="card-title"><?= $filme2["titulo"]  ?></span>
          <a class="btn-floating halfway-fab waves-effect waves-light red">
            <i class="material-icons">favorite_border</i></a>
        </div>
        <div class="card-content">
          <p><i class="material-icons amber-text">star</i><strong><?= $filme2["nota"]  ?></strong></p><br>
          <p><?= $filme2["sinopse"] ?></p>
        </div>
        
      </div>
      </div>
    </div>
      
        
        <div class="row">
      <div class="col s6">
        <div class="card hoverable">
        <div class="card-image">
          <img src="<?= $filme3["poster"]  ?>">
          <span class="card-title"><?= $filme3["titulo"]  ?></span>
          <a class="btn-floating halfway-fab waves-effect waves-light red">
            <i class="material-icons">favorite_border</i></a>
        </div>
        <div class="card-content">
          <p><i class="material-icons amber-text">star</i><strong><?= $filme3["nota"]  ?></strong></p><br>
          <p><?= $filme3["sinopse"]  ?></p>
        </div>
        
      </div>
      </div>
        
          
          <div class="col s6">
        <div class="card hoverable">
        <div class="card-image">
          <img src="<?= $filme4["poster"]  ?>">
          <span class="card-title"><?= $filme4["titulo"]  ?></span>
          <a class="btn-floating halfway-fab waves-effect waves-light red">
            <i class="material-icons">favorite_border</i></a>
        </div>
        <div class="card-content">
          <p><i class="material-icons amber-text">star</i><strong><?= $filme4["nota"]  ?></strong></p><br>
          <p><?= $filme4["sinopse"]  ?></p>
        </div>
        
      </div>
      </div>
        
      </div>
  
  <div class="row">
     <div class="col s6">
       <div class="card hoverable">
        <div class="card-image">
          <img src="<?= $filme5["poster"]  ?>">
          <span class="card-title"><?= $filme5["titulo"]  ?></span>
          <a class="btn-floating halfway-fab waves-effect waves-light red">
            <i class="material-icons">favorite_border</i></a>
        </div>
        <div class="card-content">
          <p><i class="material-icons amber-text">star</i><strong><?= $filme5["nota"]  ?></strong></p><br>
          <p><?= $filme5["sinopse"]  ?></p>
        </div>
        
      </div>
     
     </div>
      
      <div class="col s6">
        <div class="card hoverable">
        <div class="card-image">
          <img src="<?= $filme6["poster"]  ?>">
          <span class="card-title"><?= $filme6["titulo"]  ?></span>
          <a class="btn-floating halfway-fab waves-effect waves-light red">
            <i class="material-icons">favorite_border</i></a>
        </div>
        <div class="card-content">
          <p><i class="material-icons amber-text">star</i><strong><?= $filme6["nota"]  ?></strong></p><br>
          <p><?= $filme6["sinopse"]  ?></p>
        </div>
        
      </div>
      </div>
    </div>
<?Mensagem::mostrar(); ?>

<script>
  document.querySelectorAll(".btn-fav").foreach(btn=>{
    btn.addEventListener("click",e=>{
      fetch("/favoritar");
     if (btn.querySelector("i").innerHTML="favorite"){
      btn.querySelector("i").innerHTML="favorite_border" 
     }else{
      btn.querySelector("i").innerHTML="favorite";
     }
    }):
  })
</body>
          

</html>