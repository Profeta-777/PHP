<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>

</head>
<body>
     <h2>Cadastre o aluno</h2>
          <form action="alunocadastrado.php?campanha=voltaasaula&versao=1.0" method="post">
               <label>Nome do Aluno: </label><br>
               <input type="text" name="nome" placeholder="Digite o nome do Aluno" required><br><br>
               <label>Idade: </label><br>
               <input type="number" name="idade" min="0" step="1"  placeholder="Idade do estudante" required><br><br>
               <label>Turma: </label><br>
               <input type="text" name="turma" placeholder="Digite a turma" required><br><br>
               <label>Nota 1: </label><br>
               <input type="number" name="nota1" min="0" step="0,01" placeholder="Informe a 1ª nota" required><br><br>
               <label>Nota 2: </label><br>
               <input type="number" name="nota2" min="0" step="0,01" placeholder="Informe a 2ª nota" required><br><br>
               <input type="submit" value="Enviar dados do estudante">
          </form>


</body>
</html>