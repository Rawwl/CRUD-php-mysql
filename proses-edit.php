<?php 

include("config.php");

if(isset ($_POST['simpan'])) {
    
    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $agama = $_POST['agama'];
    $sekolahasal = $_POST['sekolahasal'];

    //buat query
    $sql = "UPDATE calonsiswa SET nama = '$nama', alamat = '$alamat', jeniskelamin = '$jeniskelamin', agama = '$agama' sekolahasal = '$sekolahasal' 
    WHERE id='$id'";
    $query = mysqli_query($db, $sql);

    //apakah query simpan berhasil?
    if($query) {
        //kalau berhasil alihkan ke halaman list.php dengan status=sukses
        header('Location: list-siswa.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman list.php dengan status=gagal
        header('Location: list-siswa.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
?>