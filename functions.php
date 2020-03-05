<?php

$conn = mysqli_connect("localhost", "root", "", "tiketpesawat");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;
    $nama = htmlspecialchars($data["name"]);
    $asal = htmlspecialchars($data["asal"]);
    $tujuan = htmlspecialchars($data["tujuan"]);
    $kelas_penerbangan = htmlspecialchars($data["kelas_penerbangan"]);
    $dewasa = htmlspecialchars($data["dewasa"]);
    $bayi = htmlspecialchars($data["bayi"]);
    $pembayaran = htmlspecialchars($data["pembayaran"]);
    $tgl_berangkat = htmlspecialchars($data["tgl_berangkat"]);
    $tgl_pulang = htmlspecialchars($data["tgl_pulang"]);

    $query  = "INSERT INTO tiket
                VALUES
            ('', '$nama', '$asal', '$tujuan', '$kelas_penerbangan', '$dewasa', '$bayi', '$pembayaran', '$tgl_berangkat', '$tgl_pulang' )

           ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tiket WHERE idTiket = $id");
    return mysqli_affected_rows($conn);
}

function edit($data) {
    global $conn;
    global $hasil;
    global $query;
    $id = $data["id"];
    $nama = htmlspecialchars($data["name"]);
    $asal = htmlspecialchars($data["asal"]);
    $tujuan = htmlspecialchars($data["tujuan"]);
    $kelas_penerbangan = htmlspecialchars($data["kelas_penerbangan"]);
    $dewasa = htmlspecialchars($data["dewasa"]);
    $bayi = htmlspecialchars($data["bayi"]);
    $pembayaran = htmlspecialchars($data["pembayaran"]);
    $tgl_berangkat = htmlspecialchars($data["tgl_berangkat"]);
    $tgl_pulang = htmlspecialchars($data["tgl_pulang"]);

    $query  = "UPDATE tiket SET
                name = '$nama',
                asal = '$asal',
                tujuan = '$tujuan',
                kelas_penerbangan = '$kelas_penerbangan',
                dewasa = '$dewasa',
                bayi = '$bayi',
                pembayaran = '$pembayaran',
                tgl_berangkat = '$tgl_berangkat',
                tgl_pulang = '$tgl_pulang'
                WHERE idTiket = '$id'
            ";
        
         $hasil = mysqli_query($conn, $query);
        

        return mysqli_affected_rows($conn);
}


function cari($keywoard) {
    $query = "SELECT * FROM tiket
        WHERE
        nama LIKE '$keywoard%' OR
        asal LIKE '$keywoard' OR
        tujuan LIKE '$keywoard' OR
        pembayaran LIKE '$keywoard' 
        ";
        return query($query);
}


?>
