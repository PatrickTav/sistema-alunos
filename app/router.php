<?php
// include 'controllers/AlunoController.php';


// Recebendo URL do cliente
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

//url base a partir do localhost 
$urlBase = '/SistemasNotas/app/';


// rotas direcionadas por controllers
switch ($url) {
  case $urlBase:
    AlunoController::index();
    break;

  case  $urlBase . 'form';
    AlunoController::form();
    break;

  case $urlBase . 'form/save';
    AlunoController::save();
    break;

  case $urlBase . 'delete';
    AlunoController::delete();
    break;

  default:
    echo 'Página não encontrada';
}
