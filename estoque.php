<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
<h2>Especificações do Produto 🛒</h2><br>

<?php 
if ($_SERVER["REQUEST_METHOD"]== "POST") {
     $nome = $_POST["nome"];
     $categoria = $_POST["categoria"];
     $preco = $_POST["preco"];
     $quantidade = $_POST["quantidade"];
     echo"<b>Nome do produto:</b> $nome<br>";
     echo"<b>Categoria:</b> $categoria<br>";
     echo"<b>Preço do produto:</b> R$ $preco<br>";
     echo"<b>Quantidade no estoque:</b> $quantidade<br><br>";
}
if (isset($_GET["campanha"]) && isset($_GET["versao"])) {
     $campanha= $_GET["campanha"];
     $versao= $_GET["versao"];
     echo "<h2>Especificações da Pág ⚙️(GET)</h2>";
     echo"<b>Campanha:</b> $campanha<br>";
     echo"<b>Versão:</b> $versao<br>";

}
?>
</body>
</html>