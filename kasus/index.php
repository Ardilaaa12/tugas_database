<?php
    require 'controller.php';
    $students = query ("SELECT * FROM students");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <style>
        h1{
            text-align: center;
            color: #2C3333;
            background-color:  #93BFCF;
            border-radius: 5px; 
            padding: 25px;
            
        }
        body{
            padding: 60px;
            background-color: #EEE9DA;
        }
        table{
            background-color: #93BFCF;
            text-align: center;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1> DATA SISWA</h1>
    <br>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama</th>
      <th scope="col">Nis</th>
      <th scope="col">Rombel</th>
      <th scope="col">Rayon</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php foreach ($students as $siswa) {?>
    <tr>
      <td scope="row"><?= $i ?></td>
      <td><?= $siswa["nama"] ?></td>
      <td><?= $siswa["nis"] ?></td>
      <td><?= $siswa["rombel"] ?></td>
      <td><?= $siswa["rayon"]  ?></td>
      <td>
        <a class="btn btn-outline-primary" href="hapus.php?id=<?= $siswa["id"] ?>" onclick="return confirm('Yakin data mau di hapus?')" >Hapus</a>
        <a class="btn btn-outline-primary" href="ubah.php?id=<?= $siswa["id"]?>">Ubah</a>
        <a class="btn btn-outline-primary" href="lihat.php?id=<?= $siswa["id"]?>"> Lihat</a>
      </td>
    </tr>
    <?php $i++ ?>
    <?php } ?>
  </tbody>
</table>
<a class="btn btn-outline-primary" href="tambah.php" role="button">Tambah Data</a>
    
</body>
</html>