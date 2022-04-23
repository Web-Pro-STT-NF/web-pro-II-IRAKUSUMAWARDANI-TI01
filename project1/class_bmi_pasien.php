<?php
require_once "class_pasien.php";
require_once "class_bmi.php";

class BMIPasien extends Pasien{
    use BMI;
    public $tanggal_periksa;

    function __construct($date, $kode, $nama, $gender, $berat, $tinggi){
        $this->tanggal_periksa = $date;
        $this->kode = $kode;
        $this->nama = $nama;
        $this->gender = $gender;
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }

    function getDate(){
        return $this->tanggal_periksa;
    }
}

?>