<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
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
            <h1 class="main-heading">Understanding Multiplication</h1>
            <p class="intro-text">Multiplication is the process of combining equal groups of numbers to find their total. It is a fundamental arithmetic operation used in various aspects of daily life, such as calculating areas, determining costs, or analyzing data. In this section, we'll explore the definition of multiplication, the multiplication symbol, parts of multiplication, and examples.</p>
            
            <div class="section">
                <h2>What is Multiplication?</h2>
                <p>Multiplication is a mathematical operation that combines numbers by adding them repeatedly. The result of a multiplication is called the product. For example, when we multiply 2 and 3 (2 × 3), the product is 6. Here, we are adding the number 2 three times to find the total.</p>
            </div>
            
            <div class="section">
                <h2>The Multiplication Symbol</h2>
                <p>The multiplication symbol (×) or an asterisk (*) is used to signify that two numbers are being multiplied. In the expression 2 × 3 = 6, the multiplication sign indicates that 2 is being combined with 3 to yield the product.</p>
            </div>
            
            <div class="section">
                <h2>Parts of Multiplication</h2>
                <p>A multiplication statement consists of the following parts:</p>
                <ul>
                    <li><strong>Factors:</strong> The numbers being multiplied together.</li>
                    <li><strong>Operator:</strong> The multiplication symbol (× or *) used between the factors.</li>
                    <li><strong>Product:</strong> The result obtained from multiplying the factors.</li>
                </ul>
            </div>

            <div class="section">
                <h2>Multiplication Formula</h2>
                <p>The multiplication formula expresses the relationship between the factors and their product as: factor × factor = product. For example, in the equation 5 × 6 = 30, 5 and 6 are the factors, and 30 is the product.</p>
                <img src="../resources/images/tut3.png" style="width: 100%; max-width: 600px; margin-top: 15px;" alt="Multiplication Formula Example">
            </div>

            <div class="section">
                <h2>Properties of Multiplication</h2>
                <ul>
                    <li><strong>Commutative Property:</strong> The order of factors doesn’t affect the product. For instance, 3 × 4 is the same as 4 × 3.</li>
                    <li><strong>Associative Property:</strong> When multiplying three or more numbers, grouping doesn’t affect the product, such as (2 × 3) × 4 = 2 × (3 × 4).</li>
                    <li><strong>Distributive Property:</strong> Multiplication distributes over addition, like in 3 × (4 + 5) = (3 × 4) + (3 × 5).</li>
                    <li><strong>Identity Property:</strong> Multiplying by 1 leaves the number unchanged, e.g., 7 × 1 = 7.</li>
                </ul>
            </div>

            <div class="section">
                <h2>Real-World Applications of Multiplication</h2>
                <p>Multiplication is used in many everyday situations, such as:</p>
                <ul>
                    <li>Calculating the total cost of items when each item costs a set amount.</li>
                    <li>Finding areas of shapes, such as rectangles (length × width).</li>
                    <li>Working out distances by combining speeds and times (e.g., speed × time = distance).</li>
                </ul>
            </div>

            <div class="section">
                <h2>Solved Examples of Multiplication</h2>
                <p>When solving multiplication problems, you can easily multiply single-digit numbers. For larger numbers, it's helpful to organize them using methods like grid multiplication or the traditional algorithm. In the following sections, we'll explore multiplication with and without carrying.</p>
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
            <a href="../games/easy/multiplication.php">Easy</a>
            <a href="../games/medium/multiplication.php">Medium</a>
            <a href="../games/hard/multiplication.php">Hard</a>
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
