<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Informações do Usuário</title>
</head>
<h2>Dados de Usuários</h2>
<body>
    <h2>Formulário de Informações do Usuário</h2>
    <form action="processa_informacoes.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required><br><br>
        
        <label for="cidade">Cidade:</label>
        <input type="text" id="cidade" name="cidade" required><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>