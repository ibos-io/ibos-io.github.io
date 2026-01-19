<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dhaka Consulting | Income Tax | VAT | Company Formation | Business Consultancy</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Reset and base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
            background: #f9f9f9;
            color: #333;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        header {
            background: #004085;
            color: #fff;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }
        header .logo {
            font-size: 1.5rem;
            font-weight: 700;
            letter-spacing: 1px;
        }
        nav {
            display: flex;
            gap: 1.5rem;
            flex-wrap: wrap;
        }
        nav a {
            color: #ffffff;
            font-weight: 500;
            padding: 0.5rem;
            transition: background-color 0.3s ease;
            border-radius: 5px;
        }
        nav a:hover, nav a.active {
            background-color: #0056b3;
        }
        @media (max-width: 600px) {
            header {
                flex-direction: column;
                align-items: flex-start;
            }
            nav {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
<header>
    <div class="logo">Dhaka Consulting</div>
    <nav>
        <a href="index.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Home</a>
        <a href="about.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">About</a>
        <a href="services.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active' : ''; ?>">Services</a>
        <a href="contact.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">Contact</a>
    </nav>
</header>
<main>
<!-- Page content starts -->
