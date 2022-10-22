<?php

spl_autoload_register(function ($class) {


  $class_controller = 'controllers/' . $class . '.php';
  $class_models = 'models/' . $class . '.php';
  $class_dao = 'DAO/' . $class . '.php';

  

  if (file_exists($class_controller)) {
    include $class_controller;
  } else if (file_exists($class_models)) {
    include $class_models;
  } else if (file_exists($class_dao)) {
    include $class_dao;
  }
});
