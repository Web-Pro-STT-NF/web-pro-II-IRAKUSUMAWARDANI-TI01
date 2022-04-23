<?php
class Account{
    public $no;
    protected $saldo;

    function __construct($no, $saldo){
        $this->no = $no;
        $this->saldo = $saldo;
    }

    function deposit($uang){
        $this->saldo = $this->saldo + $uang;
    }

    function penarikan($uang){
        $this->saldo = $this->saldo - $uang;
    }
    
    function cetak(){
        echo 'Nomor Account : '.$this->no;
        echo '<br/> Saldonya : '.$this->saldo;
    }
}