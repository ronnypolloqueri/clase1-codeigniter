<?php 
class Hola extends CI_Controller{
  function index(){
    echo "Hola mundo";
  }
  function saludo(){
    echo "Classe 1 CodeIgniter";
  }
  
  function saludo($id=0){
    switch($id){
      case 0:
        echo "Buenos Dìas";break;
      case 1:
        echo "Buenas Tardes;";break;
      case 2:
        echo "Buenjas Noches";break;
    }
  }
}
?>
