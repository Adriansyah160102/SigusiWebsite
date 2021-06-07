<script type="text/javascript">
    function cekvalidasi(text){
        if(text=='cek')
            { alert('Silahkan periksa USERNAME dan PASSWORD anda...!!!'); }
        else{}
    }
</script>

<?php
    session_start();
    if(!empty($_SESSION['id']) and !empty($_SESSION['nama']) and !empty($_SESSION['level']))
        { header('location:../administrator/home.php'); }
    if (!empty($_GET['user'])){ $user=$_GET['user']; }else{ $user=''; }
    if (! empty($_GET['pass'])) { $text=$_GET['pass']; } else { $text=''; }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="../style_login.css">

	<title>Sigusi - Login Guru</title>
</head>
<body>
	<div class="container">
		<form action="cek_login.php" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login Guru</p>
			<div class="input-group">
				<input type="text" placeholder="username" name="username" value="" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
		</form>
	</div>
</body>
</html>