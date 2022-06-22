<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nim'               => '1102101',
                'nama'              => 'Ira Kusuma Wardani',
                'jenis_kelamin'     => 'Perempuan',
                'tgl_lahir'         => '2002-01-20',
                'tempat_lahir'      => 'Jakarta',
                'program_study'     => 'Teknik Informatika',
                'ipk'               => '3.5',
                'created_at'        => Time::now()
            ],
            [
                'nim'               => '1102102',
                'nama'              => 'Min Yoongi',
                'jenis_kelamin'     => 'Laki-Laki',
                'tgl_lahir'         => '1993-03-09',
                'tempat_lahir'      => 'Daegu',
                'program_study'     => 'Teknik Informatika',
                'ipk'               => '3.4',
                'created_at'        => Time::now()
            ],
        ];
        $this->db->table('mahasiswa')->insertBatch($data);
    }
}