<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro de estudantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view/navbar.php'; ?>
    <h2 class="p-4 display-5 text-center fw-bold">Cadastrar Estudante</h2>
    <div class="container pt-5">

        <form class="row g-3" action="/<?php echo FOLDER; ?>/?controller=Estudante&acao=salvar" method="POST">
            <div class="mb-3">

                <h4 class="pb-4">digite seu nome:</h4>
                <input type="text" class="form-control" placeholder="nome" name="nome">

                <h4 class="pb-4 pt-4">digite sua idade:</h4>
                <input type="number" class="form-control pr-4" placeholder="idade" name="idade">

            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>

        </form>
    </div>
</body>

</html>