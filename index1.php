<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post">
            <h1> cadastro do aluno </h1>
            <label for="fcod"> código:</label><br>
            <input type="text" id="codigo" name="codigo" value=""<br>
            <label for="fname"> nome:</label><br>
            <input type="text" id="nome" name="nome" value=""<br>
            <label for="femail"> código:</label><br>
            <input type="text" id="email" name="email" value=""<br>
            <label for="ffone"> fone:</label><br>
            <input type="text" id="fone" name="fone" value=""<br>
            <input type="submit" value="cadastrar">
            
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $codigo = $_POST["codigo"];
          $nome = $_POST["nome"];
          $email = $_POST["email"];
          $fone = $_POST["fone"];
          echo "<h1> dados do aluno </h1>";
          echo "nome: $nome <br>";
          echo "email: $email <br>";
          echo "fone: $fone <br>";
        }
        ?>
    </body>
</html>