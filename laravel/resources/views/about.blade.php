<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <h1>Halaman About</h1>
    <h3><?php echo $name; ?></h3> <!-- php echo bisa diganti dengan =  -->
    <p><?php echo $email; ?></p>
    <img src="img/<?php echo $image; ?>" alt="<?php echo $name; ?>" width="200">
</body>
</html>