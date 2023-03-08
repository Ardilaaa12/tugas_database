<?php
    $connect = mysqli_connect("localhost", "root", "", "db_study");

    function query( $query ){
        global $connect;
        $result = mysqli_query($connect, $query);
        $wadah = [];
        while ($baju = mysqli_fetch_assoc($result) ) {
            $wadah[] = $baju;
        }
        return $wadah;
    }

    function tambah( $data ){
        global $connect;
        $nama= htmlspecialchars($data["nama"]);
        $nis = htmlspecialchars($data["nis"]);
        $rombel = htmlspecialchars($data["rombel"]);
        $rayon = htmlspecialchars($data["rayon"]);
        $status = htmlspecialchars($data["status"]);
        $hobi = htmlspecialchars($data["hobi"]);
        $alamat = htmlspecialchars($data["alamat"]);
        $laptop = htmlspecialchars($data["laptop"]);
        $cita = htmlspecialchars($data["cita"]);
        $gambar = htmlspecialchars($data["gambar"]);

        $query = "INSERT INTO students
                     VALUES 
                ('', '$nama', '$nis', '$rombel', '$rayon', '$status', '$hobi', '$alamat', '$laptop', '$cita', '$gambar')";

        mysqli_query($connect, $query);

        // yang dimasukan akan di kembalikan nilai 1 atau -1 untuk menghasilkan pesan
        return  mysqli_affected_rows($connect);
    }

    function hapus( $id ){
        global $connect;
        mysqli_query($connect, "DELETE FROM students WHERE id = $id");

        return mysqli_affected_rows($connect);
    }

    function ubah($data){
        global $connect;
        $id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);
        $nis = htmlspecialchars($data["nis"]);
        $rombel = htmlspecialchars($data["rombel"]);
        $rayon = htmlspecialchars($data["rayon"]);
        $status = htmlspecialchars($data["status"]);
        $hobi = htmlspecialchars($data["hobi"]);
        $alamat = htmlspecialchars($data["alamat"]);
        $laptop = htmlspecialchars($data["laptop"]);
        $cita = htmlspecialchars($data["cita"]);
        $gambar = htmlspecialchars($data["gambar"]);

        $query = "UPDATE students SET
        nama = '$nama',
        nis = '$nis',
        rombel = '$rombel',
        rayon = '$rayon',
        status = '$status',
        hobi = '$hobi',
        alamat = '$alamat',
        merk_laptop = '$laptop',
        cita_cita = '$cita',
        gambar = '$gambar'
        WHERE id = $id
        ";
        mysqli_query($connect, $query);

        return mysqli_affected_rows($connect);
    }

?>