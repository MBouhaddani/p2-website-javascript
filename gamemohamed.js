// Volledige logica van het spel binnen deze functie
const game = () => {
	let playerScore = 0;
	let computerScore = 0;
	let moves = 0;


	// Functies 
	const playGame = () => {
		const rockBtn = document.querySelector('.rock');
		const paperBtn = document.querySelector('.paper');
		const scissorBtn = document.querySelector('.scissor');
		const playerOptions = [rockBtn, paperBtn, scissorBtn];
		const computerOptions = ['rock', 'paper', 'scissors']

		// functie om de game te starten
		playerOptions.forEach(option => {
			option.addEventListener('click', function () {

				const movesLeft = document.querySelector('.movesleft');
				moves++;
				movesLeft.innerText = `Moves Left: ${10 - moves}`;


				const choiceNumber = Math.floor(Math.random() * 3);
				const computerChoice = computerOptions[choiceNumber];

				// functie die check wie wint
				winner(this.innerText, computerChoice)

				// functie die checkt of het spel voorbij is
				if (moves == 10) {
					gameOver(playerOptions, movesLeft);
				}
			})
		})

	}

	// functie die checkt wie wint
	const winner = (player, computer) => {
		const result = document.querySelector('.result');
		const playerScoreBoard = document.querySelector('.p-count');
		const computerScoreBoard = document.querySelector('.c-count');
		player = player.toLowerCase();
		computer = computer.toLowerCase();
		if (player === computer) {
			result.textContent = 'Tie'
		}
		else if (player == 'rock') {
			if (computer == 'paper') {
				result.textContent = 'Computer Won';
				computerScore++;
				computerScoreBoard.textContent = computerScore;

			} else {
				result.textContent = 'Player Won'
				playerScore++;
				playerScoreBoard.textContent = playerScore;
			}
		}
		else if (player == 'scissors') {
			if (computer == 'rock') {
				result.textContent = 'Computer Won';
				computerScore++;
				computerScoreBoard.textContent = computerScore;
			} else {
				result.textContent = 'Player Won';
				playerScore++;
				playerScoreBoard.textContent = playerScore;
			}
		}
		else if (player == 'paper') {
			if (computer == 'scissors') {
				result.textContent = 'Computer Won';
				computerScore++;
				computerScoreBoard.textContent = computerScore;
			} else {
				result.textContent = 'Player Won';
				playerScore++;
				playerScoreBoard.textContent = playerScore;
			}
		}
	}

	// functie die checkt of het spel voorbij is
	const gameOver = (playerOptions, movesLeft) => {

		const chooseMove = document.querySelector('.move');
		const result = document.querySelector('.result');
		const reloadBtn = document.querySelector('.reload');

		playerOptions.forEach(option => {
			option.style.display = 'none';
		})


		chooseMove.innerText = 'Game Over!!'
		movesLeft.style.display = 'none';

		if (playerScore > computerScore) {
			result.style.fontSize = '2rem';
			result.innerText = 'You Won The Game'
			result.style.color = '#308D46';
		}
		else if (playerScore < computerScore) {
			result.style.fontSize = '2rem';
			result.innerText = 'You Lost The Game';
			result.style.color = 'red';
		}
		else {
			result.style.fontSize = '2rem';
			result.innerText = 'Tie';
			result.style.color = 'grey'
		}
		reloadBtn.innerText = 'Restart';
		reloadBtn.style.display = 'flex'
		reloadBtn.addEventListener('click', () => {
			window.location.reload();
		})
	}


	// functie die de game start
	playGame();

}

game();
