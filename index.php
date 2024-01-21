<!DOCTYPE html>
<link rel="stylesheet" href="styles.css">
<title>Home Page</title>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
        /* CSS for the popup */
        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            border: 1px solid black;
            z-index: 9999;
        }
    </style>
<body>
    <header>
        <h1>Welkom</h1>
    </header>

    <?php include 'menu.php';?>

    <main>
        <p>
            Techniek College Rotterdam is een samenwerkingsschool opgericht door Albeda en Zadkine in 2016.
            De school biedt toonaangevend en innovatief technisch onderwijs in de regio Rotterdam-Rijnmond.
            Het onderwijs is afgestemd op de vraag vanuit het bedrijfsleven en de snelle ontwikkelingen op de arbeidsmarkt,
            in samenwerking met honderden bedrijven in de regio.
        </p>

        <p>
            De missie van de school is om beginnend beroepsbeoefenaars en vakmensen op te leiden tot goed geschoolde mensen met goede technische competenties,
            ruime sociale vaardigheden en het vermogen om multidisciplinair te werken.
            De school is toegankelijk voor iedereen en streeft ernaar om elke student het beste uit zichzelf te laten halen.
        </p>

        <p>
            Het directieteam bestaat uit Algemeen directeur Marc Meijer, Adjunct-directeur Onderwijs en Kwaliteit Janine Slootmaekers,
            en Adjunct-directeur Bedrijfsvoering Said el Ouazizi.
        </p>

        <p>
            Bij Techniek College Rotterdam hebben studenten inspraak in schoolzaken via de Centrale studentenraad.
            Deze raad vertegenwoordigt alle studenten en gaat in gesprek met de directie over zaken zoals het verbeteren van lessen en locaties.
        </p>

        <div style="text-align: center;">
            <img src="./fotos/fotoschool.jpg" alt="foto van school" style="width: 80%; max-width: 500px;">
        </div>

    <?php include 'footer.php';?>


    <script>
        // JavaScript for the popup
        window.addEventListener('DOMContentLoaded', () => {
            const popup = document.createElement('div');
            popup.className = 'popup';
            popup.innerHTML = `
                <h2>Donate to Play</h2>
                <p>Support ons door het doneren</p>
                <button onclick="closePopup()">sluit</button>
            `;
            document.body.appendChild(popup);
        });

        function closePopup() {
            const popup = document.querySelector('.popup');
            popup.remove();
        }
    </script>   

</body>

</html>