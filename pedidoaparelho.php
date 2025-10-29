<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Agendar</title>
     <link rel="stylesheet" href="pedidoaparelho.css">
</head>
<body>
     <div class="pai">
     <h2><b>🪛 Agendamento de conserto para Aparelhos Eletrônicos 🔧</b></h2>
          <div class="filho">
          <form action="resultadoaparelho.php?campanha=consertodeaparelhos&versao=1.0" method="post">
          <label>Nome do Cliente: </label><br>
          <input type="text" class="caixa" name="nome" placeholder="Digite o seu nome" required><br><br>
          <label>Telefone para Contato: </label><br>
          <input type="number" class="caixa" style="width: 170px" step="1" name="tel" placeholder="Digite um Telefone valido" required><br><br>
          <label>Tipo de Aparelho: </label><br>
          <select name="aparelho" class="caixa" required>
               <option value="" disabled selected> ----Escolha uma Opção----</option>
               <option>Geladeira</option>
               <option>Micro-ondas</option>
               <option>Máquina de Lavar</option>
               <option>Fogão</option>
          </select><br><br>
          <label>Data para o Agendamento: </label><br>
          <input type="date" class="caixa" name="data" placeholder="Data para o conserto" required><br><br>
          <label>Descrição do Problema: </label><br>
          <input type="text" class="caixa" name="descricao" placeholder="Descreva o Problema"><br><br>
          <input type="submit" class="botao" value="Confirmar Agendamento"><br>
          </form>
          </div>
          </div>
</body>
</html>