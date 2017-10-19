<?php
namespace Employeweb;
class WebserviceEmploye {
    
    public function getemploye() {      
        $data = file_get_contents("data/employees.json");
        $employe = json_decode($data, true);
       
        
        return $employe;
    }
    
    public function toxml() {
      
        $jsonFile_decoded = $this->getemploye();        
        $xml = new \SimpleXMLElement('<employees/>');

        //loop through the data, and add each record to the xml object
        foreach($jsonFile_decoded AS $members){
                    $member = $xml->addChild('employee');
                    $member->addChild('id', $members['id']);
                    $member->addChild('isOnline', $members['isOnline']);
                    $salary = substr($members['salary'], 1, strlen($members['salary']));
                    $member->addChild('salary', $salary);
                    $member->addChild('age', $members['age']);
                    $member->addChild('position', $members['position']);
                    $member->addChild('name', $members['name']);
                    $member->addChild('gender', $members['gender']);
                    $member->addChild('email', $members['email']);
                    $member->addChild('phone', $members['phone']);
                    $member->addChild('address', $members['address']);
                    
                    foreach($members['skills'] AS $skill){                            
                            $member->addChild('skill', $skill['skill']);
                            
                    }
                       
        }

           
         $xml->asXML('data/employees.xml');
    }
    
    public function getxml() {
        $xml = simplexml_load_file('data/employees.xml');
        
        return $xml;
    }
    
     public function getqueryxml($salary1, $salary2) {
         $xml = $this-> getxml();
         $emp = $xml->xpath('/employees/employee[salary = "1,393.47"]');
         
         return $emp;
    }
  
    
}
