<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Literatura</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <header class="headhome">
        <img class="logo" src="logo.png" alt="">
        <ul>
            <li><a href="user-map.php">ŽEMĖLAPIS</a></li>
            <li><a href="forum.php">FORUMAS</a></li>
            <li><a href="literature.php" class="lit">LITERATŪRA</a></li>
            <li><a href="account.php">MANO PASKYRA</a></li>
        </ul>
    </header>

    <section class="row">
        
        <div class="column">
            <img src="ufo1.jpg" alt="">
            <p>
                There have been a number of reports of unauthorized and/or unidentified aircraft entering various military-controlled ranges and designated air space in recent years,” the Navy said in a statement to POLITICO, the first outlet to report the news. “[T]he Navy is updating and formalizing the process by which reports of any such suspected incursions can be made to the cognizant authorities.
            </p>
        </div>

        <div class="column">
            <img src="ufo2.jpg" alt="">
            <p>
                According to the cultural historian Stuart Walton, “Belief in UFOs is definitely in a state of decline, along with much else that could be classed as paranormal. Part of the reason is that the technology for providing documentary evidence of such matters is now widely available to everybody with a smartphone, and such purported evidence as there is on YouTube looks extremely threadbare.
            </p>
        </div>

        <div class="column">
            <img src="ufo3.jpg" alt="">
            <p>
                Indeed, indisputable evidence of intelligent life coming to Earth could be the greatest news of all time. Yet, after thousands of anecdotal, photo, and video reports have accrued over decades, what are we to conclude? With the greatest balance of scepticism and “wanting to believe”, all that can confidently be asserted is that some objects, appearing in the sky on film or video, seem unidentifiable.
            </p>
        </div>

        <div class="column">
            <img src="ufo4.jpg" alt="">
            <p>
                Basically, the Navy wants to create a formal process for pilots and other personnel to report flying objects they can’t explain so that someone can investigate. The Navy seems less concerned that UAPs are a sign of alien life, and more concerned that they’re unauthorized aircrafts from a foreign nation. This is why the U.S. started investigating UFO sightings in the late 1940s, too.
            </p>
        </div>

    </section>

    <footer class="headhome">
        <a href="logout.php" class="signout">ATSIJUNGTI</a>
        <a href="help.php" class="signout">PAGALBA</a>
    </footer>
    
</body>
</html>

<style>
    .lit {
        background-color:  rgb(48,133,135);
        border-radius: 3px;
        color: white;
    }

    .lit:hover {
        transition: none;
        background-color:  rgb(48,133,135);
    }

    .column {
        float: left;
        width: 25%;
        height: 95%;
        display: flex;
        justify-content: center;
        align-items: center;
        vertical-align: top;
        display: inline-block;
        padding: 30px;
    }

    .column img {
        width: 100%;
        border-radius: 15px;
    }

    .row{
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .column p {
        color: gray;
    }

</style>