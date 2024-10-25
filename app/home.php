<?php
include("./includes/homeheader.php");
?>

<style>
    .section {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 120vh; 
        padding: 20px;
        color: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        text-align: center; /* Center align text */
    }
    
    .section-addition {
        background-color: #37AFE1; 
    }

    .section-subtraction {
        color: black;
        background-color: white; 
    }

    .section-multiplication {
        background-color: #37AFE1; 
    }

    .section-division {
        color: black;
        background-color: white; 
    }

    h2 {
        font-family: 'DejaVu Sans Mono', monospace;
        font-size: 3rem; 
        font-weight: bold;
    }

    p {
        font-size: 1.5rem; 
        margin-top: 10px; 
    }
</style>

<section class="section section-addition">
    <div>
        <h2>Addition</h2>
        <p>Practice your addition skills with engaging exercises and fun games. Challenge yourself and improve your speed!</p>
    </div>
</section>

<section class="section section-subtraction">
    <div>
        <h2>Subtraction</h2>
        <p>Enhance your subtraction skills through exciting challenges. Discover new techniques and strategies!</p>
    </div>
</section>

<section class="section section-multiplication">
    <div>
        <h2>Multiplication</h2>
        <p>Master your multiplication tables with interactive learning. Become a multiplication whiz in no time!</p>
    </div>
</section>

<section class="section section-division">
    <div>
        <h2>Division</h2>
        <p>Improve your division skills with thrilling problems. Tackle challenges and elevate your understanding!</p>
    </div>
</section>
