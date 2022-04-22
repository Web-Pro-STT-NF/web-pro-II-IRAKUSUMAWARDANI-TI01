<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  width: 40%;
  border: 5px solid black;
  background-color: blanchedalmond ;
}

th, td {
  text-align: left;
  padding: 16px;
}
</style>
</head>
<body>
    <h1 align="center"><font face="Monospace" color="purple" size="5">Hasil Data Dispenser</h1>
    <table align="center">
        <tr>
            <td>
                <?php
                class Dispenser{
                    public $volume;
                    public $harga_segelas;
                    public $volume_gelas;
                    public $nama_minuman;
                    public const PHI = 3.14;
                    public $jari_jari;
                    public $tinggi;

                    public function __construct($jari, $tinggi){
                        $this -> jari_jari = $jari;
                        $this -> tinggi = $tinggi;
                        echo "<br/>Jari-jari : " . $jari . " cm";
                        echo "<br/>Tinggi : " . $tinggi . " cm";
                    }

                    public function VolumeGelas(){
                        return self::PHI * $this -> jari_jari * $this -> jari_jari * $this -> tinggi;
                    }
                }

                class Harga extends Dispenser{

                    public function __construct($harga_segelas){
                        $this -> harga_segelas = $harga_segelas;
                        echo"<br>";
                        echo "<br/> Diketahui : ";
                        echo "<br/>Harga per satu gelas : " . $harga_segelas;
                    }
                    public function Harga(){
                        return $this -> harga_segelas * 9 ;
                    }
                }
                    
                    echo "<br/>  PHI : " . Dispenser :: PHI;
                    $volumeGelas = new Dispenser(20, 13);
                    $harga = new Harga(1000);
                    echo "<br/> Volume Wadah : " . $volumeGelas -> VolumeGelas() . " cm3";
                    echo "<br/> Harga 9 Gelas : " . $harga -> Harga();

                ?>
            </td>
        </tr>
    </table>
</body>