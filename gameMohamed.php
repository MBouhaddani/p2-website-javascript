<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, 
				initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">

	<title>steen papier schaar</title>
</head>

<body>
	<section class="game">
		<!--Titel -->
		<div class="title">steen papier schaar</div>

		<!-- laat score zien -->
		<div class="score">
			<div class="playerScore">
				<h2>Player</h2>
				<p class="p-count count">0</p>

			</div>
			<div class="computerScore">
				<h2>Computer</h2>
				<p class="c-count count">0</p>

			</div>
		</div>

		<div class="move">Choose your move</div>

		<!-- nummer zets die over zijn voor dat de game voorbij is  -->
		<div class="movesleft">Moves Left: 10 </div>

		<!-- opties voor de speler om te spelen -->
		<div class="options">
			<button class="rock">Rock</button>
			<button class="paper">Paper</button>
			<button class="scissor">Scissors</button>
		</div>

		<!-- resultaat van het spel -->
		<div class="result"></div>

		<!-- restart de game -->
		<button class="reload"></button>

	</section>
	<div class="centered-menu">
		<?php include 'menu.php'; ?>
	</div>
	<script src="gamemohamed.js"></script>
	<?php include 'footer.php'; ?>

</body>

</html>