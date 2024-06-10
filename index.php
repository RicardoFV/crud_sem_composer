<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Contatos</title>
    <link rel="stylesheet" href="./public/css/estilo.css">
</head>
<body>
    <div class="table-container">
        <h1>Lista de Contatos</h1>
        <a href="./public/novo_contato.php" class="new-entry-btn">Novo Cadastro</a>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Estado</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Maria Silva</td>
                    <td>(11) 99999-9999</td>
                    <td>maria.silva@example.com</td>
                    <td>SP</td>
                    <td>
                        <button class="edit-btn">Editar</button>
                        <button class="delete-btn">Excluir</button>
                    </td>
                </tr>
                <tr>
                    <td>João Souza</td>
                    <td>(21) 88888-8888</td>
                    <td>joao.souza@example.com</td>
                    <td>RJ</td>
                    <td>
                        <button class="edit-btn">Editar</button>
                        <button class="delete-btn">Excluir</button>
                    </td>
                </tr>
                <!-- Mais linhas de exemplo podem ser adicionadas aqui -->
            </tbody>
        </table>
    </div>
</body>
</html>
