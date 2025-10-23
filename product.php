<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>

</head>
<body>
     <h2>Formulário Black Friday 🛒🚨</h2>
          <form action="estoque.php?campanha=blackfriday&versao=2.0" method="post">
               <label>Nome do Produto: </label><br>
               <input type="text" name="nome" placeholder="Digite qual o produto" required><br><br>
               <label>Categoria: </label><br>
               <input type="text" name="categoria" placeholder="Categoria do produto" required><br><br>
               <label>Preço: </label><br>
               <input type="number" name="preco" placeholder="Digite o preço" required><br><br>
               <label>Quantidade em estoque: </label><br>
               <input type="number" name="quantidade" placeholder="Quantia no estoque" required><br><br>
               <input type="submit" value="Enviar o Produto">
          </form>


</body>
</html>