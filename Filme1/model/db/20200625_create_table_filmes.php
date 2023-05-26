<? php
  
  $bd= new SQLite("filmes.db");
  
  $sql="DROP TABLE IF EXISTS filmes";
  
  if 	($bd->exec(sql) )
    echo"\ntabela filmes apagada\n";
  
  
  
  $sql= "CREATE TABLE  filmes(
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  titulo VARCHAR (200) NOT NULL,
  poster VARCHAR(200),
  sinopse TEXT,
  nota DECIMAL (1,1)
  
   )";
  
  
  if 	($bd->exec(sql) )
    echo"\ntabela filmes criada\n";

  else
  echo "\nerro ao criar tabela\n"
  
  
  
  $sql= "INSERT INTO filmes(id,titulo,poster,sinopse,nota) VALUES (
      0, "How to train your Dragon 2",
      "https://www.themoviedb.org/t/p/original/brmRmSagvnQVgIw1lBF4CaKpaoU.jpg",
      "Decidido a fazer de Berk um verdadeiro libelo ao ideal da convivência
            pacífica entre homens e dragões, Soluço e seus amigos seguem atrás de 
            caçadores, para não só libertar suas presas mas também impedir a
            matança desenfreada dos animais. O esforço do grupo desperta a
            atenção de Grimmel ao descobrir que entre eles está Banguela,
            um legítimo Fúria da Noite.O vilão então desenvolve um plano 
            para capturá-lo a todo custo.",
            7,7)";
  
  
  if 	($bd->exec(sql) ){
    echo"tabela filmes inserida com sucesso";
  }
  else{
  echo "erro"
  }
  
  
  
  
  $sql= "INSERT INTO filmes(id,titulo,poster,sinopse,nota) VALUES (
      0, "The Last of us",
      "https://www.themoviedb.org/t/p/original/3Orhn6lXAZgU5T4OlfGh0iee3so.jpg",
      "Situado duas décadas após a implosão de nossa sociedade,
            o drama seguirá Joel, um sobrevivente difícil, que é contratado para
            contrabandear uma garota de 14 anos chamada Ellie para fora de uma zona
            de quarentena opressiva. <br>
            O que começa como um pequeno trabalho logo se
            torna uma jornada brutal e de partir o coração, já que os dois precisam
            atravessar os Estados Unidos e dependem um do outro para sobreviver.",
            8,7)";
  
  
  if 	($bd->exec(sql) ){
    echo"tabela filmes inserida com sucesso";
  }
  else{
  echo "erro"
  }
  
  
  
    $sql= "INSERT INTO filmes(id,titulo,poster,sinopse,nota) VALUES (
      0, "Velozes e Furiosos 10",
      "https://www.themoviedb.org/t/p/original/nxrmpkwVdmiVAiRTqSSC2SateN2.jpg",
      "Ao longo de muitas missões e contra probabilidades impossíveis,
            Dom Toretto e sua família foram mais espertos, mais nervosos e
            superaram todos os inimigos em seu caminho. Agora, eles enfrentam
            o oponente mais letal que já enfrentaram: uma ameaça terrível
            emergindo das sombras do passado, alimentada por vingança de
            sangue e determinada a destruir esta família e destruir tudo 
            - e todos - que Dom ama, para sempre.",
            7,1)";
  
  
  if 	($bd->exec(sql) ){
    echo"tabela filmes inserida com sucesso";
  }
  else{
  echo "erro"
  }
  
  
 
    
    $sql= "INSERT INTO filmes(id,titulo,poster,sinopse,nota) VALUES (
      0, "Tropa de Elite 2",
      "https://www.themoviedb.org/t/p/original/v39TyEFfzPUaj7uZlV6Xr5HD9tu.jpg",
      "O destino da cidade do Rio de Janeiro e de Nascimento se cruzam
            em Tropa de Elite 2 , quando suas obrigações de pai se chocam 
            com as de policial. Mais maduro, estratégico e solitário, 
            o agora Coronel Nascimento faz o bope crescer e coloca o tráfico
            de drogas de joelho. Isto apenas para descobrir que na segurança 
            pública do Rio de Janeiro nada é o que parece. O sistema se reinventa
            e descobre como lucrar sem o intermédio do tráfico.",
            7,8)";
  
  
  if 	($bd->exec(sql) ){
    echo"tabela filmes inserida com sucesso";
  }
  else{
  echo "erro"
  }
  
  
  
     
    $sql= "INSERT INTO filmes(id,titulo,poster,sinopse,nota) VALUES (
      0, "The Walking Dead",
      "https://www.themoviedb.org/t/p/w600_and_h900_bestv2/xf9wuDcqlUPWABZNeDKPbZUjWx0.jpg",
      "Nos Estados Unidos pós-apocalíptico, um pequeno grupo de
            sobreviventes segue viajando à procura de uma nova casa
            longe dos mortos-vivos. O desespero por segurança e
            suprimentos os coloca constantemente à beira da sanidade.",
            8,1)";
  
  
  if 	($bd->exec(sql) ){
    echo"tabela filmes inserida com sucesso";
  }
  else{
  echo "erro"
  }
  
  
  
       
    $sql= "INSERT INTO filmes(id,titulo,poster,sinopse,nota) VALUES (
      0, "The Walking Dead: Daryl Dixon",
      "https://www.themoviedb.org/t/p/original/bgH07nPEj4PN774TajoEkdXct75.jpg",
      "Em The Walking Dead: Daryl Dixon, Daryl (Norman Reedus)
            chega à costa da França e luta para entender como chegou
            lá e por quê. A série acompanha a sua jornada por uma
            França quebrada, mas resiliente, enquanto ele tenta
            encontrar um caminho de volta para casa.",
            8,7)";
  
  
  if 	($bd->exec(sql) ){
    echo"tabela filmes inserida com sucesso";
  }
  else{
  echo "erro"
  }
  
  

  ?>