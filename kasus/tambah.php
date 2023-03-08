<?php

require 'controller.php';
$connect = mysqli_connect("localhost", "root", "", "db_study");

if (isset($_POST["submit"])) {


    if (tambah($_POST) > 0) {
        echo "<script> alert('data berhasil dimasukan')
                       document.location.href = 'index.php'
                       </script>";
    } else {
        echo "<script>
        alert('data tidak berhasil dimasukan')
        document.location.href = 'index.php'
        </script>";
    };
};
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        h1{
            text-align: center;
            color: #2c3333;
            background-color: #EDDBC7;
            border-radius: 5px; 
            padding: 30px;
        }
        body{
            padding: 60px;
            background-color: #EEE9DA;
        }
        .from{
            text-align: center;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <h1>SILAHKAN MASUKAN DATA SISWA</h1>
    <form div="from" action="" method="post">
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama</label>
        <input type="text" class="form-control" name=nama id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nis</label>
        <input type="text" class="form-control" name=nis id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Rombel</label>
        <input type="text" class="form-control" name=rombel id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Rayon</label>
        <input type="text" class="form-control" name=rayon id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Status</label>
        <input type="text" class="form-control" name=status id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Hobi</label>
        <input type="text" class="form-control" name=hobi id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Alamat</label>
        <input type="text" class="form-control" name=alamat id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Merek Laptop</label>
        <input type="text" class="form-control" name=laptop id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Cita - Cita</label>
        <input type="text" class="form-control" name=cita id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Gambar</label>
        <input type="file" class="form-control" name=gambar id="exampleFormControlInput1">
        </div>

        <button type="submit" name="submit">kirim</button>
        <br>
    </from>
</body>

</html>