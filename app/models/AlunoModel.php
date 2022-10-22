<?php



class AlunoModel
{
  public $id, $nome, $idade, $materia, $nota;
  public $rows;


  public function save()
  {
    // include 'DAO/AlunoDAO.php';
    $dao = new AlunoDAO();

    if (empty($this->id)) {
      $dao->insert($this);
    } else {
      $dao->update($this);
    }
  }



  public function getAllUsers()
  {
    // include 'DAO/AlunoDAO.php';
    $dao = new AlunoDAO();
    $this->rows = $dao->select();
  }



  public function getById(int $id)
  {
    // include 'DAO/AlunoDAO.php';
    $dao = new AlunoDAO();

    $object = $dao->selectById($id);

    return ($object)? $object : new AlunoModel();

  }


  public function delete(int $id)
  {
    // include 'DAO/AlunoDAO.php';
    $dao = new AlunoDAO();
    $dao->delete($id);
  }
}
