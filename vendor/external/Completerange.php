<?php
namespace Parteuno;
class CompleteRange {    
    public function build($string) {      
        
        $parts = explode(',', $string);
        
        $ini = trim($parts[0]);
        $end = trim($parts[count($parts)-1]);
        $cadena = "";
        
        for ($i=$ini;$i<=$end;$i++){
            
            if (in_array($i, $parts)) {
              $cadena .=$i.","; 
            }else{
              $cadena .="<span style='color: #e9322d'>".$i."</span>,";  
            }
        }
        
        $newcad = substr($cadena, 0, strlen($cadena)-1);
        return $newcad;
    }    
    
}
