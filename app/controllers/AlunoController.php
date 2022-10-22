<?php


class AlunoController
// Mandar para a listagem de alunos
{
  public static function index()
  {
    $model = new AlunoModel();
    $model->getAllUsers();

    include 'views/pages/home.php';
  }


// Mandar para um formulário para que o aluno seja cadastrado
  public static function form()
  {
    $model = new AlunoModel();

    if (isset($_GET['id']))
      $model = $model->getById((int) $_GET['id']);

    include 'views/pages/formulario.php';
  }



// O ato de salvar o aluno no banco de dados
  public static function save()
  {
    $model = new AlunoModel();
    $namePost = $model->name;
    $idadePost = $model->idade;
    $materiaPost = $model->materia;
    $notaPost = $model->nota;

    $namePost = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $idadePost = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    $materiaPost = filter_input(INPUT_POST, 'materia', FILTER_SANITIZE_SPECIAL_CHARS);
    $notaPost = filter_input(INPUT_POST, 'nota', FILTER_SANITIZE_NUMBER_FLOAT);

    if ($namePost && $idadePost && $materiaPost && $notaPost) {

      $model->id  = $_POST['id'];
      $model->nome  = $_POST['nome'];
      $model->idade  = $_POST['idade'];
      $model->materia  = $_POST['materia'];
      $model->nota  = $_POST['nota'];
      $model->save();

      header("Location: /SistemasNotas/app/");
    } else {

      $_SESSION['aviso'] = 'Preencha os dados Corretamente';
      header("Location: /SistemasNotas/app/form");
    }
  }


// Para a rota de deletar os dados de um aluno
  public static function delete()
  {
    $model = new AlunoModel();
    $model->delete((int) $_GET['id']);
    header("Location: /SistemasNotas/app/");
  }
}
