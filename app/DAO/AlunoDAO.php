<?php

class AlunoDAO
{

  private $conn;

  // conexão com o Banco de Dados;

  public function __construct()
  {
    $dbname = 'alunosmvc';
    $host = 'localhost';
    $username = 'root';
    $password = '';

    $dsn = "mysql:host=$host;dbname=$dbname";

    $this->conn = new PDO($dsn, $username, $password);
    
  }




  // inserindo no bando de dados;
  public function insert(AlunoModel $model)
  {
    $sql = 'INSERT INTO alunos (nome, idade, materia, nota) VALUES (?,?,?,?)';

    $stmt = $this->conn->prepare($sql);

    $stmt->bindValue(1, $model->nome);
    $stmt->bindValue(2, $model->idade);
    $stmt->bindValue(3, $model->materia);
    $stmt->bindValue(4, $model->nota);

    $stmt->execute();
  }


  // Buscar os alunos para mostrar na tela;
  public function select()
  {
    $sql = "SELECT * FROM alunos";

    $stmt = $this->conn->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_CLASS);
  }



  // Editando dados do Aluno;
  public function update(AlunoModel $model)
  {
    $sql = 'UPDATE alunos SET nome=?, idade=?, materia=?, nota=? WHERE id=?';

    $stmt = $this->conn->prepare($sql);

    $stmt->bindValue(1, $model->nome);
    $stmt->bindValue(2, $model->idade);
    $stmt->bindValue(3, $model->materia);
    $stmt->bindValue(4, $model->nota);
    $stmt->bindValue(5, $model->id);

    $stmt->execute();
  }


// Deletar aluno;
  public function delete(int $id)
  {
    $sql = "DELETE FROM alunos WHERE id=?";

    $stmt = $this->conn->prepare($sql);
    $stmt->bindValue(1, $id);

    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_CLASS);
  }





  public function selectById(int $id)
  {
    // include_once 'models/AlunoModel.php';

    $sql = "SELECT * FROM alunos WHERE id =?";

    $stmt = $this->conn->prepare($sql);
    $stmt->bindValue(1, $id);
    $stmt->execute();

    return $stmt->fetchObject('AlunoModel');
  }
}
