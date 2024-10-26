<?php
include("../includes/homeheader.php");
?>

<style>
    body {
        background-color: #E0F7FF;
        font-family: 'Arial', sans-serif;
        color: #333;
    }

    section {
        max-width: 1000px;
        width: 100%;
        margin: 20px auto;
        padding: 20px;
        border-radius: 10px;
        background-color: #ffffff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    h2, h3 {
        color: #1A73E8;
        font-size: 2rem;
    }

    .intro, .tutorial, .exercise {
        margin-bottom: 30px;
    }

    .btn-level {
        padding: 10px 20px;
        margin: 5px;
        font-size: 1.2rem;
        background-color: #37AFE1;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-level:hover {
        background-color: #1E88E5;
    }

    .question-container {
        margin-top: 20px;
        padding: 15px;
        background-color: #F0F8FF;
        border-radius: 8px;
    }

    .question {
        margin: 10px 0;
        font-size: 1.2rem;
    }

    .answer-options {
        margin-top: 10px;
    }

    .input-blank {
        padding: 10px;
        width: 100px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .submit-btn {
        padding: 10px 15px;
        font-size: 1.2rem;
        background-color: #FF5733;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .submit-btn:hover {
        background-color: #e04b29;
    }

    .refresh-btn {
        margin-top: 10px;
        padding: 8px 16px;
        font-size: 1rem;
        background-color: #FFEB3B;
        color: #333;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .refresh-btn:hover {
        background-color: #FDD835;
    }

    .footer {
        background-color: #37AFE1;
        color: white;
        padding: 20px 0;
        text-align: center;
    }

    .footer a {
        color: white;
        text-decoration: none;
        margin: 0 15px;
        transition: color 0.3s;
    }

    .footer a:hover {
        color: #FFD700;
    }

    .footer .social-icons a {
        margin: 0 10px;
        font-size: 20px;
    }
</style>

<section class="intro">
    <h2>Welcome to the World of Addition!</h2>
    <p>Addition is a fun and essential skill in math! Let's learn how to combine numbers to make bigger ones, like adding friends in a game or toys in a collection. Ready to explore addition?</p>
</section>

<section class="tutorial">
    <h3>What is Addition?</h3>
    <p>Addition means putting numbers together to make a bigger number. Here’s an example:</p>
    <p>If you have 2 apples and add 3 more, you have 5 apples in total. Addition helps you understand growth and combining things in real life!</p>
</section>

<section class="tutorial">
    <h3>Watch a Fun Tutorial</h3>
    <p>Learn the basics of addition in this engaging video tutorial!</p>
    <a href="https://www.youtube.com/watch?v=mjlsSYLLOSE" target="_blank" class="btn-level" style="background-color: #FFEB3B; color: #333;">Watch on YouTube</a>
</section>

<section class="exercise">
    <h3>Interactive Addition Practice</h3>
    <p>Select a level to start practicing:</p>
    <button class="btn-level" onclick="startExercise('easy')">Easy</button>
    <button class="btn-level" onclick="startExercise('medium')">Medium</button>
    <button class="btn-level" onclick="startExercise('hard')">Hard</button>

    <div id="questions-container" class="question-container" style="display: none;">
        <div id="level-display"></div>
        <div id="questions"></div>
        <button class="submit-btn" onclick="submitAnswers()">Submit Answers</button>
        <button class="refresh-btn" onclick="refreshExercise()">Refresh Questions</button>
    </div>
</section>

<script>
    function startExercise(level) {
        document.getElementById('questions-container').style.display = 'block';
        document.getElementById('level-display').innerText = `Level: ${level.charAt(0).toUpperCase() + level.slice(1)}`;
        loadQuestions(level);
    }

    function loadQuestions(level) {
        const questions = [
            { question: "What is 3 + 5?", options: ["6", "8", "10"], answer: "8" },
            { question: "Complete: 4 + ___ = 7", type: "input" },
            { question: "What is 2 + 7?", options: ["8", "9", "10"], answer: "9" },
            { question: "Fill in the blank: 1 + ___ = 4", type: "input" }
        ];

        const questionContainer = document.getElementById('questions');
        questionContainer.innerHTML = ''; // Clear previous questions

        questions.forEach((q, index) => {
            const questionElement = document.createElement('div');
            questionElement.className = 'question';
            questionElement.innerHTML = `<p>${index + 1}. ${q.question}</p>`;
            if (q.type === 'input') {
                questionElement.innerHTML += `<input type="text" class="input-blank" id="answer-${index}" />`;
            } else {
                const optionsHtml = q.options.map((option, i) =>
                    `<label><input type="radio" name="question-${index}" value="${option}"> ${option}</label><br>`
                ).join('');
                questionElement.innerHTML += `<div class="answer-options">${optionsHtml}</div>`;
            }
            questionContainer.appendChild(questionElement);
        });
    }

    function submitAnswers() {
        // Logic to submit answers will go here
        alert("Answers submitted!");
    }

    function refreshExercise() {
        document.getElementById('questions-container').style.display = 'none';
    }
</script>

<footer class="footer">
    <div>
        <a href="#about">About Us</a>
        <a href="#services">Services</a>
        <a href="#contact">Contact</a>
        <a href="#privacy">Privacy Policy</a>
        <a href="#terms">Terms of Service</a>
    </div>
    <div class="social-icons mt-3">
        <a href="#" title="Facebook"><i class="fab fa-facebook-square"></i></a>
        <a href="#" title="Twitter"><i class="fab fa-twitter-square"></i></a>
        <a href="#" title="Instagram"><i class="fab fa-instagram-square"></i></a>
        <a href="#" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
    </div>
    <div class="mt-3">
        &copy; <?php echo date("Y"); ?> Do Math & Conquer. All rights reserved.
    </div>
</footer>
