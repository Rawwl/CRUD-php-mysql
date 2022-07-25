<!DOCTYPE html>
<html>
<head>
	<title>LOGIN PPDB SMK Coding 2021/2022</title>
    <style>
        body{
            background: #bfa27e;
	        display: flex;
	        justify-content: center;
	        align-items: center;
            height: 100vh;
	        flex-direction: column;
        }
        
        form {
	    width: 500px;
	    border: 2px solid #ccc;
	    padding: 30px;
	    background: #fff;
	    border-radius: 15px;
        }

        input {
	display: block;
	border: 2px solid #ccc;
	width: 95%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
}
label {
	color: #888;
	font-size: 18px;
	padding: 10px;
}

button {
	float: right;
	background: #555;
	padding: 10px 15px;
	color: #fff;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
}
a {
	float: right;
	background: #555;
	padding: 10px 15px;
	color: #fff;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
	text-decoration: none;
}
a:hover{
	opacity: .7;
}
    </style>
</head>
<body>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
		<br>
		<br>
		<br>
		<hr>
		 <p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
     </form>
</body>
</html>