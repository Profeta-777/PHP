<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
<h2>Informações do Aluno 👨‍🎓</h2>
<?php 
if ($_SERVER["REQUEST_METHOD"]== "POST") {
     $nome = $_POST["nome"];
     $idade = $_POST["idade"];
     $turma = $_POST["turma"];
     $nota1 = $_POST["nota1"];
     $nota2 = $_POST["nota2"];
     echo"<b>Nome do Aluno:</b> $nome<br>";
     echo"<b>Idade:</b> $idade<br>";
     echo"<b>Turma:</b> R$ $turma<br>";
     echo"<b>1ª Nota:</b> $nota1<br>";
     echo"<b>2ª Nota:</b> $nota2<br>";
}
$notatotal = ($nota1 + $nota2)/2;
if ($notatotal >= 6) {
     echo "<b>Nota Total: $notatotal</b> de 10<br>";
     echo "<i>Parabéns!!! Você foi aprovado com sucesso!</i><br><br>";
}
elseif ($notatotal >= 4) {
     echo "<b>Nota Total: $notatotal</b> de 10<br>";
     echo "<i>Você está de Recuperação! Se esforçe mais!</i><br><br>";
}
elseif ($notatotal >= 0) {
     echo "<b>Nota Total: $notatotal</b> de 10<br>";
     echo "<i>Você REPROVOU... Melhore na próxima vez.</i><br><br>";
}
if (isset($_GET["campanha"]) && isset($_GET["versao"])) {
     $campanha = $_GET["campanha"];
     $versao = $_GET["versao"];
     echo "<h2>Especificações da Pág ⚙️(GET)</h2>";
     echo"<b>Campanha:</b> {$campanha}<br>";
     echo"<b>Versão:</b> {$versao}<br>";

}
?>
</body>
</html>