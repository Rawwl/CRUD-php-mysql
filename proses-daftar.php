<?php 

include("config.php");

//cek apakah tombol daftar sudah diklik atau belum?
if(isset ($_POST['daftar'])) {
    
    // ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $agama = $_POST['agama'];
    $sekolahasal = $_POST['sekolahasal'];

    //buat query
    $sql = "INSERT INTO calonsiswa (nama, alamat, 
    jeniskelamin, agama, sekolahasal) VALUE ('$nama', 
    '$alamat', '$jeniskelamin', '$agama', '$sekolahasal')";
    $query = mysqli_query($db, $sql);
    //apakah query simpan berhasil?
    if($query) {
        //kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: home.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman index.php dengan status=gagal
        header('Location: home.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
?>