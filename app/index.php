<?php
include("./includes/header.php");
?>
<style>
    .footer {
        background-color: #7671FA;
        color: #E5EAF3;
        padding: 20px 0;
        text-align: center;
    }

    .footer a {
        color: #E5EAF3;
        text-decoration: none;
        margin: 0 10px;
        font-size: 14px;
        transition: color 0.3s;
    }

    .footer a:hover {
        color: #FFD700;
    }

    .footer .social-icons a {
        margin: 0 8px;
        font-size: 18px;
        color: #E5EAF3;
    }

    .topics {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 30px;
    }

    .topic {
        width: 280px;
        margin: 15px;
        text-align: center;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        border-radius: 8px;
        overflow: hidden;
        background-color: #E5EAF3;
        color: #07244C;
    }

    .topics h3 {
        margin: 10px 0 5px;
        font-size: 20px;
        color: #07244C;
    }

    .section-title {
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 40px;
        color: #07244C;
    }

    .features-section {
        padding: 50px 0;
        text-align: center;
        background-color: #E5EAF3;
    }

    .features {
        display: flex;
        flex-direction: column;
        gap: 40px;
    }

    .feature {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 20px;
    }

    .feature-img img {
        width: 120px;
        height: 180px;
    }

    .feature-text {
        text-align: left;
    }

    .feature-number {
        font-size: 36px;
        color: #7671FA;
        font-weight: bold;
        margin-right: 10px;
    }

    .feature h3 {
        font-size: 22px;
        font-weight: bold;
        color: #07244C;
    }

    .feature p {
        font-size: 16px;
        color: #7E7FAC;
    }

    .section-1 {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        padding: 20px;
        color: #E5EAF3;
        background-color: #07244C;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    }

    .content-wrapper {
        display: flex;
        justify-content: space-between;
        width: 100%;
    }

    .left-content h1 {
        font-size: 48px;
        font-weight: bold;
        margin-bottom: 15px;
        color: #E5EAF3;
    }

    .left-content p {
        font-size: 18px;
        margin-bottom: 15px;
        color: #E5EAF3;
    }

    .cta-button {
        display: inline-block;
        padding: 12px 20px;
        background-color: #7671FA;
        color: #ffffff;
        font-weight: bold;
        font-size: 16px;
        border-radius: 8px;
        text-decoration: none;
        margin-bottom: 8px;
    }

    .cta-button:hover {
        background-color: #7E7FAC;
    }

    .right-content {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .image-placeholder {
        width: 100%;
        max-width: 600px;
        height: auto;
    }

    .footer .mt-3 {
        font-size: 12px;
    }
</style>



<section class="section-1">
    <div class="content-wrapper">
        <div class="left-content">
            <h1>Sharpen Your Math Skills Through Fun Games</h1>
            <p>Challenge yourself with exciting math games that enhance your skills while making learning fun.</p>
            <p>Whether you're practicing or testing your knowledge, our interactive games will boost your accuracy, speed, and confidence in math.</p>
            <a href="home.php" class="cta-button">Get Started</a>
        </div>
        <div class="right-content">
            <img class="image-placeholder" src="resources/images/mathhh.jpg" alt="Fun Math Games" />
        </div>
    </div>
</section>

<section class="features-section">
    <div class="container">
        <h2 class="section-title">Boost your math skills with us!</h2>
        <div class="features">
            <div class="feature">
                <div class="feature-img">
                    <img src="resources/images/2.png" alt="Sign up in seconds">
                </div>
                <div class="feature-text">
                    <span class="feature-number">1.</span>
                    <h3>Sign up in seconds</h3>
                    <p>Create an account on our website and get started in just 1 minute. Once you've signed up, you'll have access to all of our free, standards-aligned games.</p>
                </div>
            </div>
            <div class="feature">
                <div class="feature-img">
                    <img src="resources/images/3.png" alt="Choose from 1000 skills to practice">
                </div>
                <div class="feature-text">
                    <span class="feature-number">2.</span>
                    <h3>Choose your math skills you want to improve</h3>
                    <p>Select the math facts or skills you want to practice, and we'll generate problems based on your selection.</p>
                </div>
            </div>
            <div class="feature">
                <div class="feature-img">
                    <img src="resources/images/1.png" alt="Monitor progress with detailed reports">
                </div>
                <div class="feature-text">
                    <span class="feature-number">3.</span>
                    <h3>Monitor progress with detailed reports</h3>
                    <p>Our detailed game reports help you to track students' progress and identify areas for improvement. You can use this information to adjust your approach and ensure students are meeting standards.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container">
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
    </div>
</footer>
