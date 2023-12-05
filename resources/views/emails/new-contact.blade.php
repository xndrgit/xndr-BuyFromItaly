<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tunis Sans Frontier</title>
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

    <p>you received a message by {{$lead->name}}</p>
    <p>{{$lead->message}}</p>
    <p>{{$lead->phone}}</p>
    {{--    <p>Grazie.</p>--}}
</div>
{{--<p class="thank-you">by {{$lead->name}}</p>--}}
</body>
</html>
