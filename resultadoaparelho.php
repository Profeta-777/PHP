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
<h2>🪛 Agendamento Realizado com Sucesso!! 🔧</h2>
<?php 
if ($_SERVER["REQUEST_METHOD"]== "POST") {
     $nome = $_POST["nome"];
     $tel = $_POST["tel"];
     $aparelho = $_POST["aparelho"];
     $data = $_POST["data"];
     $descricao = $_POST["descricao"];
     echo"<b>Nome do Cliente:</b> $nome<br><br>";
     echo"<b>Telefone de Contato:</b> $tel<br><br>";
     echo"<b>Aparelho que vai Consertar:</b> R$ $aparelho<br><br>";
     echo"<b>Data do Agendamento:</b> $data<br><br>";
     echo"<b>Descrição do Problema:</b> $descricao<br><br>";
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