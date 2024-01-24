<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tic Tac Toe</title>
    <link rel="preconnect" href="">
    <link href="styles.css" rel="stylesheet">

    <style>
        :root {
  --text: #dbdfac;
  --bg: #2a1e5c;
  --btn-bg: #d7f171;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  color: var(--text);
  background-color: var(--bg);
  font-family: 'Nerko One', cursive;
  background-color: gray;
}

h1 {
  font-size: 80px;
  margin-bottom: 0;
  text-transform: uppercase;
}

.container {
  height: 100vh;
  width: 100vw;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

#board {
  width: 60vw;
  display: flex;
  flex-wrap: wrap;
  font-size: 100px;
  margin-top: 40px;
}

.box {
  height: 20vh;
  width: 20vw;
  display: flex;
  justify-content: center;
  align-items: center;
  color: var(--text);
}

#restart {
  padding: 10px 20px;
  background-color: ;
  border: none;
  border-radius: 20px;
  color: var(--bg);
  font-size: 20px;
  font-weight: bold;
  cursor: pointer;
  text-transform: uppercase;
  
}

    </style>
</head>
<?php include 'menu.php'; ?>
<body>
    <div class="container">
        <h1 id="heading">Play</h1>
        <h2 id="strategy"></h2>
        <button id="restart">Restart</button>
        <div id="board">
            <div class="box" id="0"></div>
            <div class="box" id="1"></div>
            <div class="box" id="2"></div>
            <div class="box" id="3"></div>
            <div class="box" id="4"></div>
            <div class="box" id="5"></div>
            <div class="box" id="6"></div>
            <div class="box" id="7"></div>
            <div class="box" id="8"></div>
        </div>
    </div>

	<script src='gameselim.js'></script>
	
	<div class="centered-menu">
		
	<?php include 'footer.php'; ?>
</body>

</html>