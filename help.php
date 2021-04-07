<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagalba</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <header class="headhome">
        <img class="logo" src="logo.png" alt="">
        <ul>
            <li><a href="user-map.php">ŽEMĖLAPIS</a></li>
            <li><a href="forum.php">FORUMAS</a></li>
            <li><a href="literature.php">LITERATŪRA</a></li>
            <li><a href="account.php">MANO PASKYRA</a></li>
        </ul>
    </header>


    <section class="pagalba">
        <form action="help-check.php" method="post">
            <h2>Pagalba</h2>

            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } ?>

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

            <label>Jūsų žinutė</label>
            <textarea name="content" id="content" placeholder="Jūsų žinutės tekstas"
            class="input-field" cols="60" rows="6"></textarea>

            <button type="submit">Siųsti</button>
        </form>
    </section>
    

    <footer class="headhome">
        <a href="logout.php" class="signout">ATSIJUNGTI</a>
        <a href="help.php" class="signout">PAGALBA</a>
    </footer>
    
</body>
</html>

<style>
    .pagalba {
        background: lightgray ;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    textarea {
        border-radius: 5px;
        width: 95%;
        border: 2px solid #ccc;
        padding: 7px;
        margin: 7px auto;
        margin-left: 10px;
    }
</style>
