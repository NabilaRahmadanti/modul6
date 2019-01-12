<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data</title>
    <link rel="stylesheet" href="css/add_data.css">
</head>
<body>
    
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    <table class="form">
        <br><h2>Tambah Data</h2>
    <p>
        <center><input type="text" class="input" name="nis" placeholder="NIS"></center>
        <br>
        <center><input type="text" class="input" name="nama" placeholder="Nama"></center>
        <br>
        <center><input type="text" class="input" name="alamat" placeholder="Alamat"></center>
        <br>
        <center><input type="password" class="input" name="password" placeholder="Password"></center>
        <br>
        <center><button type="submit" class="button" value="simpan" name="btnSimpan">Simpan</button></center>
        <br>
        <center><a href="login.php">LogOut</a></center>
    </p>
    </table>
    </form>
</body>
</html>


<?php
    require_once "./connect.php";

    //jika field nis dan nama diisi lalu disubmit
    if (isset($_POST['nis']) && isset($_POST['nama'])) {
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $password = $_POST['password'];

    $sql = "INSERT INTO tb_siswa VALUES('" .$nis. "', '" .$nama."', '" .$alamat."', '" .$password. "')";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        echo 'Data Berhasil Ditambahkan';
    }
    else {
        echo 'Gagal Menambahkan Data <br/>';
        echo mysqli_error($connect);
    }
    }

    echo '<hr />';
    //memanggil file record.php untuk menampilkan hasil
    require_once "./record.php";
?>