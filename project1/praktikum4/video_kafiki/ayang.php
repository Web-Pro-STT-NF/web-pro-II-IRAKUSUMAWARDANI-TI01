<?php
// membuat class ayang
class Ayang {
    public $nama;
    public $umur;
    public $member;

//membuat constructor
public function __construct($nama, $umur, $member){
    $this->nama = $nama;
    $this->umur = $umur;
    $this->member = $member;
}

//method
    public function konser(){
        return "{$this->nama} sedang konser";
    }
    public function dancer(){
        return "{$this->nama} sedang dancer";
    }
    public function membaca(){
        return "{$this->nama} sedang membaca";
    }
}