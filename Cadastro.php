<!DOCTYPE html>
<html>
<head>
    <style>
        h1, h2, h3, p {
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
<?php
echo "<h1>Projeto Integrador!</h1>" ;
$nome = "Lorenzo" ;
$idade = 16; 
$auditiva = false;
$visual = false;
$fisica = false;
echo "<h2>Entrevista</h2>";
echo "<h3> Seu nome é $nome e você tem $idade.</h3>";
echo "<br>";
echo "<h3> Necessidade Física: </h3>";
echo "<br>";
echo "<p> Auditiva? " . ($auditiva ?  'Sim' : 'Não') . "</p> ";
echo "<br>";
echo "<p> Visual? " . ($visual ?  'Sim' : 'Não') . "</p> ";
echo "<br>";
echo "<p> Visual? " . ($fisica ?  'Sim' : 'Não') . "</p> ";
?>
</body>
</html>