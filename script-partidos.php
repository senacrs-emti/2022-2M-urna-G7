<?php

// abre o arquivo csv para leitura
$arquivo = fopen("partidos.csv", "r");

//laço de repetição
while ($linha = fgetcsv($arquivo, 1000, ",")) {
 
//tratamento para mostrar apenas os dados reais
 if ( $linha[0] != "COD"){
    $sql="INSERT INTO partidos (PartidosID,Nome,Sigla,Numero,Presidente)
         VALUES (".$linha[0].", '".$linha[1]."','".$linha[2]."',".$linha[3].",'".$linha[4]."');<br>";
     echo $sql;
}
}
//fecha o arquivo de leitura
fclose($arquivo);
?>