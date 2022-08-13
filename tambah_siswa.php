<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <?php include('message.php')?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tambahkan Siswa
                    <a href="index.php" class="btn btn-danger float-end">Kembali</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="post">
                        <div class="mb-3">
                            <label for="">Nama Siswa</label>
                            <input type="text" name="nama" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Email Siswa</label>
                            <input type="text" name="email" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Nomor Telp</label>
                            <input type="text" name="no_hp" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Jurusan</label>
                            <input type="text" name="jurusan" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                        <button type="submit" name="simpan" class="btn btn-primary">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    

















































    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
