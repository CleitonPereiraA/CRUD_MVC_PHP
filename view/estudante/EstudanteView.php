<?php $estudantes = $_REQUEST["estudantes"]; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de estudantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class="bg-secondary">
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view/navbar.php'; ?>
    <h1 class="text-center fw-bold display-2 p-5">Cadastro De Estudantes</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-11 p-5">
                <button class="btn btn-light">
                    <a class="text-dark text-decoration-none" href="/<?php echo FOLDER; ?>/?controller=Estudante&acao=salvar">Cadastrar estudante</a>
                </button>
            </div>
        </div>
        <h2 class="pt-5 text-center fw-bold">Registros</h2>
        <table class="table table-dark">
            <thead>
                <tr>
                    <td scope="col">#</td>
                    <td scope="col">nome</td>
                    <td scope="col">idade</td>
                    <td scope="col">Ações</td>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php foreach ($estudantes as $estudanteAtual) { ?>
                    <tr>
                        <td><?php echo $estudanteAtual["id"]; ?></td>
                        <td><?php echo $estudanteAtual["nome"]; ?></td>
                        <td><?php echo $estudanteAtual["idade"]; ?></td>
                        <td>
                            <a href="/<?php echo FOLDER ?>/?controller=Estudante&acao=editar&id=<?php echo $estudanteAtual['id']; ?>" class="btn btn-primary">Atualizar Estudante</a>
                            <a href="/<?php echo FOLDER ?>/?controller=Estudante&acao=excluir&id=<?php echo $estudanteAtual['id']; ?>" class="btn btn-primary">excluir Estudante</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>