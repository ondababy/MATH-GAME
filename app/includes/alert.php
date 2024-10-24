<?php

if (isset($_SESSION['message'])) {
    
    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <strong>{$_SESSION['message']}</strong>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
    unset($_SESSION['message']);
    
}

if (isset($_SESSION['info'])) {
    
    echo "<div class='alert alert-info alert-dismissible fade show' role='alert'>
    <strong>{$_SESSION['info']}</strong>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
    unset($_SESSION['info']);
    
}

if (isset($_SESSION['warning'])) {
    
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <strong>{$_SESSION['warning']}</strong>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
    unset($_SESSION['warning']);
    
}
if (isset($_SESSION['success'])) {
    
    echo "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
    <strong>{$_SESSION['success']}</strong>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
    unset($_SESSION['success']);
    
}
?>