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
</style>
</head>

<body>
    <nav>
        <h3 align="center">Daftar Calon Siswa</h3>
</nav>

    <br>

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

<p>Total: <?php echo mysqli_num_rows($query) ?></p>

<p align="right"> Panitia Pendaftaran
    <br><br>TTD<br><br>
    <b>Refal Hady</b>
</p>
 
	<script>
		window.print();
	</script>
 
</body>
</html>
