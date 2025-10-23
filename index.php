<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <style rel>
          
     </style>
</head>
<body>
     <h2>Formulário Outubro Rosa 🩷</h2>
          <form action="index.php" method="post">
               <label>Nome: </label><br>
               <input type="text" name="nome" placeholder="Digite seu nome" required><br><br>
               <label>Email: </label><br>
               <input type="email" name="email" placeholder="Dominio@gmail.com" required><br><br>
               <label>Idade: </label><br>
               <input type="number" name="idade" placeholder="Digite sua idade" required><br><br>
               <label>Já realizou o exame de mamografia este ano?</label><br>
               <input type="radio" name="mamografia" value="Sim" required> Sim<br>
               <input type="radio" name="mamografia" value="Não" required> Não<br><br>
               <input type="submit" value="Enviar">
          </form>

<?php 
if ($_SERVER["RESQUEST_METHOD"] == "POST") {
     $nome = $_POST["nome"];
     $mamografia = $_POST["mamografia"];
     $email = $_POST["email"];
     $idade = $_POST["idade"];
}
?>
</body>
</html>