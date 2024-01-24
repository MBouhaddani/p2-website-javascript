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


    <?php include 'menu.php'; ?>


    <main>
        <section id="portfolio">
            <h2>Portfolio</h2>
            <div class="project">
                <h3>Project ouderavond</h3>
                <p></p>

                De website
                De website bestaat uit minimaal 8 pagina's, waarvan ieder van het koppel eenzelfde aantal pagina's heeft
                gemaakt (dus in ieder geval minimaal 4 per persoon).
                De website bevat in elk geval een home- pagina, een pagina over de beide studenten, een pagina over BSA,
                een pagina over het examenplan. De overige pagina's zijn naar eigen idee verder in te vullen.
                De website bevat een menu waarin in elk geval ook een submenu zit.
                De website maakt gebruik van de juiste HTML elementen, het div element wordt alleen gebruikt waar het
                niet anders kan.
                Elke webpagina heeft precies één keer de elementen DOCTYPE, html, head en body.
                De website is opgebouwd met UITSLUITEND HTML en CSS. Elke vorm van scripten is NIET toegestaan.
                De opmaak van de website zit UITSLUITEND in een CSS bestand. Er wordt geen gebruik gemaakt van
                style-element noch van het style-attribuut.
                Elke student neemt op minimaal één van de eigen pagina's een foto of afbeelding op.
                Elke student neemt op minimaal één van de eigen pagina's een video op.
                Elke student neemt op minimaal één van de eigen pagina's een formulier op, waarin minimaal 6
                verschillende soorten input velden wordt gebruikt.
                Elke student neemt op minimaal één van de eigen pagina's een tabel op, waarin minimaal 4 kolommen en
                5 rijen zitten en waarin ROWSPAN of COLSPAN wordt gebruikt.

                Op de website zijn de volgende onderwerpen terug te vinden:

                Home pagina
                Canvas met uitleg over cursussen (en daarbinnen leerdoelen en planning); uitleg over kalender; de
                inbox; de canvas app; en de canvas-app voor ouders.
                EduArte met uitleg over het rooster; (examen)cijfers; aanwezigheid; de app voor EduArte.
                De opleidingswijzer met uitleg over de opbouw van de opleiding; de BPV periodes; keuzedelen @@@@
                De locatiegids met uitleg over de locatiezaken; de geboden faciliteiten
                De begeleiding door het begeleidingsteam (trainingen; maatschappelijk werk; schoolfonds; aangepaste
                examinering aanvraag) en door de SLB'er
                De software die gebruikt wordt met uitleg over de software die gratis ter beschikking wordt gesteld
                Het examenplan met uitleg over welke examens je moet afleggen en waar je aan moet voldoen om jouw
                diploma te krijgen
                De weken waarin de ouderspreekavonden plaats zullen vinden
                Het bindend studie advies
                Achtergrond-informatie over de studenten met de informatie zoals die is afgesproken in de
                project-uren (interview vragen)
                </p>
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
            document.getElementById("display-area").innerHTML = "<img src='./fotos/fotoselim.jpg' alt='foto selim' width='147' height='196'>";
        }

        function showContact() {
            document.getElementById("display-area").innerHTML = "<p>Contact Informatie: 9022471@student.tcrmbo.nl</p>";
        }

        function showExperience() {
            document.getElementById("display-area").innerHTML = "<h3>Werkevaring</h3><p>Scooter Bezorger </p>";
        }

        function showEducation() {
            document.getElementById("display-area").innerHTML = "<h3>Educatie</h3><p>Mbo 4, Opleiding Software developer op Techniek College Rotterdam </p>";
        }

        function showSkills() {
            document.getElementById("display-area").innerHTML = "<h3>progameer vaardigheden</h3><p>HTML, CSS, JAVASCRIPT EN PHP</p>";
        }

        function showHobbies() {
            document.getElementById("display-area").innerHTML = "<h3>Hobbies</h3><p> voetbal</p>";
        }
    </script>
    <?php include 'footer.php'; ?>
</body>

</html>