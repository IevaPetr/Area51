<!DOCTYPE html>
<html>
<head>
	<title>Prisijungimas</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="register">
     <form action="login.php" method="post">
     	<h2>Prisijungimas</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Vartotojo vardas</label>
     	<input type="text" name="uname" placeholder="Vartotojo vardas"><br>

     	<label>Slaptažodis</label>
     	<input type="password" name="password" placeholder="Slaptažodis"><br>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Sukurti paskyrą</a>
     </form>
</body>
</html>