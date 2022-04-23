<?php
trait BMI {
    public $bmi;
    public $berat;
    public $tinggi;
    public static $counter = 10;

    function getBerat(){
        return (float)$this->berat;
    }
    function getTinggi(){
        return (float)$this->tinggi;
    }


    function getBMI(){
        $tinggi_meter= (float)$this-> tinggi/100; 
        $this-> bmi=((float)$this-> berat/pow($tinggi_meter,2));
        return $this-> bmi;
    }
    function status(){
        if ($this-> bmi < 18.5){
            return "Kekurangan bobot";
        }else if ($this-> bmi < 25){
            return "Sehat";
        }else if ($this-> bmi < 30){
            return "Kelebihan Bobot";
        }else {
            return "Obesitas";
        }
    }
}

?>