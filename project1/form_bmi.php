<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM BMI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
    <?php
        require_once "class_bmi_pasien.php";
    ?>
    <form method= "POST" class = "ml-3" action = "tabel_data_bmi.php">
            <div class="col-12"></div>
        <!-- <div class="form-group row">
            <label for="tanggal" class="col-4 col-form-label">Tanggal Periksa</label> 
            <div class="col-8">
                <input id="tanggal" name="tanggal" type="text" class="form-control">
            </div>
        </div> -->
        <div class="form-group row">
            <label for="kode" class="col-4 col-form-label">Kode Pasien</label> 
            <div class="col-8">
                <input id="kode" name="kode" placeholder="Masukkan Kode Pasien" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                <div class="col-8">
            <input id="nama" name="nama" placeholder="Masukkan Nama Lengkap" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label> 
            <div class="col-4">
        
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="P"> 
                    <label for="jk_0" class="custom-control-label">
                        <img src="dist/img/perempuan.png" alt="perempuan" width="50%">
                    </label>
                </div>
            </div>
            <div class="col-3">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="L"> 
                        <label for="jk_1" class="custom-control-label">
                        <img src="dist/img/lakilaki.png" alt="lakilaki" width="50%">
                        </label>
                    </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="berat" class="col-4 col-form-label">Berat</label> 
            <div class="col-8">
                <input id="berat" name="berat" placeholder="Masukkan Dengan Angka" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="tinggi" class="col-4 col-form-label">Tinggi</label> 
            <div class="col-8">
                <input id="tinggi" name="tinggi" placeholder="Masukkan Dengan Angka " type="text" class="form-control">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    <br><br/>

   


</body>
</html>