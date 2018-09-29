<?php

require_once "./view/EstadiosView.php";
require_once "./model/EstadiosModel.php";

class EstadiosController
{

  private $EstadiosModel;
  private $EstadiosView;

  function __construct()
  {

    $this->EstadiosModel = new EstadiosModel;
    $this->EstadiosView = new EstadiosView;
  }

  function mostrarEstadios(){

   $Estadios = $this->EstadiosModel->get();
   $this->view->Home($Estadios);
  }

  function eliminarEstadio($idEstadio){

    $this->EstadiosModel->Delete($idEstadio);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function agregarEstadio(){

    if((isset($_POST['nombre'])) && (isset($_POST['capacidad']))){
      $nombre = $_POST['nombre'];
      $capacidad = $_POST['capacidad'];

      $this->EstadiosModel->insert($nombre, $capacidad);
      header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    }

  }

}

 ?>
