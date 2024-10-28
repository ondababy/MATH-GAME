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
            <h1 class="main-heading">Understanding Addition</h1>
            <p class="intro-text">Addition is a fundamental arithmetic operation that helps us combine values to find their total. Learning how to add is crucial for solving math problems, whether it's simple calculations or complex equations.</p>

            <div class="section">
                <h2>What is Addition?</h2>
                <p>Addition is the mathematical operation that brings two or more numbers together to form a new total called the sum. For example, when we add 2 and 3 (2 + 3), we get a sum of 5. Addition is one of the four basic operations in mathematics, along with subtraction, multiplication, and division.</p>
                <p>In real life, addition is used in situations such as calculating money, combining scores, counting items, and much more.</p>
            </div>

            <div class="section">
                <h2>The Addition Symbol</h2>
                <p>The symbol for addition is the plus sign <strong>(+)</strong>. It signifies that two or more values are to be combined to form a sum. In an addition sentence like 4 + 5 = 9, the plus sign connects the two numbers, indicating that they should be added together to get the total.</p>
            </div>

            <div class="section">
                <h2>Parts of Addition</h2>
                <p>An addition statement includes the following parts:</p>
                <ul>
                    <li><strong>Addends:</strong> These are the numbers that we are adding together.</li>
                    <li><strong>Operator:</strong> The addition symbol (+) that shows the action of combining the numbers.</li>
                    <li><strong>Sum:</strong> The result obtained by adding the addends.</li>
                </ul>
                <p>For example, in the equation 6 + 7 = 13, 6 and 7 are the addends, and 13 is the sum.</p>
            </div>

            <div class="section">
                <h2>Addition Formula</h2>
                <p>The formula for addition is simple: <strong>addend + addend = sum</strong>. For instance, in the equation 8 + 5 = 13, 8 and 5 are combined to yield a sum of 13.</p>
                <img src="../resources/images/tut.png" style="width: 100%; max-width: 600px; margin-top: 15px;" alt="Addition Formula Example">
            </div>

            <div class="section">
                <h2>Types of Addition</h2>
                <p>Addition can be classified based on the number and type of addends. Here are a few types of addition:</p>
                <ul>
                    <li><strong>Single-Digit Addition:</strong> Adding numbers between 0 and 9. E.g., 3 + 4 = 7.</li>
                    <li><strong>Double-Digit Addition:</strong> Adding two-digit numbers. E.g., 23 + 15 = 38.</li>
                    <li><strong>Column Addition:</strong> When adding large numbers, it's useful to arrange numbers in columns by place value (ones, tens, hundreds) to make addition easier.</li>
                    <li><strong>Adding with Regrouping (Carrying):</strong> When a column adds up to more than 9, the extra value is carried over to the next column. E.g., 57 + 68 = 125.</li>
                </ul>
            </div>

            <div class="section">
                <h2>Solved Examples of Addition</h2>
                <p>Here are some examples that illustrate addition with and without regrouping:</p>
                <ul>
                    <li><strong>Example 1 (No Regrouping):</strong> 23 + 14 = 37</li>
                    <li><strong>Example 2 (With Regrouping):</strong> 76 + 59 = 135 (carry 1 to the next column)</li>
                    <li><strong>Example 3 (Column Addition):</strong><br> 
                        <pre>
                           459
                        +  284
                        ------
                           743
                        </pre>
                    </li>
                </ul>
                <p>In each case, remember to align the numbers by their place values to ensure accuracy, especially when adding larger numbers.</p>
            </div>

            <div class="section">
                <h2>Why is Addition Important?</h2>
                <p>Addition is a foundational skill in mathematics and daily life. It is essential for calculating costs, managing time, measuring, and solving problems. Developing a solid understanding of addition paves the way for mastering other operations and understanding more complex math concepts.</p>
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
