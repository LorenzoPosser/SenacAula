<!DOCTYPE html>
<html>
<body>

<?php
echo "<h1> Pizza </h1>";
$nome = "Lorenzo";
echo "Bem vindo $nome!";
echo "<br>";
$fone = "54992466396";
echo "Seu numero é $fone.";
echo "<br>";
$endereco = "Rua Alvorada 123";
echo "A pizza será entregue em $endereco.";
echo "<br>";
$sabor = "calabresa";
echo "Seu sabor é de $sabor";
echo "<br>";
$tamanho = "G";
echo "Você pediu uma pizza tamanho $tamanho";
echo "<br>";
$bebida = "Coca cola";
echo "Você pediu de bebida uma $bebida";
echo "<br>";
$valorpizza = 45;
$valorbebida = 5.99;
$valortaxa = 15;
$valorfinal= $valorpizza + $valorbebida + $valortaxa;
echo "A pizza ficou $valorpizza, o valor da bebida ficou $valorbebida, e o valor da taxa de entrega ficou $valortaxa, ao total ficou $valorfinal";


?> 

</body>
</html>