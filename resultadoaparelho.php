<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Agendado</title>
     <link rel="stylesheet" href="resultadoaparelho.css">
</head>
<body>
<div class="pai">
<h2>🪛 Informações sobre o Agendamento!! 🔧</h2>
     <?php 
     if ($_SERVER["REQUEST_METHOD"]== "POST") {
     $nome = $_POST["nome"];
     $tel = $_POST["tel"];
     $aparelho = $_POST["aparelho"];
     $data = $_POST["data"];
     $descricao = $_POST["descricao"];

// CONEXÃO COM O BANCO DE DADOS
     $conn = new mysqli("localhost","root","aluno","assistencia","3307");

     if ($conn->connect_error) {
          die("<p style='color:red;'>Erro na conexão com o banco de dados: ". $conn->connect_error."</p>");
     }
// INSERIR OS DADOS
     $sql="INSERT INTO agendamento (nome, telefone, aparelho, dat4, descricao)
          VALUES ('$nome','$tel','$aparelho','$data','$descricao')";

     if($conn->query(query: $sql) === TRUE) {
          echo "<b>Nome do Cliente:</b> $nome<br><br>";
          echo "<b>Telefone de Contato:</b> $tel<br><br>";
          echo "<b>Aparelho que vai Consertar:</b> $aparelho<br><br>";
          echo "<b>Data do Agendamento:</b> $data<br><br>";
          echo "<b>Descrição do Problema:</b> $descricao<br><br>";
          echo "<p style='color: green; font-weight: bold;'>✅Agendamento salvo com sucesso no banco de dados!</p><br>";
     }
     else {
          echo "<p style='color:red;'>❌ Erro ao Salvar: " .$conn->error."</p>";
     }

     $conn->close();
     }
     ?>
<button type="button" class="botao" onclick="window.location.href='pedidoaparelho.php'">Alterar Agendamento</button>
</div>

</body>
<footer>
<?php 
if (isset($_GET["campanha"]) && isset($_GET["versao"])) {
     $campanha = $_GET["campanha"];
     $versao = $_GET["versao"];
     echo "<h2>Especificações da Pág ⚙️(GET)</h2>";
     echo"<b>Campanha:</b> {$campanha}<br>";
     echo"<b>Versão:</b> {$versao}<br>";

}
?>

</footer>
</html>
