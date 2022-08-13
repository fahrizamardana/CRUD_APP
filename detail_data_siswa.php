<?php
require 'koneksi.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Detail Data Siswa<a href="index.php" class="btn btn-danger float-end">Kembali</a></h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_GET['id'])) {
                           $id_siswa = mysqli_real_escape_string($con, $_GET['id']);
                           $query = "select * from siswa where id='$id_siswa'";
                           $query_run = mysqli_query($con, $query);

                           if (mysqli_num_rows($query_run)> 0) {
                            $siswa = mysqli_fetch_array($query_run);
                            ?>
                            <div class="mb-3">
                                <label for="">Nama Siswa</label>
                                <p class="form-control"><?= siswa['nama'];?></p>
                            </div>
                            <div class="mb-3">
                                <label for="">Email Siswa</label>
                                <p class="form-control"><?= siswa['email'];?></p>
                            </div>
                            <div class="mb-3">
                                <label for="">Nomor Telp</label>
                                <p class="form-control"><?= siswa['no_hp'];?></p>
                            </div>
                            <div class="mb-3">
                                <label for="">Jurusan</label>
                                <p class="form-control"><?= siswa['jurusan'];?></p>
                            </div>
                            <?php
                           } else {
                            echo "<h4>Data Siswa Tidak Ditemukan</h4>";
                           }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
