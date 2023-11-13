<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mina Vagante</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f8f8;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
        }

        .logo-container {
            margin-bottom: 20px;
            /* Insert your logo styles here */
        }

        p {
            margin-bottom: 10px;
            line-height: 1.6;
        }

        .thank-you {
            margin-top: 20px;
            color: #3498db;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="logo-container">
        <!-- Insert your logo here -->
    </div>

    <p>Ciao {{ $lead->name }},</p>
    <p>Abbiamo ricevuto il tuo messaggio!</p>
    <p>La tua richiesta è stata presa in carico e uno dei nostri membri del team sarà in contatto con te a breve per
        discutere i dettagli del tuo messaggio.</p>
    <p>Nel frattempo, se hai ulteriori informazioni da fornire o domande urgenti, sentiti libero di rispondere a questa
        email.</p>
    <p>Grazie per averci scelto 💎</p>
</div>
<p class="thank-you">Mina Vagante</p>
</body>
</html>
