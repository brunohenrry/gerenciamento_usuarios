<!DOCTYPE html>
<html>
<head>
    <title>Gerenciamento de Usuários</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Gerenciamento de Usuários</h2>
        <a href="add_user.php" class="btn btn-primary mb-3">Adicionar Usuário</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'list_users.php'; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
