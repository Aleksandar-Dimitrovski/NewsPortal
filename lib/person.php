<?php
class Person {
    // Class atributes
    public $first_name;
    private $age_adult = 18;  
    // Construct
    //Geters and Setters
 public function setAgeAdult($age_adult){
        $this->age_adult=$age_adult;
    }    
 public function getAgeAdult(){
        return $this->age_adult;
    }
    
    // Methods
 public function isAdult($age) {
    if ($age >= $this->age_adult){
        echo " Polnoleten <br>";
    }else{
        echo " Maloleten <br>";
    }
    }

 public function upisVoGradinka($age){
    if($age < 6){
        echo "Uspesno se zapisavte vo gradinka <br>";
    }else{
        echo "Ne gi ispolnuvate uslovite za upis vo gradinka <br>";
    }
    }

 public function osnovnoObrazovanie($age){
    if($age >= 6 && $age<=14){
        echo "Uspesno se zapishavte vo osnovno uciliste <br>";
    }else{
        echo "Ne gi ispolnuvate uslovite za upis vo osnovno uciliste <br>";
    }
    }

 public function srednoObrazovanie($age){
    if($age>14 && $age<=18){
        echo "Uspesno se zapisavte vo sredno uciliste <br>";
    }else{
        echo "Ne gi ispolnuvate uslovite za upis vo sredno uciliste <br>";
    }
    }

 public function upisNaFakultet($age){
    if($age >18 && $age <=22){
        echo "Uspesno se zapisavte na fakultet <br><br>";
    }else{
        echo "Ne gi ispolnuvate uslovite za upis na fakultet <br><br>";
    }    
    }






}

?>