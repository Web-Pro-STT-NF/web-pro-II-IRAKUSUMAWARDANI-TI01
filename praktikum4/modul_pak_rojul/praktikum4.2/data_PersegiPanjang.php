<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Persegi Panjang</title>
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
    <h2 align="center">Data Persegi Panjang</h2>
    <table align="center">
        <tr>
            <td>
                <?php
                    require_once "class_persegiPanjang.php";
                    $persegipanjang1 = new PersegiPanjang(20,9);
                    $persegipanjang2 = new PersegiPanjang(13,17);

                    echo "<br/>Luas Persegi Panjang pertama : " .$persegipanjang1->getLuas();
                    echo "<br/>Luas Persegi Panjang kedua : " .$persegipanjang2->getLuas();

                    echo "<br><br/>Keliling Persegi Panjang pertama: ".$persegipanjang1->getKeliling();
                    echo "<br/>Keliling Persegi Panjang kedua : ".$persegipanjang2->getKeliling();



                ?>
            </td>
        </tr>
    </table>

</body>