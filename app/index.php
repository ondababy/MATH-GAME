<?php
include("./includes/header.php");
?>
<style>
    .section {
        height: 100vh; 
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        background-size: cover; 
        background-position: center; 
    }

    .section1 {
        background-color: #37AFE1;
        color: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    }

    .section2 {
        background-color: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    }

    .btn-get-started {
        padding: 10px 20px; 
        font-size: 20px; 
        background-color: #FFD700; 
        color: black; 
        border: none; 
        border-radius: 5px; 
        cursor: pointer; 
        transition: background-color 0.3s; 
    }

    .btn-get-started:hover {
        background-color: #FFC107; 
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

<div class="section section1">
</div>

<div class="section section2">
</div>

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

