<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Siswa Baru | SMK Coding</title>

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
        <h2 class="text-center">Formulir Pendaftaran Siswa Baru</h2>
</nav>
<br>
<div class="container">
    <form action="proses-daftar.php" method="POST">

        <div class="form-group">
            <label for="nama">Nama </label>
            <input type="text" name="nama" class="form-control"  placeholder="Nama lengkap" />
       </div>
       <div class="form-group">
            <label for="alamat">Alamat </label>
            <input type="text" name="alamat" class="form-control"  placeholder="Alamat"></textarea>
       </div>
       <div class="form-group">
            <label for="jeniskelamin">Jenis Kelamin </label><br>
            <label><input type="radio" name="jeniskelamin" 
            value="laki-laki">Laki-laki</label>
            <label><input type="radio" name="jeniskelamin" 
            value="perempuan">Perempuan</label><br>
       </div>
       <div class="form-group">
                <label>Agama</label>
                <select class="form-control" name="agama">
                        <option>pilih</option>
                        <option value="islam">Islam</option>
                        <option value="kristen">Katolik</option>
                        <option value="kristen">Protestan</option>
                        <option value="hindu">Hindu</option>
                        <option value="budha">Budha</option>
                        <option value="konghucu">Konghucu</option>
                    </select>
            </div>
       <div class="form-group">
            <label for="sekolahasal">Sekolah Asal </label>
            <input type="text" name="sekolahasal" class="form-control" placeholder="Nama sekolah" />
       </div>
<br>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>
        
    </form>

</body>
</html>