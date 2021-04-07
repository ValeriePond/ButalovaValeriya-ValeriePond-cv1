<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{ route('contact-form') }}">
    {{ csrf_field() }}
    <input type="text" name="name" placeholder="name">
    <input type="text" name="surename" placeholder="surename">
    <input type="text" name="email" placeholder="email">
    <input type="file" name="photo" placeholder="Photo">
    <button type="submit">submit</button>
</body>
</html>