<?php
namespace Parteuno;
class ChangeString {    
    public function build($string) {
       $arr = $this->getabc();
       $max = strlen($string);
       $concat = "";
       $letra = "";
       $total =  count($arr)-1;
       for ($i = 0; $i < $max; $i++) {
         $letra =substr($string, $i, 1);         
     
         if (in_array($letra, $arr)) {
            $index = $clave = array_search($letra, $arr);
            if ($total == $index){
                $newindex = 0;
            }else{
                $newindex = $index + 1;
            }
            $concat .= $arr[$newindex];
         }else{
            $concat .= $letra;
         }
       }
        
        return $concat;
    }
    
    public function getabc() {
         $abecedario = array(
             "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "ñ", "o", "p", "q", "r",
"s", "t", "u", "v", "w", "x", "y", "z"
         );
         
         return $abecedario;
    }
}
