<?php include("../includes/mainheader.php")?>

<div class="container-fluid" style="border: none; width: 100%; font-family: 'Poppins', sans-serif; margin: 0; padding: 0;">
    <div class="header" style="background-color: #07244C;">
        <h1 class="logo">Do Math & Conquer</h1>
    </div>

    <div class="content-wrapper d-flex justify-content-center">
        <div class="content-container">
            <button id="back-btn" onclick="window.history.back()">
                <i class="fas fa-arrow-left"></i>
            </button>
            <h1 class="main-heading">Understanding Division</h1>
            <p class="intro-text">Division is the process of distributing a number into equal parts or groups. It is a fundamental arithmetic operation used in various aspects of daily life, such as sharing resources, calculating averages, or determining rates. In this section, we'll explore the definition of division, the division symbol, parts of division, types of division, examples, and real-world applications.</p>

            <div class="section">
                <h2>What is Division?</h2>
                <p>Division is a mathematical operation that separates a number (the dividend) into a specified number of equal parts (the divisor). The result of a division is called the quotient. For example, when we divide 6 by 2 (6 ÷ 2), the quotient is 3. Here, we split the number 6 into two equal parts.</p>
            </div>

            <div class="section">
                <h2>The Division Symbol</h2>
                <p>The division symbol (÷) is used to indicate that one number is being divided by another. In the expression 6 ÷ 2 = 3, the division sign shows that 6 is being divided into 2 equal parts, resulting in the quotient of 3. Another way to represent division is by using a slash (/) or fraction notation.</p>
            </div>

            <div class="section">
                <h2>Parts of Division</h2>
                <p>A division statement consists of the following parts:</p>
                <ul>
                    <li><strong>Dividend:</strong> The number being divided.</li>
                    <li><strong>Divisor:</strong> The number by which the dividend is divided.</li>
                    <li><strong>Quotient:</strong> The result obtained from dividing the dividend by the divisor.</li>
                    <li><strong>Remainder:</strong> If the division does not result in a whole number, the remainder is what is left after dividing. For example, 10 ÷ 3 = 3 with a remainder of 1.</li>
                </ul>
            </div>

            <div class="section">
                <h2>Types of Division</h2>
                <p>There are two main types of division:</p>
                <ul>
                    <li><strong>Exact Division:</strong> When the division results in a whole number without a remainder. For example, 8 ÷ 2 = 4.</li>
                    <li><strong>Division with Remainder:</strong> When the division leaves a remainder. For example, 10 ÷ 3 = 3 R1, where 1 is the remainder.</li>
                </ul>
            </div>

            <div class="section">
                <h2>Division Formula</h2>
                <p>The division formula expresses the relationship between the dividend, divisor, and quotient as: dividend ÷ divisor = quotient. For example, in the equation 12 ÷ 3 = 4, 12 is the dividend, 3 is the divisor, and 4 is the quotient.</p>
                <img src="../resources/images/tut2.png" style="width: 100%; max-width: 600px; margin-top: 15px;" alt="Division Formula Example">
            </div>

            <div class="section">
                <h2>Real-World Applications of Division</h2>
                <p>Division is useful in various real-life situations, such as:</p>
                <ul>
                    <li><strong>Sharing:</strong> Dividing a total amount of items equally among people, such as splitting a bill.</li>
                    <li><strong>Distributing Resources:</strong> Dividing resources like food, money, or time.</li>
                    <li><strong>Calculating Rates:</strong> Determining speed, rates, or prices per unit, such as miles per hour or price per item.</li>
                    <li><strong>Averages:</strong> Calculating averages, such as finding the average score by dividing the total score by the number of tests.</li>
                </ul>
            </div>

            <div class="section">
                <h2>Solved Examples of Division</h2>
                <p>When solving division problems, it is helpful to understand how to divide single-digit numbers. For larger numbers, long division methods can be used. It's also important to recognize cases where division may not result in a whole number. In the following sections, we'll explore division with and without remainders.</p>
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
            <a href="../games/easy/division.php">Easy</a>
            <a href="../games/medium/division.php">Medium</a>
            <a href="../games/hard/division.php">Hard</a>
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
