<?php
/*CREATE TABLE skincare (
    no int PRIMARY KEY AUTO_INCREMENT,
    kodebarang varchar(10),
    namabarang varchar(50),
    gambar varchar(50),
    hargajual int,
    stokbarang int
);*/

$conn = mysqli_connect("localhost:3306","root","","tugaswad");

function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows [] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    $kodebarang = $data['kodebarang'];
    $namabarang = $data['namabarang'];
    $gambar = $data['gambarbarang'];
    $hargajual = $data['hargajual'];
    $stokbarang = $data['stokbarang'];

    $query = "INSERT INTO skincare
        VALUES
        ('','$kodebarang','$namabarang','$gambar','$hargajual','$stokbarang')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function hapus($no){
    global $conn;
    mysqli_query($conn, "DELETE FROM skincare WHERE no = $no");
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    $no = $data["no"];
    $kodebarang = $data['kodebarang'];
    $namabarang = $data['namabarang'];
    $gambar = $data['gambarbarang'];
    $hargajual = $data['hargajual'];
    $stokbarang = $data['stokbarang'];

    $query = "UPDATE skincare SET
        kodebarang = '$kodebarang',
        namabarang = '$namabarang',
        gambar = '$gambar',
        hargajual = '$hargajual',
        stokbarang = '$stokbarang'
        WHERE no = $no
    ";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
?>