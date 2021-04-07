<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forumas</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <header class="headhome">
      <img class="logo" src="logo.png" alt="">
      <ul>
          <li><a href="user-map.php">ŽEMĖLAPIS</a></li>
          <li><a href="forum.php" class="forumas">FORUMAS</a></li>
          <li><a href="literature.php">LITERATŪRA</a></li>
          <li><a href="account.php">MANO PASKYRA</a></li>
      </ul>
  </header>

    <?php 
      session_start();
      if(isset($_SESSION['name']))
      {
      include "db_conn.php"; 
      
      $sql="SELECT * FROM `chat`";

      $query = mysqli_query($conn,$sql);
    ?>

    <section>
      <div class="container">
        <div class="display-chat">
        
          <?php
            if(mysqli_num_rows($query)>0)
            {
            while($row= mysqli_fetch_assoc($query))	
            {
          ?>

          <div class="message">
            <p>
              <span><?php echo $row['name']; ?> :</span>
              <?php echo $row['message']; ?>
            </p>
          </div>

          <?php
              }
            }
            else
            {
          ?>

          <div class="message">
            <p>
              Ankstesnis pokalbis negalimas.
            </p>
          </div>

          <?php
            } 
          ?>
          
        </div>
      </div>
    </section>


    <form class="form-horizontal" method="post" action="sendMessage.php">
      <div class="form-group">      
        <textarea name="msg" class="form-control" placeholder="Jūsų žinutės tekstas"></textarea>
        <button type="submit" class="btn btn-primary">Siųsti</button>
      </div>
    </form>


    <footer class="headhome">
        <a href="logout.php" class="signout">ATSIJUNGTI</a>
        <a href="help.php" class="signout">PAGALBA</a>
    </footer>
    
</body>
</html>

<?php
	}
	else
	{
		header('location:forum.php');
	}
?>

<style>
  .forumas {
      background-color:  rgb(48,133,135);
      border-radius: 3px;
      color: white;
  }

  .forumas:hover {
      transition: none;
      background-color:  rgb(48,133,135);
  }

  section {
    background-image: url(logo2.png);
    background-position: center;
    background-repeat: no-repeat;
    background-size: auto 80%;
  }

  form{
    padding: 5px;
    padding-left: 40px;
    padding-right: 40px;
    padding-bottom: 20px;
    height: 9vh;
    position: absolute;
    bottom: 7vh;
    width: 100%;
    border: none;
  }

  textarea {
    width: 85%;
    border-radius: 5px;
    height: 35px;
    border: 2px solid #ccc;
    padding: 7px;
  }

  button {
    width: 12%;
    height: 35px;
  }

  .message {
    background-color: rgb(211,211,211,0.5);
    border-radius: 5px;
    word-wrap: break-word;
    width: 60vw;
    border: solid 1px lightgray;
    margin: 12px;
    margin-left: 20px;
  }

  .message p {
    padding-left: 20px;
    padding-right: 20px;
    word-wrap: break-word;
    color: gray;
  }
</style>
