<?php
require_once "class_bmi_pasien.php";

        $dataPasien1 = new BMIPasien("2022-01-10", "P001", "Ahmad", "L", 68.9, 169);
        $dataPasien2 = new BMIPasien("2022-01-10", "P002", "Rina", "P", 55.3, 165);
        $dataPasien3 = new BMIPasien("2022-01-11", "P003", "Lutfi", "L", 45.2, 171);
        $array_pasien = [$dataPasien1, $dataPasien2, $dataPasien3];

        if(isset($_POST['submit'])){
            $dataPasien4 = new BMIPasien (date('Y-m-d'), $_POST['kode'], $_POST['nama'], $_POST['jk'], $_POST['berat'], $_POST['tinggi']);
            $array_pasien[] = $dataPasien4;
}

?>
<div></div>
    <table class="table" border="1" style="background-color:blanchedalmond;" width="100%">
        <thead>
            <tr style="background-color:beige;">
                <th>No</th>
                <th>Tanggal Periksa</th>
                <th>Kode Pasien</th>
                <th>Nama Pasien</th>
                <th>Jenis Kelamin</th>
                <th>Berat (Kg)</th>
                <th>Tinggi (Cm)</th>
                <th>Nilai BMI</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $nomor =1;
            foreach($array_pasien as $data){
        ?>
            <tr>
                <td><?=$nomor?></td>
                <td><?=$data->getDate()?></td>
                <td><?=$data->getKode()?></td>
                <td><?=$data->getNama()?></td>
                <td><?=$data->getGender()?></td>
                <td><?=$data->getBerat()?></td>
                <td><?=$data->getTinggi()?></td>
                <td><?=$data->getBMI()?></td>
                <td><?=$data->status()?></td>
            </tr>
        <?php  
        $nomor++;      
            }
        ?>
        </tbody>
    </table>