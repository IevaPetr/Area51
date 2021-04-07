<!DOCTYPE html>
<html>
<head>
	<title>Naujas įvykis</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="event-check.php" method="post">
     	<h2>Užfiksuokite naują įvykį</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Įveskite datą ir laiką kada užfiksavote įvykį</label>
          <?php if (isset($_GET['date'])) { ?>
               <input type="text" 
                      name="date" 
                      placeholder="YY-MM-DD 00:00"
                      value="<?php echo $_GET['date']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="date" 
                      placeholder="YY-MM-DD 00:00"><br>
          <?php }?>

          <label>Aprašykite įvykį</label>
          <?php if (isset($_GET['aboout'])) { ?>
               <input type="message" 
                      name="about" 
                      placeholder="Aprašykite įvykį"
                      value="<?php echo $_GET['about']; ?>"><br>
          <?php }else{ ?>
               <input type="message" 
                      name="about" 
                      placeholder="Aprašykite įvykį"><br>
          <?php }?>

       
     	<button type="submit">Pateikti įvykį</button>
     </form>
</body>
</html>