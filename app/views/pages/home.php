<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Lista de Alunos</title>
</head>

<body class="bg-secondary bg-opacity-50">

    <?php include 'views/partials/header.php' ?>
    <div class="container-sm">
        <h1>Alunos</h1>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">COD</th>
                    <th scope="col">Nome</th>
                    <th scope="col">idade</th>
                    <th scope="col">Materia</th>
                    <th scope="col">Nota</th>
                    <th scope="col"></th>
                </tr>
            </thead>

            <?php foreach ($model->rows as $item) : ?>
                <tbody>
                    <tr>
                        <th scope="row"><?= $item->id ?></th>
                        <td><?= $item->nome ?></td>
                        <td><?= $item->idade ?></td>
                        <td><?= $item->materia ?></td>
                        <td><?= $item->nota ?></td>

                        <td>
                            <button type="button" class="btn btn-warning">
                                <a class="text-black fw-bold" href="/SistemasNotas/app/form?id=<?= $item->id ?>">Editar</a>
                            </button>
                            <button type="button" onclick="return confirm('Deseja deletar aluno(a) do banco de Dados?')" class="btn btn-danger">
                                <a class="text-black fw-bold" href="/SistemasNotas/app/delete?id=<?= $item->id ?>">Deletar</a>
                            </button>
                        </td>

                    </tr>
                </tbody>

            <?php endforeach ?>

        </table>
    </div>
</body>

</html>