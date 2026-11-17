    <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Loja de Livros - Catálogo</title>
    <link rel="stylesheet" href="style.css">
</head>
    <html>
       <h2>Cadastrar Novo Livro</h2>
        
        <form action="insert.php" method="POST">
            <label>Título do Livro:</label>
            <input type="text" name="titulo" required>

            <label>Autor:</label>
            <input type="text" name="autor" required>

            <label>Preço:</label>
            <input type="number" name="preco" step="0.01" required>

            <button type="submit">Salvar Livro</button>
        </form>
    </html>