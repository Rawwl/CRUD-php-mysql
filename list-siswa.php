<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
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

.btn-1{
    background-color: rgba(103, 206, 254, 0.915);
    padding: 0.7rem 1rem;
    color: #fff;
    border: none;
    border-radius: 10px;
}

.features button{
    padding: 0.7rem 1rem;
    margin-right: 1rem;
    font-size: 1rem;
    opacity: 0.7;
}

*{
	font-family: sans-serif;
	box-sizing: border-box;
}


button {
	float: center;
	padding: 10px 15px;
	color: #fff;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
}
button:hover{
	opacity: .7;
}
</style>

</head>
<body>
<nav>
<h1 class="text-center">DATA MAHASISWA</h1>
</nav>
<br>
<p>
<a href="form-daftar.php" ><button type="button" class="btn btn-primary">Tambah Data</button></a>
<a href="cetak.php" ><button type="button" class="btn btn-primary">Cetak Data</button></a>
<br>
</p>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Tindakan</th>
        </tr>
    </thead>
<tbody>

<?php
$sql = "SELECT * FROM calonsiswa";
$query = mysqli_query($db, $sql);

while($siswa = mysqli_fetch_array($query)) {
    echo "<tr>";

    echo "<td>".$siswa['id']."</td>";
    echo "<td>".$siswa['nama']."</td>";
    echo "<td>".$siswa['alamat']."</td>";
    echo "<td>".$siswa['jeniskelamin']."</td>";
    echo "<td>".$siswa['agama']."</td>";
    echo "<td>".$siswa['sekolahasal']."</td>";

    echo "<td>";
    echo "<a href='form-edit.php?id=".
    $siswa['id']."'>Edit</a> | ";
    echo "<a href='hapus.php?id=".
    $siswa['id']."'>Hapus</a>";
    echo "</td>";

    echo "</tr>";

}
?>

</tbody>
</table>
<button name="" class="btn-1">Total : <?php echo mysqli_num_rows($query) ?></button>
</body>
</html>
