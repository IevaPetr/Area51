<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mano paskyra</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <header class="headhome">
        <img class="logo" src="logo.png" alt="">
        <ul>
            <li><a href="user-map.php">ŽEMĖLAPIS</a></li>
            <li><a href="forum.php">FORUMAS</a></li>
            <li><a href="literature.php" class="lit">LITERATŪRA</a></li>
            <li><a href="account.php" class="acc">MANO PASKYRA</a></li>
        </ul>
    </header>

    <section class="keisti">
         <?php
            error_reporting(0);
            session_start();

            if (isset($_SESSION['id']) && isset($_SESSION['user_name'])){
            $user=$_SESSION['user_name'];
            
            if($user){
                if($_POST['submit']){
                    $oldpass = md5($_POST['oldpass']);
                    $newpass = md5($_POST['newpass']);
                    $repeatnewpass = md5($_POST['repeatnewpass']);
                    $sname= "localhost";
                    $unmae= "root";
                    $password = "";
                    $db_name = "register";

                    $conn = mysqli_connect($sname, $unmae, $password, $db_name);

                    if (!$conn){
	                echo "Connection failed!";
                    }

                    $queryget = mysqli_query($conn, "SELECT password FROM users WHERE user_name='$user'") or die("Kažas atsitiko");
                    $row = mysqli_fetch_assoc($queryget);

                    $oldpassdb = $row['password'];

                    if($oldpass == $oldpassdb){
                        if($newpass == $repeatnewpass){
                            $querychange = mysqli_query($conn, "UPDATE users SET password='$newpass' WHERE user_name='$user'");
                            session_destroy();
                            die("Jūsų slaptažodis sėkmingai pakeistas. <a href='login.php'>Prisijunkite iš naujo</>");
                        }
                        else die("Nauji slaptažodžiai nesutampa");
                    }
                    else die("Esamas slaptažodis yra neteisingas");
                    }

                    else if($_POST['submit1']){
                    $oldemail = $_POST['oldemail'];
                    $newemail = $_POST['newemail'];
                    $sname= "localhost";
                    $unmae= "root";
                    $password = "";
                    $db_name = "register";

                    $conn = mysqli_connect($sname, $unmae, $password, $db_name);

                    if (!$conn) {
	                echo "Connection failed!";
                    }

                    $queryget = mysqli_query($conn, "SELECT email FROM users WHERE user_name='$user'") or die("Kažas atsitiko");
                    $row = mysqli_fetch_assoc($queryget);

                    $oldemaildb = $row['email'];

                    if($oldemail == $oldemaildb){
                        $querychange = mysqli_query($conn, "UPDATE users SET email='$newemail' WHERE user_name='$user'");
                        session_destroy();
                        die("Jūsų el. paštas sėkmingai pakeistas. <a href='login.php'>Prisijunkite iš naujo</>");
                    }
                    else die("Esamas el. paštas yra neteisingas");
                }

                else{
                echo
                "
                <form  action='account.php' method='POST'>
                    <h2>Paskyros duomenų keitimas</h2>
                    <label>Esamas slaptažodis: </label> 
                    <input type='text' name='oldpass'>
                    <label>Naujas slaptažodis:</label>
                    <input type='password' name='newpass'><br>
                    <label>Pakartokite naują slaptažodį:</label>
                    <input type='password' name='repeatnewpass'>
                    <input type='submit' name='submit' value='Pakeisti slaptažodį'> <br><br>
                    <label>Esamas el. paštas:</label>
                    <input type='text' name='oldemail'>
                    <label>Naujas el. paštas:</label>
                    <input type='password' name='newemail'><br>
                    <input type='submit' name='submit1' value='Pakeisti el. paštą'>
                </form>
                ";
                }
               
            }
            else
            die("Turite būti prisiregistravęs");
         }
         else echo "Kažkas nutiko";
        ?>
    </section>

    <footer class="headhome">
        <a href="logout.php" class="signout">ATSIJUNGTI</a>
        <a href="help.php" class="signout">PAGALBA</a>
    </footer>
    
</body>
</html>

<style>
    .acc {
        background-color:  rgb(48,133,135);
        border-radius: 3px;
        color: white;
    }

    .acc:hover {
        transition: none;
        background-color:  rgb(48,133,135);
    }

    .keisti {
        background: lightgray ;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    input[type='submit'] {
        float: right;
        background:rgb(48,133,135);
        padding: 10px 15px;
        color: #fff;
        border-radius: 5px;
        margin-right: 10px;
        border: none;
        width: 160px;
    }
</style>
