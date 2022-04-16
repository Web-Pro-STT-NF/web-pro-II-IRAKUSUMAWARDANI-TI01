<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Lingkaran</title>
</head>
<style>
    table{
        border-collapse: collapse;
        width: 50%;
        border: 2px solid;
    }
    th, td{
        text-align: left;
        padding: 16px;
    }
</style>

<body>
    <h2 align="center">Data Lingkaran</h2>
    <table align="center">
        <tr>
            <td>
                <?php
                    require_once "class_lingkaran.php";
                    echo "NILAI PHI " . Lingkaran::PHI;
                    $ling1 = new Lingkaran(20);
                    $ling2 = new Lingkaran(9);

                    echo "<br/>Luas Lingkaran I : " .$ling1->getLuas();
                    echo "<br/>Luas Lingkaran II : ".$ling2->getLuas();

                    echo "<br><br/>Keliling Lingkaran I: ".$ling1->getKeliling();
                    echo "<br/>Keliling Lingkaran II : ".$ling2->getKeliling();
                ?>
            </td>
        </tr>

    </table>
</body>
</html>
