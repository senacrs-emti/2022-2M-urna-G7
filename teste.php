<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="teste.css">
    <title>Urna</title>
</head>

<header>
</header>

<body>
    <div id="urna">
    <div id="imagem" id="imagem">
    <img src="./img/logo-justica-eleitora-senac.png" alt="">
</div>
    <div id="tela">

        </div>
        <div id="teclado">
<div class="preto1">    
    <button class="btn preto click" onclick="inserir(1)">1</button>
    <button class="btn preto click"  onclick="inserir(2)">2</button>
    <button class="btn preto click"  onclick="inserir(3)">3</button>
</div>        

<div class="preto2"> 
<button class="btn preto click" onclick="inserir(4)">4</button>
    <button class="btn preto click" onclick="inserir(5)">5</button>
    <button class="btn preto click" onclick="inserir(6)">6</button>
</div>
<div class="preto3">
     <button class="btn preto click" onclick="inserir(7)">7</button>
    <button class="btn preto click" onclick="inserir(8)">8</button>
    <button class="btn preto click" onclick="inserir(9)">9</button>
</div>    
<div class="preto4">
    <button class="btn preto click" onclick="inserir(0)">0</button>
</div>
<div>

<button class="branco click">branco</button>
<button class="laranja click"onclick="corrigo()">corrigir</button>
<button class="verde" onclick="votar()">confirmar</button>

</div>
</div>
</body>
</html>
