<!DOCTYPE html>
<link rel="stylesheet" href="styles.css">
<title>portofolio</title>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>


    <header>
        <h1>Portfolio</h1>
    </header>


    <?php include 'menu.php';?>


    <main>
        <section id="portfolio">
            <h2>Portfolio</h2>
            <div class="project">
                <h3>Project 1</h3>
                <p>Description of Project 1</p>
            </div>
        </section>
    </main>

    <div id="display-area"></div>

    <button onclick="showPhoto()">Foto</button>
    <button onclick="showContact()">Contact</button>
    <button onclick="showExperience()">Ervaring</button>
    <button onclick="showEducation()">Opleiding</button>
    <button onclick="showSkills()">Programmeer vaardigheden</button>
    <button onclick="showHobbies()">Hobby's</button>



    <script>
        function showPhoto() {
            document.getElementById("display-area").innerHTML = "<img src='./fotos/fotomo.jpg' alt='Mijn foto'>";
        }

        function showContact() {
            document.getElementById("display-area").innerHTML = "<p>Contact Informatie: moelb100@gmail.com</p>";
        }

        function showExperience() {
            document.getElementById("display-area").innerHTML = "<h3>Werkevaring</h3><p>Als vakkenvuller bij dirk voor 1,5 jaar en momenteel New York Pizza Scooterkoerier</p>";
        }

        function showEducation() {
            document.getElementById("display-area").innerHTML = "<h3>Educatie</h3><p>Mbo 4, Opleiding Software developer op Techniek College Rotterdam </p>";
        }

        function showSkills() {
            document.getElementById("display-area").innerHTML = "<h3>progameer vaardigheden</h3><p>HTML, CSS, JAVASCRIPT EN PHP</p>";
        }

        function showHobbies() {
            document.getElementById("display-area").innerHTML = "<h3>Hobbies</h3><p>Gamen, Voetbal en Kickboksen</p>";
        }
    </script>
    <?php include 'footer.php';?>
    </body>

    </html>
