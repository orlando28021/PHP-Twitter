<?php

class frases {
   
    public function generar($num){
        switch ($num) {
    case 1: $frase = "Yo también estoy cansado de"; break;
    case 2: $frase = "Compartimos el mismo sentimiento sobre"; break;
    case 3: $frase = "Yo también estoy exhausto de"; break;
    default : $frase = "No puedo creer que estes cansado de "; break;
}
return $frase;
    }
    
    public function tiempo(){
        
    }
    
}

?>
