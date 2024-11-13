<?php

require_once './models/Usuario.php';

class UsuarioController
{
  protected $model;

  function __construct()
  {
    $this->model = new UsuarioModel();
  }

  function login($data)
  {
    $result = $this->model->login($data);

    if ($result == false) {
      $_SESSION['login_error'] = 'Usuário ou senha inválidos';
      header('Location: ./login.php');
    } else {
      unset($_SESSION['login_erro']);
      header('Location: ../index.php');
    }

    
  }

  function logout()
  {
    session_destroy();
    header('Location: ../index.php');
  }
}
