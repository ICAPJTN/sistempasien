<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h3>Silahkan Log-in Terlebih Dahulu</h3>
        </div>
    </div>

    <div class="row">
        <!--colomn kedua-->
        <div class="col-sm-9 col-xs-12">
            <!--  <img src="img/dinas_lh.png" style="max-width:100%; height:150px;"> -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Data Pasien</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nik</th>
                                <th>Nama Pasien </th>
                                <th>No.Hp</th>
                                <th>Tanggal lahir</th>
                                <th>Alamat</th>

                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tabel_pasien";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                            ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['nis'] ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['kelas'] ?></td>
                                    <td><?= $data['tgl_lahir'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        <!--akhir colomn kedua-->
        <!-- FORM LOGIN -->
        <div class="col-sm-3 col-xs-12">
            <!--Jika terjadi login error tampilkan pesan ini-->
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger">Maaf! Login Gagal, Coba Lagi..</div>
            <?php } ?>

            <?php if (isset($_SESSION['username'])) { ?>
                <div class="alert alert-info">
                    <strong>Welcome <?= $_SESSION['nama'] ?></strong>
                </div>
            <?php
            } else { ?>

                <div class="panel panel-success">
                    <div class="panel-heading">

                        <h3 class="panel-title"><i class="fa fa-user-secret"></i>Log-in Here</h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="proses_login.php" method="post">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="text" name="user" class="form-control input-sm" placeholder="Username" required="" autocomplete="off" />
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="password" name="pwd" class="form-control input-sm" placeholder="Password" required="" autocomplete="off" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" name="login" value="login" class="btn btn-success btn-block"><span class="fa fa-user"></span>
                                        Log-in Disini
                                    </button>
                                </div>
                        </form>
                    </div>
                </div>

        </div>
    <?php } ?>
    </div>
</div>