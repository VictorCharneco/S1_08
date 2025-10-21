<?php

namespace App;

class Vehicle{

    private int $velocitat;

    public function __construct(int $velocitat){
        $this->velocitat = $velocitat;
    }

    public function getVelocitat():int{
        return $this->velocitat;
    }

    public function setVelocitat(int $velocitat): void{
        $this->velocitat=$velocitat;
    }

    public function sensorDeVelocitat():string{
        $kmHora = $this->velocitat;

        if($kmHora <= 0){
            return "Introdueix una velocitat vàlida";
        }elseif($kmHora < 30){
            return "Molt lent";
        }elseif($kmHora <= 60){
            return "Velocitat adequada";
        }elseif($kmHora <= 80){
            return "Excés lleu";
        }elseif($kmHora <= 100){
            return "Excés moderat";
        }else{
            return "Excés greu";
        }
    }
}

?>