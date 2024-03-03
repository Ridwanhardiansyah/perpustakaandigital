<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body{
  background-image: url("https://i.pinimg.com/736x/17/88/03/17880370e19c79ba062396f68afd887c.jpg"); /* The image used */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
}
	</style>
</head>
<body>
	
</body>
</html>
<center">
<div class="card mt-5">
<div class="card-body register-card-body">
<img src="layout/logo.png" width="350px" height="300px" alt="logo">
<div class="text-center">
<font color="black">
	<b>REGISTRASI</b>
	</font>
</div>
<hr>
<form action="index.php?page=postregister" method="post">
	<div class="input-group mb-3">
<input type="text" class="form-control" placeholder="UserId" name="userid" hidden>

</div>
<div class="input-group mb-3">
<input type="text" class="form-control" placeholder="Username" name="Username" required>
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-user"></span>
</div>
</div>
</div>
<div class="input-group mb-3">
<input type="password" class="form-control" placeholder="Password" name="Password" required>
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-lock"></span>
</div>
</div>
</div>
<div class="input-group mb-3">
<input type="email" class="form-control" placeholder="Email" name="Email" required>
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-envelope"></span>
</div>
</div>
</div>
<div class="input-group mb-3">
<input type="text" class="form-control" placeholder="NamaLengkap" name="NamaLengkap" required>
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-user"></span>
</div>
</div>
</div>
<div class="input-group mb-3">
<input type="text" class="form-control" placeholder="Alamat" name="Alamat" required>
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-user"></span>
</div>
</div>
</div>

<div class="text-center">
    <button type="submit" name="register_tombol" class="btn btn-primary btn-block">sign in</button>
</div>
<div class="text-center">
<p class="text-center">
<center>
<a href="index.php?page=login">Kembali ke Login</a>
</center>
</p>
</div>


