<!DOCTYPE html>
<html>
<head>
	<title>Registracija</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="register">
     <form action="signup-check.php" method="post">
     	<h2>Registracija</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Vardas</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Vardas"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Vardas"><br>
          <?php }?>

          <label>Pavarde</label>
          <?php if (isset($_GET['surname'])) { ?>
               <input type="text" 
                      name="surname" 
                      placeholder="Pavardė"
                      value="<?php echo $_GET['surname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="surname" 
                      placeholder="Pavardė"><br>
          <?php }?>

          <label>Elektroninis paštas</label>
          <?php if (isset($_GET['email'])) { ?>
               <input type="text" 
                      name="email" 
                      placeholder="El. paštas"
                      value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="email" 
                      placeholder="El. paštas"><br>
          <?php }?>

          <label>Vartotojo vardas</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Vartotojo vardas"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Vartotojo vardas"><br>
          <?php }?>


     	<label>Slaptažodis</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Slaptažodis"><br>

          <label>Pakartokite slaptažodį</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Pakartokite slaptažodį"><br>

     	<button type="submit">Registruotis</button>
          <a href="index.php" class="ca">Jau esate prisiregistravęs?</a>
     </form>
</body>
</html>