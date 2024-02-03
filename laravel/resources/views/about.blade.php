<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    <style>
        h1 {
            text-align: left;
        }

        body {
            text-align: center;
        }

        h3 {
            margin-top: 10px;
        }

        img {
            display: block; 
            margin: 0 auto; 
        }
    </style>
</head>
<body>
    <h1>Halaman About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200">
</body>
</html>