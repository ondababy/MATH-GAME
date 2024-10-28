<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous" defer></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../resources/css/learning.css">

<div class="container-fluid" style="border: none; width: 100%; font-family: 'Poppins', sans-serif; margin: 0; padding: 0;">
    <div class="header" style="background-color: #07244C;">
        <h1 class="logo">Do Math & Conquer</h1>
    </div>

    <div class="content-wrapper d-flex justify-content-center">
        <div class="content-container">
            <button id="back-btn" onclick="window.history.back()">
                <i class="fas fa-arrow-left"></i>
            </button>
            <h1 class="main-heading">Understanding Subtraction</h1>
            <p class="intro-text">Subtraction is the process of taking one number away from another to find the difference. It is a fundamental arithmetic operation used in daily life, like calculating change or distances. This section will cover the definition of subtraction, symbols, parts, rules, and examples.</p>
            
            <div class="section">
                <h2>What is Subtraction?</h2>
                <p>Subtraction is a mathematical operation to find the difference between two numbers. The result of subtraction is called the difference. For example, subtracting 3 from 5 (5 - 3) gives a difference of 2. This means taking 3 away from 5 leaves us with 2.</p>
            </div>
            
            <div class="section">
                <h2>The Subtraction Symbol</h2>
                <p>The minus sign (−) represents subtraction. In the expression 5 - 3 = 2, the minus sign indicates removing 3 from 5 to yield the difference of 2.</p>
            </div>
            
            <div class="section">
                <h2>Parts of Subtraction</h2>
                <p>A subtraction problem includes the following components:</p>
                <ul>
                    <li><strong>Minuend:</strong> The number from which another is subtracted.</li>
                    <li><strong>Subtrahend:</strong> The number to be subtracted.</li>
                    <li><strong>Difference:</strong> The result from subtracting the subtrahend from the minuend.</li>
                </ul>
            </div>

            <div class="section">
                <h2>Subtraction Formula</h2>
                <p>The subtraction formula shows how to find the difference by subtracting the subtrahend from the minuend: minuend - subtrahend = difference. For instance, in 8 - 3 = 5, 8 is the minuend, 3 is the subtrahend, and 5 is the difference.</p>
                <img src="../resources/images/tut4.png" style="width: 100%; max-width: 600px; margin-top: 15px;" alt="Subtraction Formula Example">
            </div>

            <div class="section">
                <h2>Solved Examples of Subtraction</h2>
                <p>For single-digit subtraction, calculations are straightforward. For larger numbers, borrowing from higher place values can be useful. Here’s an example with borrowing:</p>
                <img src="../resources/images/borrow.png" style="width: 100%; max-width: 600px; margin-top: 15px;" alt="Subtraction with Borrowing Example">
            </div>

            <div class="section">
                <h2>Rules of Subtraction</h2>
                <p>Here are a few essential rules when performing subtraction:</p>
                <ul>
                    <li>When subtracting 0, the minuend remains unchanged (e.g., 5 - 0 = 5).</li>
                    <li>If the minuend equals the subtrahend, the difference is 0 (e.g., 4 - 4 = 0).</li>
                    <li>Subtracting larger numbers from smaller ones results in a negative difference (e.g., 3 - 5 = -2).</li>
                </ul>
            </div>

            <div class="section">
                <h2>Applications of Subtraction</h2>
                <p>Subtraction is used in real-world scenarios such as calculating expenses, measuring lengths, and budgeting. Understanding how to subtract is foundational for tackling more complex problems like finding differences in temperature, heights, and financial balances.</p>
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
