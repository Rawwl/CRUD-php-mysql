<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style>
.btn-1{
    background-color: rgba(45, 189, 255, 0.915);
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
	float: left;
	padding: 10px 20px;
	color: #fff;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
}
button:hover{
	opacity: .7;
}
p{
    display: flex;
	justify-content: center;
	align-items: center;
    height: 10vh;
}
nav{
    width: 100%;
    height: 170px;
    background-color:rgba(144, 220, 255, 0.915);
    color:white;
    line-height: 50px;
}
    </style>
    
</head>
<body>
<nav>
    <br>
<h1 class="text-center">SMK Coding</h1>
<h4 class="text-center">Pendaftaran Siswa Baru</h4>
</nav>

<br>
<br>

<p>
<a href="list-siswa.php"><button class="btn-1">Pendaftar</button></a>
<a href="form-daftar.php"><button class="btn-1">Daftar Baru</button></a>
</p>

    <?php if(isset($_GET['status'])) {
        if(($_GET['status'] == 'sukses')){
            echo "Pendaftaran siswa baru berhasil....!";
        } else {
            echo "Pendaftaran gagal!";
        }
    }
        ?>

</body>
</html>
     