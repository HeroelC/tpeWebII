<?php

require_once "Api.php";
require_once "ApiSecuredController.php";

require_once "../model/ComentariosModel.php";
require_once "../model/UsuariosModel.php";

class SecuredComentariosApiController extends ApiSecuredController{

  private $ComentariosModel;
  private $UsuariosModel;

  function __construct()
  {

    parent::__construct();
    $this->ComentariosModel = new ComentariosModel();
    $this->UsuariosModel = new UsuariosModel();
  }

  //ESTA FUNCION VA EN LA API SecuredComentariosApiController
    function InsertarComentario(){
    
          $comentarioJSON = $this->getJSONData();

          $response = $this->ComentariosModel->insert($comentarioJSON->mensaje, $comentarioJSON->puntaje,
          $comentarioJSON->id_usuario, $comentarioJSON->id_recital);

          return $this->json_response($response, 200);
    }

    //ESTA FUNCION VA EN LA API SecuredComentariosApiController
    function BorrarComentario($param = null){

       if (count($param) == 1) {
         $id_comentario = $param[0];
         $response = $this->ComentariosModel->delete($id_comentario);
       }

           return $this->json_response($response, 200);

       //   if ($response == false) {
       //     return $this->json_response($response, 300);
       //   }else{
       //     return $this->json_response($response, 200);
       //   }
       // }else {
       //   return $this->json_response("No Task Specified", 300);
       // }

    }


}

 ?>
