<?php

// abre o arquivo csv para leitura
$arquivo = fopen("cargos.csv", "r");

//laço de repetição
while ($linha = fgetcsv($arquivo, 1000, ",")) {
 
//tratamento para mostrar apenas os dados reais
 if ( $linha[0] != "COD"){
    $sql="INSERT INTO cargos (CargosID,Nome,Digitos,Suplente,Vice,Excluido)
         VALUES (".$linha[0].", '".$linha[1]."',".$linha[2].",'".$linha[3]."','".$linha[4]."','F');<br>";
     echo $sql;
}
}
//fecha o arquivo de leitura
fclose($arquivo);
?>