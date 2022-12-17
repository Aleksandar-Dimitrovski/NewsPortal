<?php
class Math {
    // claass atributes
    public $pi =  3.14;
    // construct
    // methods
public function plostinaPravoagolnik($a,$b){
    $plostina = $a*$b;
    echo "Plostina na pravoagolnik P=a*b=$a * $b = $plostina <br>" ; 
}

public function plostinaKruznica($r){
    $P=$r*$r*$this->pi;
    echo "Plostina na kruznica P=r*r*pi -> ".$r."*".$r."*".$this->pi."=".$P. "<br>";
}

public function plostinaKvadrat($a){
    $P=$a*$a;
    echo "Plostina na kvadrat P=a*a=$a*$a=$P";
}
}
?>
