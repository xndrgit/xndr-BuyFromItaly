<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
</head>
<body>
<h2>New Contact Form Submission</h2>

<p><strong>Name:</strong> {{ $lead->name }}</p>
<p><strong>Email:</strong> {{ $lead->email }}</p>
<p><strong>Message:</strong> {{ $lead->message }}</p>

<p>Thank you for using our contact form!</p>
</body>
</html>
