<?php
define('BASE_URL', '/it-professional-elective/app/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="resources/css/style.css"> <!-- External CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Do Math & Conquer</title>
    <style>
        /* Navbar styling */
        .custom-navbar {
            background-color: #07244C; /* Dark navy blue */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        }

        .custom-navbar-brand {
            color: #E5EAF3; /* Light blue-gray */
            font-family: 'Pacifico', cursive;
            font-size: 30px;
            font-weight: bold;
        }

        .custom-navbar-brand:hover {
            color: #7671FA; /* Primary blue for hover */
        }

    </style>
</head>
<body>
<div class="navbar sticky-top p-4 custom-navbar">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <a href="<?php echo BASE_URL; ?>index.php" class="navbar-brand custom-navbar-brand">
            Do Math & Conquer
        </a>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</html>
