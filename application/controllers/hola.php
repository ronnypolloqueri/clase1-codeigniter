<?php 
class Hola extends CI_Controller{
  function index(){
    echo "Hola mundo";
  }
   
  function _holas($nombre='Nadie', $edad =0) {
    echo "Hola tu nombre es :   ".$nombre." y tu edad ".$edad ;
  }
   
   
  
  private function saludo($id=0){
    switch($id){
      case 0:
        echo "Buenos Dìas";break;
      case 1:
        echo "Buenas Tardes;";break;
      case 2:
        echo "Buenjas Noches";break;
    }
  }
  
  function edad($anio){
    echo "Tu edad es : ".$this->_calcular($anio);
  }
  
  
  function _calcular($anio){
    $edad = 2014 -  $anio;
    return $edad;
  }
  
  
}
?>
