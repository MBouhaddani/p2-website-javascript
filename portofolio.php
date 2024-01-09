<!DOCTYPE html>
<link rel="stylesheet" href="opmaak.css">
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
            <div class="project">
                <h3>Project 2</h3>
                <p>Description of Project 2</p>
            </div>
        </section>
    </main>

    <div id="display-area"></div>

    <button onclick="showPhoto()">Foto</button>
    <button onclick="showContact()">Contact</button>
    <button onclick="showPitch()">Pitch</button>
    <button onclick="showExperience()">Ervaring</button>
    <button onclick="showEducation()">Opleiding</button>
    <button onclick="showSkills()">Programmeer vaardigheden</button>
    <button onclick="showHobbies()">Hobby's</button>

    <footer>
        <p>Contactinformatie: info@voorbeeld.nl</p>
        <p>© 2023 Website</p>
    </footer>

    <script>
        function showPhoto() {
            document.getElementById("display-area").innerHTML = "<img src='path/to/your/photo.jpg' alt='Your Photo'>";
        }

        function showContact() {
            document.getElementById("display-area").innerHTML = "<p>Contact Information: your-email@example.com</p>";
        }

        function showPitch() {
            document.getElementById("display-area").innerHTML = "<video src='path/to/your/pitch.mp4' controls></video>";
        }

        function showExperience() {
            document.getElementById("display-area").innerHTML = "<h3>Experience</h3><p>Description of your work experience</p>";
        }

        function showEducation() {
            document.getElementById("display-area").innerHTML = "<h3>Education</h3><p>Description of your education</p>";
        }

        function showSkills() {
            document.getElementById("display-area").innerHTML = "<h3>Programming Skills</h3><p>List of your programming skills</p>";
        }

        function showHobbies() {
            document.getElementById("display-area").innerHTML = "<h3>Hobbies</h3><p>List of your hobbies</p>";
        }
    </script>

</body>

</html>