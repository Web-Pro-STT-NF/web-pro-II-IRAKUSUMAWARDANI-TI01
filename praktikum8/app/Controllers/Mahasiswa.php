<?php

namespace App\Controllers;

class Mahasiswa extends BaseController
{
    public function index()
    {
        return view('formMahasiswa');
    }

    public function save()
    {
        $data['nim'] = $this->request->getVar('nim');
        $data['nama'] = $this->request->getVar('nama');
        $data['jenis_kelamin'] = $this->request->getVar('jenis_kelamin');
        $data['tgl_lahir'] = $this->request->getVar('tgl_lahir');
        $data['tempat_lahir'] = $this->request->getVar('tempat_lahir');
        $data['program_study'] = $this->request->getVar('program_study');
        $data['ipk'] = $this->request->getVar('ipk');
        return view('dataMahasiswa', $data);
    }
}