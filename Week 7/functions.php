<?php 

$conn = mysqli_connect('localhost', 'root', '', 'tokobaju'); 

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $ukuran = htmlspecialchars($data["ukuran"]);
    $harga = htmlspecialchars($data["harga"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO toko
        VALUES
        ('','$nama', '$ukuran', '$harga','$gambar')
        ";
    mysqli_query($conn, $query); 

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM toko WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $ukuran = htmlspecialchars($data["ukuran"]);
    $harga = htmlspecialchars($data["harga"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "UPDATE toko SET
            nama = '$nama',
            ukuran = '$ukuran',
            harga = '$harga',
            gambar = '$gambar'
            WHERE id = $id
            ";
    mysqli_query($conn, $query); 

    return mysqli_affected_rows($conn);   
}
?>