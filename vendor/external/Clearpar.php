<?php
namespace Parteuno;
class ClearPar {    
    public function build($string) {        
        $NumPar = substr_count($string, '()');
        $cadena = "";
        for ($i=0;$i<$NumPar;$i++){
           $cadena .= "()"; 
        }
        
        return $cadena;
     }
        
}    
    

