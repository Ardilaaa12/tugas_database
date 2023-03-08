<?php
    require 'controller.php';

    $id = $_GET ["id"];
    $student = query("SELECT * FROM students WHERE id = $id")[0];

    if (isset($_POST["submit"]) ){

    if (ubah($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil diubah')
             document.location.href = 'index.php'
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data tidak berhasil diubah')
            document.location.href = 'index.php'
        </script>
        ";
    };
};
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body{
            padding: 60px;
            background-color: #EEE9DA;
        }
        h1{
            text-align: center;
            color: #2c3333;
            background-color: #EDDBC7;
            border-radius: 5px; 
            padding: 30px;
            margin-top: 25px;
            margin-left: 70px;
            margin-right: 70px;
        }
        .mb-3{
            width: 600px;
            margin-left: 280px;
        }
        .sumbit{
            margin-left: 280px;
        }
    </style>
</head>

<body>
    <h1>SILAHKAN UBAH DATA SISWA</h1>
    <form div="from" action="" method="post">

        <input type="hidden" class="form-control" name=id id="exampleFormControlInput1" value="<?= $student["id"]?>">

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama</label>
        <input type="text" class="form-control" name=nama id="exampleFormControlInput1" value="<?= $student["nama"]?>">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nis</label>
        <input type="text" class="form-control" name=nis id="exampleFormControlInput1" value="<?= $student["nis"]?>">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Rombel</label>
        <input type="text" class="form-control" name=rombel id="exampleFormControlInput1" value="<?= $student["rombel"]?>">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Rayon</label>
        <input type="text" class="form-control" name=rayon id="exampleFormControlInput1" value="<?= $student["rayon"]?>">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Status</label>
        <input type="text" class="form-control" name=status id="exampleFormControlInput1" value="<?= $student["status"]?>">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Hobi</label>
        <input type="text" class="form-control" name=hobi id="exampleFormControlInput1" value="<?= $student["hobi"]?>">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Alamat</label>
        <input type="text" class="form-control" name=alamat id="exampleFormControlInput1" value="<?= $student["alamat"]?>">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Merek Laptop</label>
        <input type="text" class="form-control" name=laptop id="exampleFormControlInput1" value="<?= $student["merk_laptop"]?>">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Cita - Cita</label>
        <input type="text" class="form-control" name=cita id="exampleFormControlInput1" value="<?= $student["cita_cita"]?>">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Gambar</label>
        <input type="file" class="form-control" name=gambar id="exampleFormControlInput1" value="<?= $student["gambar"]?>">
        </div>

        <button class="btn btn-outline-primary" type="submit" name="submit">kirim</button>
        <br>
    </form>
</body>

</html>