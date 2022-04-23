
        <div class="row">
            <div class="col-12 bg-light pt-3">
                <p><b> Sistem Penilaian</b></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Form Nilai Siswa</p>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-12"></div>
            <form method="POST" action="index.php">
                <div class="form-group row">
                    <label for="namalengkap" class="col-4 col-form-label">Nama Lengkap</label>
                    <div class="col-5">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-card"> </i>
                                </div>
                            </div>
                            <input id="namalengkap" name="namalengkap" placeholder="masukkan nama lengkap" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
                    <div class="col-5">
                        <select id="matkul" name="matkul" class="custom-select">
                            <option value="ddp">Dasar-dasar pemograman</option>
                            <option value="bd">Basis Data</option>
                            <option value="pw">Pemograman Web</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label>
                    <div class="col-3">
                        <input id="nilai_uts" name="nilai_uts" placeholder="masukkan nilai UTS" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label>
                    <div class="col-3">
                        <input id="nilai_uas" name="nilai_uas" placeholder="masukkan nilai UAS" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label>
                    <div class="col-3">
                        <input id="nilai_tugas" name="nilai_tugas" placeholder="masukkan nilai" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
            <?php
                include_once 'libfungsi.php';
                $proses = isset($_POST['proses']) ? $_POST['proses'] : '';
                $nama = isset($_POST['namalengkap']) ? $_POST['namalengkap'] : '';
                $mata_kuliah = isset($_POST['matkul']) ? $_POST['matkul'] : '';
                $nilai_uts = isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
                $nilai_uas = isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';
                $nilai_tugas = isset($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : '';

                echo "<b/>Nama Lengkap : $nama";
                echo "<br/><b/>Nilai UTS : $nilai_uts";
                echo "<br/><b/>Nilai UAS : $nilai_uas";
                echo "<br/><b/>Nilai Tugas : $nilai_tugas";
                
                $nilai_akhir = presentase($nilai_uts, $nilai_uas, $nilai_tugas);
                $grade = grade_nilai($nilai_akhir);

                echo "<br/>Nilai Akhir : $nilai_akhir";
                echo "<br/>Status : ", kelulusan($nilai_akhir);
                echo "<br/>Grade Nilai : ", grade_nilai($nilai_akhir);
                echo "<br/> Predikat Nilai :" , predikat($grade);

            ?>
        </div>
        <br>
        <div class="row">
            <div class="col-12 bg-light pt-3">
                <p>Develop by 민요라</p>
            </div>
        </div>

    </div>


</body>

</html>