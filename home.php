<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Pagrindinis</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<!-- ALIEN HEAD GIF -->

<body>

     <header class="headhome">
          <p>Labas, <?php echo $_SESSION['name']; ?>!</p>
    </header>

    <section class="color">
          <img src="background.png" alt="" class="alien">
    </section>

    <footer class="headhome">
          <a href="user-map.php" class="svetaine">TĘSTI Į SVETAINĘ</a>
    </footer>

</body>
</html>

<?php 
     }else{
          header("Location: index.php");
          exit();
     }
?>

<style>
     .headhome {
          background-color: white;
          background-image: none;
          color:  rgb(48,133,135);
     }

     .headhome p {
          margin-top: 20px;
          font-size: 35px;
     }

</style>