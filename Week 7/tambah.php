<?php
require 'functions.php';

if (isset($_POST["submit"])){
    if(tambah($_POST) > 0){
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'toko.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('data gagal ditambahkan!');
                document.location.href = 'toko.php';
            </script>
        ";
    }
    
}


?>

<!DOCTYPE html>
<head>
    <title>Tambah Data Toko Baju</title>
</head>
<body>
    <h1>Tambah Data Baju</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama Baju :</label><br>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="ukuran">Ukuran Baju :</label><br>
                <input type="text" name="ukuran" id="ukuran" required>
            </li>
            <li>
                <label for="harga">Harga  :</label><br>
                <input type="text" name="harga" id="harga" required>
            </li>
            <li>
                <label for="gambar">Gambar  :</label><br>
                <input type="text" name="gambar" id="gambar" required><br><br>
            </li>
            <li>
                <input type="submit" name="submit" id="submit"><br><br>
                <a href="toko.php">Kembali ke halaman sebelumnya</a>
            </li>
        </ul>
    </form>
</body>
</html>