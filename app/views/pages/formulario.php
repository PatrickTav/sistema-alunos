<?php
  session_start();

  if($_SESSION['aviso']){
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>Cadastro de Aluno</title>
</head>

<body class="bg-secondary bg-opacity-50">

  <?php
  include 'views/partials/header.php';
  ?> 
  
  <div class="container mw-25 d-flex flex-column align-items-center">
    <h1 class="fs-2 mt-4 mb-4"> Cadastro de Aluno</h1>
    <form class="mb-5 min-w-25" method="post" action="/SistemasNotas/app/form/save">

      <input type="hidden" value="<?= $model->id ?>" name="id" />
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" name="nome" value="<?= $model->nome ?>" id="nome">

      </div>
      <div class="mb-3">
        <label for="idade" class="form-label">Idade</label>
        <input type="number" class="form-control" name="idade" value="<?= $model->idade ?>" id="idade">
      </div>
      <hr>
      <div class="mb-3">
        <label for="materia" class="form-label">Matéria</label>
        <input type="text" class="form-control" name="materia" value="<?= $model->materia ?>" id="materia">
      </div>
      <div class="mb-3">
        <label for="nota" class="form-label">Nota</label>
        <input type="number" step="any" class="form-control" name="nota" value="<?= $model->nota ?>" id="nota">
      </div>

      <button type="submit" class="btn btn-primary">Gravar</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
  </script>
</body>

</html>