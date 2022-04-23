<?php 
class Pasien{
    public $kode;
    public $nama;
    public $tgl_lahir;
    public $gender;
    public $tmp_lahir;

    function getKode(){
       return $this->kode;
    }
    function getNama(){
        return $this->nama;
    }
    function getTgl_lahir(){
        return $this->tgl_lahir;
    }
    function getGender(){
        return $this->gender;
    }
    function getTmp_lahir(){
        return $this->tmp_lahir;
    }
}

?>