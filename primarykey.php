<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>

<h2>Sistema de Login com CPF</h2>
<form method="POST">
     <label>Digite seu Nome: </label><br>
     <input type="text" name="nome" placeholder="Digite seu Nome" required><br><br>
     <label>Digite seu CPF: </label><br>
     <input type="text" name="cpf" minlength="11" maxlength="11" placeholder="Digite apenas número" required><br><br>
     <label>Digite sua Idade: </label><br>
     <input type="number" name="idade" minlength="1" maxlength="3" step="1" placeholder="Digite sua idade" required><br><br>
     <label>Data do Agendamento: </label><br>
     <input type="date" name="agendamento" placeholder="Data do Agendamento" required><br><br>
     <input type="submit" name="cadastrar" value="Cadastrar">
     <input type="submit" name="entrar" value="Entrar">
</form>
<hr>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

     $cpf = $_POST["cpf"];
     $nome = $_POST["nome"];
     $idade = $_POST["idade"];
     $agendamento = $_POST["agendamento"];

     if(!ctype_digit($cpf) || strlen($cpf) != 11) {
          echo "<p>⚠️O CPF deve conter exatamente 11 números.</p>";
          exit;
     }

     $conn = new mysqli("localhost","root","aluno","sistema", "3307");

     if($conn->connect_error) {
          die("<p>Erro ao conectar: ". $conn->connect_error . "</p>");
     }

     if (isset($_POST["cadastrar"])) {

          $sql = "INSERT INTO usuario (cpf,nome,idade,agendamento) VALUES ('$cpf','$nome','$idade','$agendamento')";

          if ($conn->query($sql) === TRUE) {
               echo "<p>✅ CPF cadastrado com sucesso!!</p>";
          } else {
               echo "<p>⚠️ CPF já cadastrado.</p>";
          }
     }

     if (isset($_POST["entrar"])) {
          $sql = "SELECT cpf FROM usuario WHERE cpf='$cpf'";
          $result = $conn->query($sql);

          if ($result -> num_rows > 0) {
               echo "<script>window.location.href='logadocpf.php';</script>";
          } else {
               echo "<p>❌ CPF não encontrado. Cadastra-se primeiro, ou verifique se dígitou corretamente.";
          }
     }
     $conn->close();
}
?>
</body>
</html>
<!-- SQL
CREATE DATABASE sistema;
USE sistema;


DROP TABLE usuario;

CREATE TABLE usuario(
cpf VARCHAR(11) PRIMARY KEY NOT NULL,
nome VARCHAR(50) NOT NULL,
idade VARCHAR(3) NOT NULL,
agendamento DATE NOT NULL,
data_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
); -->