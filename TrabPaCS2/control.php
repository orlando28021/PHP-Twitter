<?php
class control{
    public function run(){
        if(!$_GET['iniciar']){
            $this->_mostrarPrincipal();
        }else{
            $mensaje="";
            $this->_mostrarParcial($mensaje);
        }
    }
    
    private function _mostrarPrincipal(){
        require_once 'principalForm.html';
    }
    
    private function _mostrarParcial($mensaje){
        require_once 'trabParcial.html';
    }
    
}
$mi  = new control();
$mi->run();
?>
