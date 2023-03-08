<?php
    require 'controller.php';

    $id = $_GET ["id"];
    $student = query("SELECT * FROM students WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
    body{
        background-color: #EEE9DA;
        padding-top : 80px;
    }
    h1{
        text-align: center;
        color: #2c3333;
        background-color: #EDDBC7;
        border-radius: 5px; 
        padding: 30px;
        margin: 25px 70px;
    }
    .card{
        margin-left: 450px;
    }
    </style>
</head>
<body>
    <h1>DATA SISWA</h1>
    <div class="card" style="width: 18rem;">
        <img src="img/<?= $student["gambar"];?>" class="card-img-top" alt="">
        <div class="card-body">
            <h5 class="card-title"><?= $student["nama"] ?></h5>
            <p class="card-text"><?= $student["nis"] ?></p>
        </div>
        <ul class="list-group list-group-flush" div="text">
            <li class="list-group-item"><?= $student["rombel"] ?></li>
            <li class="list-group-item"><?= $student["rayon"] ?></li>
            <li class="list-group-item"><?= $student["status"] ?></li>
            <li class="list-group-item"><?= $student["hobi"] ?></li>
            <li class="list-group-item"><?= $student["alamat"] ?></li>
            <li class="list-group-item"><?= $student["merk_laptop"] ?></li>
            <li class="list-group-item"><?= $student["cita_cita"] ?></li>
         </ul>
        <div class="card-body">
            <a class="btn btn-outline-primary" href="index.php" role="button">Kembali</a>

        </div>
    </div>
    
</body>
</html>