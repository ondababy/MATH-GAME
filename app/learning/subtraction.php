<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
<link rel="stylesheet" href="../resources/css/learning.css">
<div class="container-fluid" style="border: none; width: 100%; font-family: 'Poppins', sans-serif; margin: 0; padding: 0;">
    <div class="header">
        <h1 class="logo">Do Math & Conquer</h1>
    </div>

    <div class="content-wrapper d-flex justify-content-center">
        <div class="content-container">
            <h1 class="main-heading">Understanding Subtraction</h1>
            <p class="intro-text">Subtraction is the process of taking one number away from another to find the difference. It is a fundamental arithmetic operation used in everyday life, such as calculating change or measuring distances. In this section, we'll explore the definition of subtraction, the subtraction symbol, parts of subtraction, and examples.</p>
            
            <div class="section">
                <h2>What is Subtraction?</h2>
                <p>Subtraction is a mathematical operation that determines the difference between two numbers. The result of a subtraction is called the difference. For example, when we subtract 3 from 5 (5 - 3), the difference is 2. Here, we are taking away 3 from 5 to find out how much is left.</p>
            </div>
            
            <div class="section">
                <h2>The Subtraction Symbol</h2>
                <p>The subtraction symbol (−) is used to signify that one number is being taken away from another. In the expression 5 - 3 = 2, the minus sign indicates that 3 is to be removed from 5 to yield the difference.</p>
            </div>
            
            <div class="section">
                <h2>Parts of Subtraction</h2>
                <p>A subtraction statement consists of the following parts:</p>
                <ul>
                    <li><strong>Minuend:</strong> The number from which another number is subtracted.</li>
                    <li><strong>Subtrahend:</strong> The number that is to be subtracted.</li>
                    <li><strong>Difference:</strong> The result obtained from the subtraction.</li>
                </ul>
            </div>

            <div class="section">
                <h2>Subtraction Formula</h2>
                <p>The subtraction formula expresses the relationship between the minuend and subtrahend as: minuend - subtrahend = difference. For example, in the equation 8 - 3 = 5, 8 is the minuend, 3 is the subtrahend, and 5 is the difference.</p>
                <img src="../resources/images/tut4.png" style="width: 100%; max-width: 600px; margin-top: 15px;" alt="Subtraction Formula Example">
            </div>

            <div class="section">
                <h2>Solved Examples of Subtraction</h2>
                <p>When solving subtraction problems, you can easily subtract single-digit numbers. For larger numbers, it can be helpful to borrow from the next place value when necessary. In the following sections, we'll explore subtraction with and without borrowing.</p>
                <img src="../resources/images/borrow.png" style="width: 100%; max-width: 600px; margin-top: 15px;" alt="Subtraction with Borrowing Example">
            </div>

            <div class="knowledge-test">Ready to test your knowledge?</div>
            <div class="button-container">
                <span class="start-button" id="open-modal-btn">Start Playing ➔</span>
            </div>
        </div>
    </div>
</div>


<div class="modal-overlay" id="modal-overlay">
    <div class="modal">
        <button class="close-btn" id="close-modal-btn">✖</button>
        <h2>Choose Your Difficulty</h2>
        <div class="modal-buttons">
            <a href="../games/easy/subtraction.php">Easy</a>
            <a href="../games/medium/subtraction.php">Medium</a>
            <a href="../games/hard/subtraction.php">Hard</a>
        </div>
    </div>
</div>

<script>
    const openModalBtn = document.getElementById('open-modal-btn');
    const closeModalBtn = document.getElementById('close-modal-btn');
    const modalOverlay = document.getElementById('modal-overlay');

    openModalBtn.addEventListener('click', () => {
        modalOverlay.style.display = 'block';
    });

    closeModalBtn.addEventListener('click', () => {
        modalOverlay.style.display = 'none';
    });

    window.addEventListener('click', (e) => {
        if (e.target === modalOverlay) {
            modalOverlay.style.display = 'none';
        }
    });
</script>
