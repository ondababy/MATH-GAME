<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
<link rel="stylesheet" href="../resources/css/learning.css">

<div class="container-fluid" style="border: none; width: 100%; font-family: 'Poppins', sans-serif; margin: 0; padding: 0;">
    <div class="header">
        <h1 class="logo">Do Math & Conquer</h1>
    </div>

    <div class="content-wrapper d-flex justify-content-center">
        <div class="content-container">
            <button id="back-btn" onclick="window.history.back()">
                <i class="fas fa-arrow-left"></i>
            </button>
            <h1 class="main-heading">Understanding Addition</h1>
            <p class="intro-text">Addition is the process of combining two or more numbers to find their total...</p>

            <div class="section">
                <h2>What is Addition?</h2>
                <p>Addition is a mathematical operation that combines numbers. The result of an addition is called the sum. For example, when we add 2 and 3 (2 + 3), the sum is 5. Here, we added the two numbers to find the total.</p>
            </div>

            <div class="section">
                <h2>The Addition Symbol</h2>
                <p>The addition symbol (+) is used to signify that two numbers are being added. In the expression 2 + 3 = 5, the plus sign connects the numbers, showing that they are to be combined to yield the sum.</p>
            </div>

            <div class="section">
                <h2>Parts of Addition</h2>
                <p>An addition statement consists of the following parts:</p>
                <ul>
                    <li><strong>Addends:</strong> The numbers being added together.</li>
                    <li><strong>Operator:</strong> The addition symbol (+) used between the addends.</li>
                    <li><strong>Sum:</strong> The result obtained from adding the addends.</li>
                </ul>
            </div>

            <div class="section">
                <h2>Addition Formula</h2>
                <p>The addition formula expresses the relationship between the addends and their sum as: addend + addend = sum. For example, in the equation 5 + 6 = 11, 5 and 6 are the addends, and 11 is the sum.</p>
                <img src="../resources/images/tut.png" style="width: 100%; max-width: 600px; margin-top: 15px;" alt="Addition Formula Example">
            </div>

            <div class="section">
                <h2>Solved Examples of Addition</h2>
                <p>When solving addition problems, you can easily add single-digit numbers. However, for larger numbers, it's helpful to organize them by place value (ones, tens, hundreds, etc.). Start adding from the right side (the ones column) and move left. Sometimes you'll encounter carry-overs in your calculations. In the following sections, we'll explore addition with and without regrouping.</p>
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
            <a href="../games/easy/addition.php">Easy</a>
            <a href="../games/medium/addition.php">Medium</a>
            <a href="../games/hard/addition.php">Hard</a>
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
