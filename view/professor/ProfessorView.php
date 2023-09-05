<?php $professores = $_REQUEST["professores"]; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de professores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class="bg-secondary">
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view/navbar.php'; ?>
    <div class="container p-5">
        <h1 class="text-center fw-bold display-2 p-5">Cadastro De Professores</h1>
        
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-11 p-5">
                <button class="btn btn-light">
                    <a class="text-dark text-decoration-none" href="/<?php echo FOLDER; ?>/?controller=Professor&acao=salvar">Cadastrar Professor</a>
                </button>
            </div>
        </div>
        <h2 class="pt-5 text-center fw-bold">Registros</h2>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">nome</th>
                    <th scope="col">idade</th>
                    <td scope="col">Ações</td>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php foreach ($professores as $professorAtual) { ?>
                    <tr>

                        <td><?php echo $professorAtual["id"]; ?></td>
                        <td><?php echo $professorAtual["nome"]; ?></td>
                        <td><?php echo $professorAtual["idade"]; ?></td>
                        <td>
                            <a href="/<?php echo FOLDER ?>/?controller=Professor&acao=editar&id=<?php echo $professorAtual['id']; ?>" class="btn btn-primary">Atualizar Professor</a>
                            <a href="/<?php echo FOLDER ?>/?controller=Professor&acao=excluir&id=<?php echo $professorAtual['id']; ?>" class="btn btn-primary">excluir Professor</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>
    </div>
</body>

</html>