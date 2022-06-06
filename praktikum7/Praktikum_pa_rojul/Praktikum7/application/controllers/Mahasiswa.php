<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa extends CI_Controller {
    public function index(){
        $this->load->model('mahasiswa_model','mhs1');
        $this->mhs1->id=1;
        $this->mhs1->nim='0110221016';
        $this->mhs1->nama='Kim Namjoon';
        $this->mhs1->gender='L';
        $this->mhs1->ipk= 4.00;


        $this->load->model('mahasiswa_model','mhs2');
        $this->mhs2->id=2;
        $this->mhs2->nim='0110121015';
        $this->mhs2->nama='Kim Seokjin';
        $this->mhs2->gender='L';
        $this->mhs2->ipk= 3.85;


        $this->load->model('mahasiswa_model','mhs3');
        $this->mhs3->id=3;
        $this->mhs3->nim='0110111017';
        $this->mhs3->nama='Min Yoongi';
        $this->mhs3->gender='L';
        $this->mhs3->ipk= 3.90;

        $this->load->model('mahasiswa_model','mhs4');
        $this->mhs4->id=4;
        $this->mhs4->nim='0110121018';
        $this->mhs4->nama='Jeong Heosok';
        $this->mhs4->gender='L';
        $this->mhs4->ipk= 3.80;

        $this->load->model('mahasiswa_model','mhs5');
        $this->mhs5->id=5;
        $this->mhs5->nim='0110121019';
        $this->mhs5->nama='Park Jimin';
        $this->mhs5->gender='L';
        $this->mhs5->ipk= 3.85;

        $this->load->model('mahasiswa_model','mhs6');
        $this->mhs6->id=6;
        $this->mhs6->nim='0110121019';
        $this->mhs6->nama='Kim Taehyung';
        $this->mhs6->gender='L';
        $this->mhs6->ipk= 3.80;

        $this->load->model('mahasiswa_model','mhs7');
        $this->mhs7->id=7;
        $this->mhs7->nim='0110121019';
        $this->mhs7->nama='Jeon Jungkook';
        $this->mhs7->gender='L';
        $this->mhs7->ipk= 3.80;

        $list_mhs = [$this->mhs1, $this->mhs2, $this->mhs3, $this->mhs4, $this->mhs5, $this->mhs6, $this->mhs7];
        $data['list_mhs']=$list_mhs;


        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/index',$data);
        $this->load->view('layout/footer');
        
    }
}
