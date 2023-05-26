<? php
  
  $bd= new SQLite("./db/filmes.db");
  
  $sql="ALTER TABLE filmes ADD COLUMN favorito INT DEFAULT 0";
  
  if 	($bd->exec(sql) )
    echo"\ntabela filmes alterada com sucesso\n";
  else
     echo"\nErro ao alterar tabela filmes\n";