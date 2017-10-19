<?php
namespace Employeweb;
class Employees {
    
    public function lista($paramemail) {      
        $data = file_get_contents("data/employees.json");
        $employe = json_decode($data, true);
        $newemploye = $employe;
  
        $like = $paramemail;
       
        if ($like){
                    $newemploye = array_filter($employe, function ($item) use ($like) {
                        if (stripos($item['email'], $like) !== false) {
                            return true;
                        }
                        return false;
                    });
        }
        
        return $newemploye;
    }
    
    public function query($id) {
       $data = file_get_contents("data/employees.json");
       $employe = json_decode($data, true);
        
       $newemploye = array();
       
        if ($id){
                    $newemploye = array_filter($employe, function ($item) use ($id) {
                        if (stripos($item['id'], $id) !== false) {
                            return true;
                        }
                        return false;
                    });
        }
        
        return $newemploye;
    }
    
}
