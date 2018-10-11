<?php

require_once "./model/RecitalesModel.php";
require_once "./model/EstadiosModel.php";

require_once "./view/TourView.php";

require_once "SecuredController.php";

class TourController extends SecuredController
{
  //Atributos model
  private $RecitalesModel;
  private $EstadiosModel;

  //Atributos view
  private $TourView;

  function __construct()
  {

    parent::__construct();
    $this->RecitalesModel = new RecitalesModel();
    $this->EstadiosModel = new EstadiosModel();

    $this->TourView = new TourView();
  }

##### Mostrar unión de las dos tablas ######

  function Tour(){

    $recitales = $this->RecitalesModel->getAll();
    $tabla = $this->RecitalesModel->getTable();
    $estadios = $this->EstadiosModel->getAll();

    $this->TourView->mostrarTablaAdmin($estadios, $recitales, $tabla);
  }

##### Funciones de los recitales #####

  //¿Y si no esta seteado?
  function eliminarRecital($idRecital){

        $this->RecitalesModel->delete($idRecital);
        header(TOUR);
  }

  //Faltaria agregar el error si no carga todo los datos
  function agregarRecital(){

    if((isset($_POST['nombre'])) && (isset($_POST['precio'])) &&(isset($_POST['id_estadio']))){
      $nombre = $_POST['nombre'];
      $precio = $_POST['precio'];
      $id_Estadio = $_POST['id_estadio'];

      $this->RecitalesModel->Insert($nombre, $precio, $id_Estadio);
      header(TOUR);
    }
  }

  function editarRecital($idRecital){

    $Estadios = $this->EstadiosModel->getAll();
    $Recital = $this->RecitalesModel->getById($idRecital);

    $this->TourView->editarRecital($Recital, $Estadios);
  }

  function actualizarRecital($idRecital){

    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $idEstadio = $_POST['estadio_id'];

    $this->RecitalesModel->edit($nombre, $precio, $idEstadio, $idRecital[0]);
    header(TOUR);
  }

  ##### Funciones de los estadios #####

  function agregarEstadio(){

      if((isset($_POST['nombre'])) && (isset($_POST['capacidad']))){
        $nombre = $_POST['nombre'];
        $capacidad = $_POST['capacidad'];

        $this->EstadiosModel->insert($nombre, $capacidad);
        header(TOUR);
      }
  }

  function eliminarEstadio($idEstadio){

    $this->EstadiosModel->Delete($idEstadio);
    header(TOUR);
  }

  function editarEstadio($idEstadio){

    $Estadio = $this->EstadiosModel->getById($idEstadio);
    $this->TourView->editarEstadio($Estadio);
  }

  function actualizarEstadio($idEstadio){

    $nombre = $_POST['nombre'];
    $capacidad = $_POST['capacidad'];

    $this->EstadiosModel->edit($nombre, $capacidad, $idEstadio[0]);
    header(TOUR);
  }

}

 ?>
