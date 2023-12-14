<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tunis Sans Frontièr → Welcome</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dhurjati&display=swap" rel="stylesheet">
    <style>
        body, html {
            font-family: 'Dhurjati', sans-serif;
            margin: 0;
            padding: 0;
            height: 100%;
            background-color: #f7f7f7; /* Background color for the page */
        }

        /* Flexbox layout for alignment */
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            padding: 0 20px;
        }

        .logo {
            width: 80%; /* Adjust the logo width */
            max-width: 400px;
            height: auto;
            margin-bottom: 20px;
        }

        .text {
            text-align: center;
            font-size: 14px;
            color: #333; /* Adjust text color */
            /* Additional styling for your text */
            margin-bottom: 20px;
            margin-top: 0;
        }

        /* Styling for the home button */
        .home-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60px; /* Adjust the home button width */
            height: 60px; /* Adjust the home button height */
            border-radius: 50%;
            margin-top: 20px;
            text-decoration: none;
            background-color: #fff; /* Background color for the button */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Shadow effect */
            transition: transform 0.3s ease; /* Smooth transition on hover */
        }

        /* Styles for the home button icon */
        .home-btn img {
            width: 60px; /* Adjust the icon size */
            height: auto;
        }

        /* Hover effect for the home button */
        .home-btn:hover {
            transform: scale(1.1); /* Scale up the button on hover */
        }
    </style>
</head>
<body>
<div class="container">
    <img src="/img/logo.png" alt="Tunis Sans Frontièr - TSF - Mall Online" class="logo">
    <p class="text">
        Tunis Sans Frontièr (TSF) vous offre une large gamme de produits importés du monde entier, comprenant des
        articles d'Europe, de Chine, d'Amérique et bien plus encore.
    </p>
    <p class="text">Découvrez notre sélection de produits importés par Tunis Sans Frontièr.</p>

    <a href="/home" class="home-btn">
        <img src="/img/home.png" alt="Tunis Sans Frontièr - Home">
    </a>
</div>
</body>
</html>
