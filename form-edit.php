<?php

include("config.php");

// kalau tidak ada di id query string
if ( !isset($_GET['id']) ) {
    header('Location: list-siswa.php');
}

//ambil id dari query string 
$id = $_GET['id'];

//buat query untuk ambil data dari database
$sql = "SELECT * FROM calonsiswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

//jika data yang di edit tidak ditemukan
if(mysqli_num_rows($query) < 1 ) {
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru | SMK Coding</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

<style>
    nav{
    width: 100%;
    height: 50px;
    background-color:rgba(144, 220, 255, 0.915);
    color:white;
    line-height: 50px;
}
input {
	display: block;
	border: 2px solid rgb(46, 206, 255);
    background: rgb(46, 206, 255);
    color: white;
	width: 95%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
}

</style>
</head>

<body>
    <nav>
        <h2 class="text-center">Form Edit</h2>
</nav>
    <form action="proses-edit.php" method="POST">
    <div class="container">
        <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
        </div>

        <div class="form-group">
            <label for="nama">Nama: </label>
            <input type="text" name="nama" class="form-control" placeholder="Nama lengkap" value="<?php echo $siswa['nama'] ?>" />
        </div>
        <div class="form-group">
            <label for="alamat">Alamat: </label>
            <input type="text" name="alamat" class="form-control" placeholder="Alamat" value <?php echo $siswa['alamat'] ?>/>
        </div>

        <div class="form-group">
        <label for="jeniskelamin">Jenis Kelamin: </label><br>
        <?php $jk = $siswa['jeniskelamin']; ?>
            <label><input type="radio" name="jeniskelamin" value="laki-laki" <?php echo ($jk == 'laki-laki')? "checked": "" ?>>Laki-laki</label>
            <label><input type="radio" name="jeniskelamin" value="perempuan" <?php echo ($jk == 'perempuan')? "checked": "" ?>>Perempuan</label>
        </div>

        <div class="form-group">
            <label for="agama">Agama: </label>
            <input type="text" name="agama" class="form-control" placeholder="Agama" value="<?php echo $siswa['agama'] ?>" />
        </div>

        <div class="form-group">
            <label for="sekolahasal">Sekolah Asal: </label>
            <input type="text" name="sekolahasal" class="form-control" placeholder="Nama sekolah" value="<?php echo $siswa['sekolahasal'] ?>" />
       </div>

       <br>
        <p>
            <input type="submit" value="Simpan" name="simpan" >
        </p>
        
    </form>
       
</body>
</html>