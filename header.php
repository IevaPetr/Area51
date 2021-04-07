<!DOCTYPE html>
<html>
<head>
    <title>Žemėlapis</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<!-- ZEMELAPIO PUSLAPIO HEADERIS -->

<body>
<header>
    <img class="logo" src="logo.png" alt="">
    <ul>
        <li><a href="user-map.php" class="zemelapis">ŽEMĖLAPIS</a></li>
        <li><a href="forum.php">FORUMAS</a></li>
        <li><a href="literature.php">LITERATŪRA</a></li>
        <li><a href="account.php">MANO PASKYRA</a></li>
    </ul>
</header>
</body>
<style>

    html, body {
        height: 100%;
        margin-left:0;
        padding: 0;
    }
 
    #map {
        height: 86vh;
    }

    .zemelapis {
          background-color:  rgb(48,133,135);
          border-radius: 3px;
          color: white;
     }

    .zemelapis:hover {
        transition: none;
        background-color:  rgb(48,133,135);
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

