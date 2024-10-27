<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="../../resources/css/games.css">

<div class="container">
    <button id="back-btn" onclick="window.history.back()">
        <i class="fas fa-arrow-left"></i>
    </button>
    <div class="header">Do Math & Conquer</div>
    <h3>Division - Medium</h3>
    <p>Fill in the blank with the correct answer!</p>
    <div id="timer">Timer: 60 seconds</div>
    <div id="question"></div>
    <button id="start-btn">Start</button>
    <button id="submit-btn">Submit</button>
    <button id="reveal-btn">Reveal Answer</button>
    <div id="alert" class="alert"></div>

    <div id="solution-container" class="solution-container">
        <h4>Solution:</h4>
        <div id="solution-display"></div>
    </div>
</div>

<script>
    const startBtn = document.getElementById('start-btn');
    const question = document.getElementById('question');
    const submitBtn = document.getElementById('submit-btn');
    const revealBtn = document.getElementById('reveal-btn');
    const alertBox = document.getElementById('alert');
    const solutionContainer = document.getElementById('solution-container');
    const solutionDisplay = document.getElementById('solution-display');
    const timerDisplay = document.getElementById('timer');

    let solution;
    let num1, num2;
    let timer;
    let timeRemaining = 60;
    let gameActive = false;

    const randomValue = (min, max) => Math.floor(Math.random() * (max - min) + min);

    const showAlert = (message, type) => {
        alertBox.innerHTML = message;
        alertBox.className = type === 'success' ? 'alert alert-success' : 'alert alert-error';
        alertBox.style.display = 'block';
        setTimeout(() => { alertBox.style.display = 'none'; }, 2000);
    };

    const questionGenerator = () => {
        num2 = randomValue(1, 20); 
        solution = randomValue(1, 20); 
        num1 = solution * num2; 
        question.innerHTML = `${num1} ÷ ${num2} = <input type="number" id="inputValue" placeholder="?">`;
    };

    revealBtn.style.display = 'none';

    startBtn.addEventListener("click", () => {
        if (!gameActive) {
            gameActive = true; 
            timeRemaining = 60; 
            timerDisplay.innerHTML = `Timer: ${timeRemaining} seconds`;
            startBtn.style.display = 'none';
            questionGenerator();
            revealBtn.style.display = 'inline-block';
            startTimer(); 
        }
    });

    const startTimer = () => {
        clearInterval(timer); 
        timer = setInterval(() => {
            timeRemaining--;
            timerDisplay.innerHTML = `Timer: ${timeRemaining} seconds`;
            if (timeRemaining <= 0) {
                clearInterval(timer);
                gameActive = false;
                showAlert("Time's up! You can start a new game.", "error");
                resetGame();
            }
        }, 1000);
    };

    submitBtn.addEventListener("click", () => {
        const userInput = document.getElementById("inputValue").value;
        if (userInput) {
            if (parseFloat(userInput) === solution) {
                showAlert("Great Job! Correct Answer.", "success");
                questionGenerator(); 
                solutionContainer.style.display = 'none';
            } else {
                showAlert("Oops! That's not correct.", "error");
            }
        } else {
            showAlert("Please enter a value.", "error");
        }
    });

    revealBtn.addEventListener("click", () => {
        solutionDisplay.innerHTML = `${num1} ÷ ${num2} = ${solution}`;
        solutionContainer.style.display = 'block';
    });

    const resetGame = () => {
        startBtn.style.display = 'inline-block';
        question.innerHTML = '';
        solutionContainer.style.display = 'none';
        alertBox.style.display = 'none';
        gameActive = false;
    };
</script>
